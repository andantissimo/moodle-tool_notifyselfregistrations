<?php
/**
 * @package   tool_notifyselfregistrations
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_notifyselfregistrations;

defined('MOODLE_INTERNAL') || die;

class observer {
    /**
     * A new user signed up. (not yet confirmed.)
     *
     * @global \stdClass $CFG
     * @param \core\event\user_created $event
     */
    public static function user_created(\core\event\user_created $event) {
        global $CFG;

        $user = $event->get_record_snapshot('user', $event->objectid);
        if ($user->auth !== 'email')
            return;

        if (empty($CFG->notifyselfregistrations))
            return;

        $recipients = get_users_from_config($CFG->notifyselfregistrations, 'moodle/site:config');

        $site = get_site();
        $noreplyuser = \core_user::get_noreply_user();
        $noreplyname = new \lang_string('noreplyname');

        $a = new \stdClass;
        $a->sitename = format_string($site->fullname);
        $a->username = $user->username;
        $a->fullname = fullname($user);
        $a->email = $user->email;
        $a->profile = new \moodle_url('/user/profile.php', [ 'id' => $user->id ]);
        $subject = new \lang_string('notifyselfregistrationssubject', 'tool_notifyselfregistrations', $a);
        $message = new \lang_string('notifyselfregistrationsmessage', 'tool_notifyselfregistrations', $a);

        foreach ($recipients as $recipient) {
            if ($noreplyuser->id == \core_user::NOREPLY_USER)
                $noreplyuser->firstname = $noreplyname->out($recipient->lang);
            email_to_user($recipient, $noreplyuser, $subject->out($recipient->lang), $message->out($recipient->lang));
        }
    }
}
