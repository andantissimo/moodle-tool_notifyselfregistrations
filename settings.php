<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

use tool_notifyselfregistration\admin_setting\special_registerauth_with_notify;

if ($hassiteconfig) {
    $ADMIN->locate('manageauths')->add(new special_registerauth_with_notify());
}
