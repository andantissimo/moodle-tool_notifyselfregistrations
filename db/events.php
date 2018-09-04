<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

$observers = array(
    [
        'eventname' => '\core\event\user_created',
        'callback'  => '\tool_notifyselfregistration\observer::user_created',
        'internal'  => false,
    ],
);
