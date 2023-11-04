<?php
/**
 * @package   tool_notifyselfregistrations
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    /** @var admin_root $ADMIN */
    /** @var admin_settingpage $notifications */
    $notifications = $ADMIN->locate('notifications');
    $notifications->add(
        new admin_setting_users_with_capability('notifyselfregistrations',
            new lang_string('notifyselfregistrations', 'tool_notifyselfregistrations'),
            new lang_string('confignotifyselfregistrations', 'tool_notifyselfregistrations'),
            array(), 'moodle/site:config')
        );
}
