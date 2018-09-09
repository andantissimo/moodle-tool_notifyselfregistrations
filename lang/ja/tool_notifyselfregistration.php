<?php
/**
 * @package   tool_notifyselfregistration
 * @copyright 2018 MALU {@link https://github.com/andantissimo}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = '自己登録通知';
$string['notifyselfregistrations'] = '自己登録をメール通知する';
$string['confignotifyselfregistrations'] = '選択されたユーザに自己登録通知メッセージを送信します。';
$string['notifyselfregistrationssubject'] = '{$a->sitename} :: 自己登録通知';
$string['notifyselfregistrationsmessage'] = '新しいユーザが自己登録で作成されました。

ユーザ名: {$a->username}
フルネーム: {$a->fullname}
メールアドレス: {$a->email}

{$a->profile}';
