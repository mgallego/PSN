<?php

	include includedir.'utils.php';

	global $globals;
	
	
	mb_internal_encoding('UTF-8');
	global $globals;
		
	// Use proxy and load balancer detection
	if ($globals['check_behind_proxy']) {
		$globals['user_ip'] = check_ip_behind_proxy();
	}
	else {
		$globals['user_ip'] = $_SERVER["REMOTE_ADDR"];
	}
		
	
	$globals['user_ip_int'] = sprintf("%u", ip2long($globals['user_ip']));

	$globals['now'] = time();
	$globals['cache-control'] = Array();

	
	function __autoload($class) {
		static $classfiles = array(
					'db' => 'mysqli.php',
					'RGDB' => 'rgdb.php',
					'UserAuth' => 'login.php',
					'User' => 'user.php',
					'Imagen' => 'images.php');
	
		if (isset($classfiles[$class]) && file_exists(includedir.$classfiles[$class])) {
			require_once(includedir.$classfiles[$class]);
		} 
	}
	
	function haanga_bootstrap()
	{
	/* bootstrap function, load our custom tags/filter */
	require includedir.'haanga_psn.php';
	}

	/* Load template engine here */
	$config = array(
		'template_dir' => psnpath.'/'.$globals['haanga_templates'],
		'autoload'	 => TRUE, /* Don't use Haanga's autoloader */  //CAMBIADO A MANO 0
		'bootstrap'	=> 'haanga_bootstrap',
		'compiler' => array( /* opts for the tpl compiler */
			/* Avoid use if empty($var) */
			'if_empty' => FALSE,
			/* we're smart enought to know when escape :-) */
			'autoescape' => FALSE,
			/* let's save bandwidth */
			'strip_whitespace' => TRUE,
			/* call php functions from the template */
			'allow_exec'  => TRUE,
			/* global $global, $current_user for all templates */
			'global' => array('globals', 'current_user'),
		),
		'use_hash_filename' => FALSE, /* don't use hash filename for generated php */
	);
	
	// Allow full or relative pathname for the cache (i.e. /var/tmp or cache)
	if ($globals['haanga_cache'][0] == '/') {
		$config['cache_dir'] =  $globals['haanga_cache'] .'/Haanga/'.$_SERVER['SERVER_NAME'];
	} else {
		$config['cache_dir'] = psnpath.'/'.$globals['haanga_cache'] .'/Haanga/'.$_SERVER['SERVER_NAME'];
	}

	//cnfiguración de Haanga
	require includedir.'Haanga.php';
	Haanga::configure($config);


// Allows a script to define to use the alternate server


	$db = new RGDB($globals['db_user'], $globals['db_password'], $globals['db_name'], $globals['db_server']);
	$db->persistent = $globals['mysql_persistent'];
	
?>

