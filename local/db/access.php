<?php
/**
 * Moodle - Modular Object-Oriented Dynamic Learning Environment
 *          http://moodle.org
 * Copyright (C) 1999 onwards Martin Dougiamas  http://dougiamas.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
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
 * @package    moodle
 * @subpackage local
 * @author     Jonathan Newman <jonathan.newman@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 1999 onwards Martin Dougiamas  http://dougiamas.com
 *
 * Capability definitions for the Moodle Industry Training Management System.
 *
 * The capabilities are loaded into the database table when the module is
 * installed or updated. Whenever the capability definitions are updated,
 * the module version number should be bumped up.
 *
 * The system has four possible values for a capability:
 * CAP_ALLOW, CAP_PREVENT, CAP_PROHIBIT, and inherit (not set).
*/

$local_capabilities = array(

    // viewing and managing a competency
    'moodle/local:viewcompetency' => array(
        'riskbitmask' => RISK_PERSONAL,
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createcompetency' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatecompetency' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletecompetency' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createcompetencydepth' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatecompetencydepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletecompetencydepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createcompetencyframeworks' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatecompetencyframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletecompetencyframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createcompetencytemplate' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatecompetencytemplate' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletecompetencytemplate' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // viewing and managing positions
    'moodle/local:viewposition' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:createposition' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:updateposition' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:deleteposition' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:createpositiondepth' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatepositiondepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletepositiondepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createpositionframeworks' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updatepositionframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deletepositionframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // viewing and managing organisations
    'moodle/local:vieworganisation' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:createorganisation' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:updateorganisation' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:deleteorganisation' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
    'moodle/local:createorganisationdepth' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updateorganisationdepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deleteorganisationdepth' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:createorganisationframeworks' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:updateorganisationframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),
    'moodle/local:deleteorganisationframeworks' => array(
        'riskbitmask'   => RISK_PERSONAL | RISK_DATALOSS,
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

  // Capability definitions for the lplan module
    // Ability for users to view their own plans
    'moodle/local:viewownplan' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for users to edit their own plans
    'moodle/local:editownplan' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to view a user's plan
    'moodle/local:viewplan' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for users to view their own favourites
    'moodle/local:viewownfavourite' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
    ),

    // Ability for users to edit their own favourites
    'moodle/local:editownfavourite' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
    ),

    // Ability for managers to view a user's favourites
    'moodle/local:viewfavourite' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for users to view the comments on their own plans
    'moodle/local:viewowncomment' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for users to comment on their own plans
    'moodle/local:addowncomment' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to view a user's plan comments
    'moodle/local:viewcomment' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for managers to comment on a user's plan
    'moodle/local:addcomment' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for users to submit their own plans for approval
    'moodle/local:submitownplan' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for users to withdraw their own submitted plans
    'moodle/local:withdrawownplan' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to approve a specific user's plan
    'moodle/local:approveplan' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to approve a specific user's plan on
    // behalf of someone else who has approval rights for that user
    'moodle/local:approveplanonbehalf' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for users to view their own list of plans
    'moodle/local:viewownlist' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to view the list of a user's plan
    'moodle/local:viewlist' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for managers to look at their own overview page
    'moodle/local:managerownoverview' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability to look at managers overview pages
    'moodle/local:manageroverview' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for trainees to look at their own overview page
    'moodle/local:traineeownoverview' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to look at a trainee's overview page
    'moodle/local:traineeoverview' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Ability for administrators to change the module settings
    'moodle/local:admin' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Ability for managers to receive notification emails.
    // used by lplan_email_notification
    'moodle/local:receivenotification' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
    ),

    // Assign a position to a user
    'moodle/local:assignuserposition' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW,
        ),
    ),

    // Assign a position to a user
    'moodle/local:assignuserposition' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
    ),

    // Assign a position to yourself
    'moodle/local:assignselfposition' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
    ),
);

?>