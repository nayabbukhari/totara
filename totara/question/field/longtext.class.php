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

class question_longtext extends question_base{
    /**
     * Stored values
     * @var array
     */
    protected $value = array();

    protected $options = array();

    public function __construct($definition, $prefix, $subjectid = 0, $answerfield = '', $answerid = 0) {
        global $TEXTAREA_OPTIONS;
        parent::__construct($definition, $prefix, $subjectid, $answerfield, $answerid);
        $this->options = $TEXTAREA_OPTIONS;
        if (isguestuser()) {
            $this->options['maxfiles'] = 0;
        }
    }

    public function get_info() {
        return array('group' => question::GROUP_QUESTION, 'title' => get_string('questiontypelongtext', 'totara_question'));
    }

    /**
     * Add database fields definition that represent current question with mapping on form elements
     *
     * @see question_base::get_xmldb()
     * @return array()
     */
    public function get_xmldb() {
        $fields = array();
        $fields[] = new xmldb_field($this->get_prefix_db(), XMLDB_TYPE_TEXT);
        $fields[] = new xmldb_field($this->get_prefix_db().'trust', XMLDB_TYPE_INTEGER, 1);
        $fields[] = new xmldb_field($this->get_prefix_db().'format', XMLDB_TYPE_INTEGER, 1);
        return $fields;
    }

    /**
     * Customfield specific settings elements
     *
     * @param MoodleQuickForm $form
     */
    protected function define_form(MoodleQuickForm $form) {

    }

    /**
     * Add form elements that represent current field
     *
     * @see question_base::edit_form()
     * @param MoodleQuickForm $form Form to alter
     */
    public function edit_form(MoodleQuickForm $form) {
        $elem = $form->addElement('editor', $this->get_prefix_form().'_editor', $this->label, array(), $this->options);
        $form->setType($this->get_prefix_form(), PARAM_CLEANHTML);

        if ($this->required) {
            $form->addRule($this->get_prefix_form().'_editor', get_string('required'), 'required');
        }
    }

    public function edit_get($dest) {
        $data = new stdClass();

        if (empty($this->value)) {
            return $data;
        }
        if ($dest == 'form') {
            $name = $this->get_prefix_form();
            $data->$name = $this->value['text'];
            $data->{$name.'format'} = $this->value['format'];
            $data = file_prepare_standard_editor($data, $name, $this->options, $this->options['context'],
                    $this->prefix, 'quest_'.$this->id, $this->answerid);
        } else {
            $name = $this->get_prefix_db();
            $data = new stdClass();
            $data->{$name.'_editor'} = $this->value;
            $data = file_postupdate_standard_editor($data, $name, $this->options, $this->options['context'],
                    $this->prefix, 'quest_'.$this->id, $this->answerid);
            unset($data->{$name.'_editor'});
        }
        return $data;
    }

    public function edit_set(stdClass $data, $source) {
        $value = array();
        if ($source == 'form') {
            $name = $this->get_prefix_form();
            $value = $data->{$name.'_editor'};
        } else {
            $name = $this->get_prefix_db();
            $value['text'] = $data->$name;
            $value['format'] = FORMAT_HTML;
            $value['trust'] = isset($data->{$name.'trust'}) ? $data->{$name.'trust'} : 0;
        }

        $this->value = $value;
    }

    public function to_html($value) {
        $data = new stdClass();
        $data->editor = $value;
        $data->editorformat = FORMAT_HTML;
        $data = file_prepare_standard_editor($data, 'editor', $this->options, $this->options['context'],
                $this->prefix, 'quest_'.$this->id, $this->answerid);
        return $data->editor_editor['text'];
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