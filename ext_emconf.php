<?php

########################################################################
# Extension Manager/Repository config file for ext "oneclicklogin".
#
# Auto generated 19-12-2009 14:05
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => '1-Click-Login',
	'description' => 'For enabled users a 1-Click-Login link is shown at the Backend login screen to log in via OpenID. WARNING: The usernames and OpenID-Identifiers of the enabled users are shown at the login page and are visible for anyone. This should not be a security problem, but If you don\'t want that, don\'t use this extension!',
	'category' => 'be',
	'author' => 'Sebastian Gebhard',
	'author_email' => 'sebastian.gebhard@gmail.com',
	'shy' => '',
	'dependencies' => 'openid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'sgtypo3.de',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'openid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"f3a7";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"b8b5";s:19:"doc/wizard_form.dat";s:4:"9be9";s:20:"doc/wizard_form.html";s:4:"a16f";}',
	'suggests' => array(
	),
);

?>