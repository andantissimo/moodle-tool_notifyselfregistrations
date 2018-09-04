<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_notifyselfregistration\admin_setting;

defined('MOODLE_INTERNAL') || die;

class special_registerauth_with_notify extends \admin_setting_special_registerauth {
    /**
     * Calls parent::__construct with specific arguments
     */
    public function __construct() {
        parent::__construct();
        $this->set_flag_options(\admin_setting_flag::ENABLED, false, 'notify', new \lang_string('notifyadmins', 'tool_notifyselfregistration'));
    }
}
