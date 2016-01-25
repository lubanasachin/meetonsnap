<?php
	$APPCONFIG = array(

		'SNAPURL'	=>	'http://meetonsnap.com/',

		//xmpp server details
		'XMPP' => array(
			'server'        	=> '',
			'port'          	=> '5222',
			'adminuser'      	=> '',
			'adminpasswd'       	=> '',
			'resource'      	=> '',
			'domain'        	=> 'meetonsnap.com',
			'userpasswd'		=> ''
		),

		//mysql snaprtc database connection details
		'snapdb' => array(
			'dbserver'		=> '',
			'dbusername'		=> '',
			'dbpassword'		=> '',
			'dbname'		=> ''
		),

		//mysql xmpp-tigase database connection details
		'tigasedb' => array(
			'dbserver'		=> '',
			'dbusername'		=> '',
			'dbpassword'		=> '',
			'dbname'		=> ''
		),		

		//STUN-TURN server details
		'TWILLIO' => array(
			'sid' 				=> "",
			'token'				=> ""
		),

		//template directory
		'templateDir'			=> '../views/templates/',

		//profile image directory
		'profileimagepath'		=> '../profileimages/',

		//email details
		'EMAIL'	=> array(

			'ADMINEMAILADDRESS'		=> '',

			'CCEMAILADDRESS'		=> '',

			
			'resetpassword'		=> array(
										'template' => '../views/templates/resetpassword.html',
										'subject' => 'MOS:: Reset your password',
									),

			'emailverify'		=> array(
										'template' => '../views/templates/emailverify.html',
										'subject' => 'MOS:: Verify your email address',
									),

			'feedbackform'		=> array(
										'template' => '../views/templates/feedbackform.html',
										'subject' => 'MOS:: Feedback received',
									),

			//'apikey'			=> '68e86d9d12144224f354017e896bdf2b',
			//'apikey'			=> '78b33cd401e6116c028bac7720aef53d',
			//'apikey'			=> 'dc9f57dcfcf37fa4a24c7095d948e8e9',
			'apikey'			=> '',
			'apiurl'			=> 'https://api.falconide.com/falconapi/web.send.rest',
			'emailfrom'			=> 'snapfriends@meetonsnap.com',
			'fromname'			=> 'MeetOnSnap',
		),

		'ERROR'	=> array(
			'555'				=> 'logout_555',
			'101'				=> 'Cannot process your request at this moment',
			'102'				=> 'Oops, something went wrong. Please retry after sometime',
			'103'				=> 'Hey, you made an invalid request',
			'104'				=> 'Oops, cannot load previous chat messages',			
			'105'				=> 'Hey, you entered an invalid email address',
			'106'				=> 'Hey, this email address is already registered',
			'107'				=> 'Hey, you entered invalid email address or password',
			'108'				=> 'Hey, entered email address is not yet registered',
			'109'				=> 'Hey, you have already sent invitation to this email address',
			'110'				=> 'Hey, failed to load iceServers',
			'111'				=> 'Old password is incorrect. Cannot proceed',
			'112'				=> 'Update password failed. Cannot proceed',
			'113'				=> 'Update nickname failed. Cannot proceed',
			'114'				=> 'Update profile image failed. Cannot proceed',
			'115'				=> 'File size exceeded the allowed limit of 100KB. Cannot proceed',
			'116'				=> 'File type is invalid. Cannot proceed',
			'117'				=> 'Hey, this email address is not registered',
			
		)
	);
?>
