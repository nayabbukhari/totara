<?php

require_once('../config.php');

require_once($CFG->dirroot.'/local/reportbuilder/lib.php');

$id = optional_param('id', null, PARAM_INT); // which user to show
$format = optional_param('format','', PARAM_TEXT); // export format

// default to current user
if(empty($id)) {
    $id = $USER->id;
}

if (! $user = get_record('user', 'id', $id)) {
    error('User not found');
}

// users can only view their own and their staff's pages
if ($USER->id != $id && !mitms_is_manager($id)) {
    error('You cannot view this page');
}
if ($USER->id != $id) {
    $strheading = get_string('bookingsfor','local').fullname($user, true);
} else {
    $strheading = get_string('mybookings', 'local');
}

$shortname = 'bookings';
$source = 'facetoface_sessions';
$fullname = $strheading;
$filters = array(
    array(
        'type' => 'date',
        'value' => 'sessiondate',
        'advanced' => '0',
    ),
);
$columns = array(
    array(
        'type' => 'course',
        'value' => 'courselink',
        'heading' => 'Course Name',
    ),
    array(
        'type' => 'facetoface',
        'value' => 'name',
        'heading' => 'Session Name',
    ),
    array(
        'type' => 'session',
        'value' => 'location',
        'heading' => 'Location',
    ),
    array(
        'type' => 'session',
        'value' => 'audit',
        'heading' => 'Audit',
    ),
    array(
        'type' => 'session',
        'value' => 'pilot',
        'heading' => 'Pilot',
    ),
    array(
        'type' => 'session',
        'value' => 'coursedelivery',
        'heading' => 'Course Delivery',
    ),
    array(
        'type' => 'date',
        'value' => 'sessiondate',
        'heading' => 'Session Date',
    ),
    array(
        'type' => 'date',
        'value' => 'timestart',
        'heading' => 'Start Time',
    ),
    array(
        'type' => 'date',
        'value' => 'timefinish',
        'heading' => 'End Time',
    ),
);
// only add facilitator column if role exists
if(get_field('role','id','shortname','facilitator')) {
    $columns[] = array(
        'type' => 'role',
        'value' => 'facilitator',
        'heading' => 'Facilitator',
    );
}

$restriction = array(
    // no restrictions
    // limited to single user by embedded params
    array(
        'field' => 'all',
        'funcname' => 'dummy',
    ),
);

$embeddedparams = array(
    'userid' => $id,
);

$report = new reportbuilder($shortname, true, $source, $fullname,
    $filters, $columns, $restriction, $embeddedparams);

if($format!='') {
    $report->export_data($format);
    die;
}

$fullname = $report->_fullname;
$pagetitle = format_string(get_string('report','local').': '.$fullname);
$navlinks[] = array('name' => $fullname, 'link'=> '', 'type'=>'title');

$navigation = build_navigation($navlinks);

print_header_simple($pagetitle, '', $navigation, '', null, true, null);

/* TODO split page into past and future bookings
 * all ready using tabs but need way of limiting by date
$currenttab = "futurebookings";
include('tabs.php');
 */

$countfiltered = $report->get_filtered_count();
$countall = $report->get_full_count();

// display heading including filtering stats
print_heading("$strheading: $countall results found");

$report->display_search();

print "<br />";

if($countfiltered>0) {
    $report->display_table();
    // export button
    $report->export_select();
}

print_footer();

?>