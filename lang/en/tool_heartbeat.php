<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Are you Ok? heartbeat for load balancers etc
 *
 * @package    tool_heartbeat
 * @copyright  2014 Brendan Heywood <brendan@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Heartbeat';
$string['testing'] = 'Test heartbeat';
$string['testingdesc'] = 'You can use this to temporarily fake a warn or error condition to test that your monitoring is correctly working end to end.';
$string['normal'] = 'Normal monitoring';
$string['progress'] = 'Progress bar test';
$string['progresshelp'] = 'This tests that all the various output buffers in the entire stack are corrent including but not limited to php, ob, gzip/deflat, varnish, nginx etc';
$string['testwarning'] = 'Fake a warning';
$string['testerror'] = 'Fake a critical';
$string['allowedips'] = 'Allowed IPs Config';
$string['allowedipstitle'] = 'IP Blocking Configuration';
$string['allowedipsdescription'] = 'Box to enter safe IP addresses for the heartbeat to respond to.';
$string['allowedipsempty'] = 'When the allowed IPs list is empty we will not block anyone. You can add your own IP address (<i>{$a->ip}</i>) and block all other IPs.';
$string['allowedipshasmyip'] = 'Your IP (<i>{$a->ip}</i>) is in the list and you will not be blocked from checking the heartbeat.';
$string['allowedipshasntmyip'] = 'Your IP (<i>{$a->ip}</i>) is not in the list and you will be blocked from checking the heartbeat.';
$string['allowedipsnoconfig'] = 'Your config.php does not have the extra setup to allow blocking via IP.<br />Please refer to our <a href="https://github.com/catalyst/moodle-auth_outage#installation" target="_blank">README.md</a> file for more information.';

/*
 * Privacy provider (GDPR)
 */
$string["privacy:no_data_reason"] = "The Heartbeat plugin does not store any personal data.";
