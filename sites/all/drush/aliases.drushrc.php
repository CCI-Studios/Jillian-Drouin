<?php

$aliases['dev'] = array(
	'uri'=> 'jillian.ccistaging.com',
	'root' => '/home/staging/subdomains/jilliandrouin/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),

	'ssh-options'=>'-p 37241'
);


$aliases['live'] = array(
	'uri'=> 'jilliandrouin.com',
	'root' => '/home/jilliandrouin/subdomains/live/public_html',
	'remote-host'=> 'host.cciserver2.com',
	'remote-user'=> 'jilliandrouin',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	)
);