<?php
if (!defined('_GNUBOARD_')) exit;

/*
https://api.slack.com/methods/chat.postMessage
https://api.slack.com/custom-integrations/legacy-tokens
*/

define('G5_SLACK_USE', true);

if(!defined('G5_SLACK_USE') || G5_SLACK_USE !== true)
    return;

define('G5_SLACK_TOKEN', 'xoxp-370869726964-371094926034-372151383655-6bfcc274f3e543262d55d380d8f3cbdf');
define('G5_SLACK_USERNAME', 'Slack Bot');

// 경로설정
define('G5_SLACK_PATH', G5_PLUGIN_PATH.'/'.G5_SLACK_DIR);