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
 * @author Valerii Kuznetsov <valerii.kuznetsov@totaralms.com>
 * @author Alastair Munro <alastair.munro@totaralms.com>
 * @package totara
 * @subpackage totara_question
 */

class question_datepicker extends question_base{
    public function get_info() {
        return array('group' => question::GROUP_QUESTION, 'title' => get_string('questiontypedate', 'totara_question'));
    }

    /**
     * Add database fields definition that represent current customfield
     *
     * @see question_base::get_xmldb()
     * @return array()
     */
    public function get_xmldb() {
        $fields = array();
        $fields[$this->get_prefix_form()] = new xmldb_field($this->get_prefix_db(), XMLDB_TYPE_INTEGER, 10);
        return $fields;
    }

    /**
     * Customfield specific settings elements
     *
     * @param MoodleQuickForm $form
     */
    protected function define_form(MoodleQuickForm $form) {
        $form->addElement('header', 'dateheader', get_string('dateselection', 'totara_question'));
        $form->addElement('text', 'startyear', get_string('datefirstyear', 'totara_question'));
        $form->setDefault('startyear', '1970');
        $form->addElement('text', 'stopyear', get_string('datelastyear', 'totara_question'));
        $form->setDefault('stopyear', '2037'); // Year 2038 problem for 32 bit int's
        $form->setType('startyear', PARAM_INT);
        $form->setType('stopyear', PARAM_INT);
        $strrequired = get_string('fieldrequired', 'totara_question');
        $form->addRule('startyear', $strrequired, 'required', null, 'client');
        $form->addRule('stopyear', $strrequired, 'required', null, 'client');

        $form->addElement('advcheckbox', 'withtime', '', get_string('dateincludetime', 'totara_question'));
    }

    protected function define_validate($data, $files) {
        $err = array();
        if ($data->startyear >= $data->stopyear) {
            $err['startyear'] = get_string('dateinvalid', 'totara_question');
        }
        return $err;
    }

    public function define_get(stdClass $toform) {
        $toform->startyear = $this->param1['startyear'];
        $toform->stopyear = $this->param1['stopyear'];
        $toform->withtime = $this->param1['withtime'];
        return $toform;
    }

    public function define_set(stdClass $fromform) {
        $this->param1 = array();
        $this->param1['startyear'] = $fromform->startyear;
        $this->param1['stopyear'] = $fromform->stopyear;
        $this->param1['withtime'] = $fromform->withtime;
        return $fromform;
    }

    /**
     * Determines if the date includes the time.
     *
     * @return bool
     */
    public function with_time() {
        if (is_array($this->param1) && isset($this->param1['withtime'])) {
            return (bool)$this->param1['withtime'];
        }
    }

    /**
     * Add form elements that represent current field
     *
     * @see question_base::edit_form()
     * @param MoodleQuickForm $form Form to alter
     */
    public function edit_form(MoodleQuickForm $form) {
        $attributes = array(
            'startyear' => $this->param1['startyear'],
            'stopyear'  => $this->param1['stopyear'],
            'timezone'  => 99,
            'applydst'  => true,
            'optional'  => !$this->required
        );

        // Check if they wanted to include time as well.
        if ($this->param1['withtime']) {
            $form->addElement('date_time_selector', $this->get_prefix_form(), $this->label, $attributes);
        } else {
            $form->addElement('date_selector', $this->get_prefix_form(), $this->label, $attributes);
        }

        $form->setType($this->get_prefix_form(), PARAM_INT);
        if ($this->required) {
            $form->addRule($this->get_prefix_form(), get_string('required'), 'required');
        }
    }

    public function to_html($value) {
        if ($this->param1['withtime']) {
            $format = get_string('strfdateattime', 'langconfig');
        } else {
            $format = get_string('strfdateshortmonth', 'langconfig');
        }
        return userdate($value, $format);
    }

    /**
     * Is this element has any editable form fields, or it's view only (informational or static) element
     *
     * @see question_base::has_editable()
     * @return bool
     */
    public function has_editable() {
        return true;
    }
}