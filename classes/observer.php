<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_notifyselfregistration;

defined('MOODLE_INTERNAL') || die;

class observer {
    /**
     * A new user signed up. (not yet confirmed.)
     *
     * @param \core\event\user_created $event
     */
    public static function user_created(\core\event\user_created $event) {
        $user = $event->get_record_snapshot('user', $event->objectid);
        if ($user->auth !== 'email')
            return;

        // TODO: send notification email to site admins.
    }
}
