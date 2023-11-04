<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'Notification of self registrations';
$string['notifyselfregistrations'] = 'Email self registrations to';
$string['confignotifyselfregistrations'] = 'Send self registrations notification message to these selected users.';
$string['notifyselfregistrationssubject'] = '{$a->sitename} :: Self registrations notification';
$string['notifyselfregistrationsmessage'] = 'New user has been self registered.

Username: {$a->username}
Fullname: {$a->fullname}
Email address: {$a->email}

{$a->profile}';
