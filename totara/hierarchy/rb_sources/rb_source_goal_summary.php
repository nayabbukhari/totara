<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2010 - 2013 Totara Learning Solutions LTD
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Nathan Lewis <nathan.lewis@totaralms.com>
 * @package totara
 * @subpackage reportbuilder
 */

defined('MOODLE_INTERNAL') || die();

class rb_source_goal_summary extends rb_base_source {
    public $base, $joinlist, $columnoptions, $filteroptions, $paramoptions;
    public $defaultcolumns, $defaultfilters, $embeddedparams;
    public $sourcetitle, $shortname, $selectable, $cacheable;


    public function __construct() {
        $this->base = '{goal}';
        $this->joinlist = $this->define_joinlist();
        $this->columnoptions = $this->define_columnoptions();
        $this->filteroptions = $this->define_filteroptions();
        $this->paramoptions = $this->define_paramoptions();
        $this->defaultcolumns = $this->define_defaultcolumns();
        $this->defaultfilters = $this->define_defaultfilters();
        $this->embeddedparams = $this->define_embeddedparams();
        $this->sourcetitle = get_string('sourcetitle', 'rb_source_goal_summary');
        $this->shortname = 'goal_summary';
        $this->selectable = false;
        $this->cacheable = false;

        parent::__construct();
    }


    protected function define_joinlist() {
        $joinlist = array(
            new rb_join(
                'numberassigned',
                'LEFT',
                '(SELECT goalid, COUNT(id) c
                        FROM {goal_record}
                       GROUP BY goalid)',
                'numberassigned.goalid = base.id',
                REPORT_BUILDER_RELATION_ONE_TO_ONE
            )
        );

        return $joinlist;
    }


    protected function define_columnoptions() {
        $columnoptions = array(
            new rb_column_option(
                'goal',
                'goalid',
                '',
                'base.id',
                array('selectable' => false)
            ),
            new rb_column_option(
                'goal',
                'name',
                get_string('goalnamecolumn', 'rb_source_goal_summary'),
                'base.fullname',
                array('defaultheading' => get_string('goalnameheading', 'rb_source_goal_summary'))
            ),
            new rb_column_option(
                'goal',
                'namesummarylink',
                get_string('goalnamesummarylinkcolumn', 'rb_source_goal_summary'),
                'base.fullname',
                array('displayfunc' => 'namesummarylink',
                      'extrafields' => array('goalid' => "base.id"),
                      'defaultheading' => get_string('goalnamesummarylinkheading', 'rb_source_goal_summary'))
            ),
            new rb_column_option(
                'goal',
                'numberofusersassigned',
                get_string('goalnumberofusersassignedcolumn', 'rb_source_goal_summary'),
                'COALESCE(numberassigned.c, 0)',
                array('joins' => 'numberassigned',
                      'defaultheading' => get_string('goalnumberofusersassignedheading', 'rb_source_goal_summary'))
            ),
            new rb_column_option(
                'goal',
                'scalevalues',
                get_string('goalscalevaluescolumn', 'rb_source_goal_summary'),
                'scalevalues_',
                array('columngenerator' => 'scalevalues',
                      'defaultheading' => get_string('goalscalevaluesheading', 'rb_source_goal_summary'))
            )
        );

        return $columnoptions;
    }


    public function post_config($params) {
        global $DB;

        if (empty($params)) {
            return;
        }

        $this->goalframeworkid = $params[0]->value;

        $scaleassignment = $DB->get_record('goal_scale_assignments', array('frameworkid' => $this->goalframeworkid));

        $scalevalues = $DB->get_records('goal_scale_values', array('scaleid' => $scaleassignment->scaleid));

        foreach ($scalevalues as $scalevalue) {
            $this->joinlist[] =
                new rb_join(
                    "goalrecord" . $scalevalue->id,
                    "LEFT",
                    "(SELECT goalid, COUNT(id) c
                        FROM {goal_record}
                       WHERE scalevalueid = {$scalevalue->id}
                       GROUP BY goalid)",
                    "goalrecord" . $scalevalue->id . ".goalid = base.id"
                );
        }
    }


    public function rb_cols_generator_scalevalues($columnoption, $hidden) {
        global $DB;

        if (empty($this->goalframeworkid)) {
            return array();
        }

        $scaleassignment = $DB->get_record('goal_scale_assignments', array('frameworkid' => $this->goalframeworkid));

        $scalevalues = $DB->get_records('goal_scale_values', array('scaleid' => $scaleassignment->scaleid));

        $results = array();
        foreach ($scalevalues as $scalevalue) {
            $results[] =
                new rb_column(
                    "goalrecord" . $scalevalue->id,
                    "count",
                    $scalevalue->name,
                    "COALESCE(goalrecord" . $scalevalue->id . ".c, 0)",
                    array(
                        'joins' => array("goalrecord" . $scalevalue->id),
                        'displayfunc' => $columnoption->displayfunc,
                        'extrafields' => $columnoption->extrafields,
                        'required' => false,
                        'capability' => $columnoption->capability,
                        'noexport' => $columnoption->noexport,
                        'grouping' => $columnoption->grouping,
                        'nosort' => $columnoption->nosort,
                        'style' => $columnoption->style,
                        'class' => $columnoption->class,
                        'hidden' => $hidden,
                        'customheading' => null
                    )
                );
        }

        return $results;
    }


    protected function define_filteroptions() {
        $filteroptions = array(
            new rb_filter_option(
                'goal',
                'goalid',
                get_string('goalnamecolumn', 'rb_source_goal_summary'),
                'select',
                array('selectfunc' => 'goal')
            ),
            new rb_filter_option(
                'goal',
                'numberofusersassigned',
                get_string('goalnumberofusersassignedcolumn', 'rb_source_goal_summary'),
                'number'
            )
        );

        return $filteroptions;
    }


    /**
     * Filter goal.
     *
     * @return array
     */
    public function rb_filter_goal() {
        global $DB;

        $goals = array();

        if (isset($this->goalframeworkid)) {
            $goallist = $DB->get_records('goal', array('frameworkid' => $this->goalframeworkid));
            foreach ($goallist as $goal) {
                $goals[$goal->id] = $goal->fullname;
            }
        }

        return $goals;
    }


    protected function define_paramoptions() {
        $paramoptions = array(
            new rb_param_option('goalframeworkid', 'base.frameworkid')
        );

        return $paramoptions;
    }


    protected function define_defaultcolumns() {
        $defaultcolumns = array(
            array(
                'type' => 'goal',
                'value' => 'name'
            ),
            array(
                'type' => 'goal',
                'value' => 'numberofusersassigned'
            ),
            array(
                'type' => 'goal',
                'value' => 'scalevalues'
            )
        );

        return $defaultcolumns;
    }


    protected function define_defaultfilters() {
        $defaultfilters = array();

        return $defaultfilters;
    }


    protected function define_embeddedparams() {
        $embeddedparams = array();

        return $embeddedparams;
    }

    /**
     * Link goal's name to summary report.
     *
     * @param type $user
     * @param type $row
     * @param type $isexport
     * @return type
     */
    public function rb_display_namesummarylink($name, $row, $isexport = false) {
        if ($isexport) {
            return $name;
        }

        $url = new moodle_url('/totara/hierarchy/prefix/goal/detailsreport.php',
                array('clearfilters' => 1, 'goalid' => $row->goalid));
        return html_writer::link($url, $name);
    }

}