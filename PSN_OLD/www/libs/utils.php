<?
// The source code packaged with this file is Free Software, Copyright (C) 2005-2010 by
// Ricardo Galli <gallir at uib dot es>.
// It's licensed under the AFFERO GENERAL PUBLIC LICENSE unless stated otherwise.
// You can get copies of the licenses here:
//		http://www.affero.org/oagpl.html
// AFFERO GENERAL PUBLIC LICENSE is also included in the file called "COPYING".


function clean_input_string($string) {
	return preg_replace('/[ <>\'\"\r\n\t\(\)]/', '', stripslashes($string));
}

/*
function get_current_page() {
	if(($var=check_integer('page'))) {
		return $var;
	} else {
		return 1;
	}
	// return $_GET['page']>0 ? $_GET['page'] : 1;
}

function check_integer($which) {
	if (is_numeric($_REQUEST[$which])) {
		return intval($_REQUEST[$which]);
	} else {
		return false;
	}
}

*/

function get_server_name() {
	global $globals;
	return $globals['server_name'];
}

function get_auth_link() {
	global $globals;
	if ($globals['ssl_server']) return 'https://'.get_server_name().$globals['base_url'];
	else return $globals['base_url'];
}


function check_auth_page() {
	global $globals;

	if ($_SERVER["SERVER_PORT"] == 443 ){//|| $_SERVER['HTTPS'] == 'on') {
		// If it's not a page that need SSL, redirect to the standard server
		if (!$globals['secure_page']) {
			header('HTTP/1.1 302 Moved');
			header('Location: http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
			die;
		}
	} elseif ($globals['ssl_server'] && $globals['secure_page']) {
		header('HTTP/1.1 302 Moved');
		header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
		die;
	}
}


function get_user_uri($user, $view='') {
	global $globals;

	if (!empty($globals['base_user_url'])) {
		$uri= $globals['base_url'] . $globals['base_user_url'] . htmlspecialchars($user);
		if (!empty($view)) $uri .= "/$view";
	} else {
		$uri = $globals['base_url'].'user.php?login='.htmlspecialchars($user);
		if (!empty($view)) $uri .= "&amp;view=$view";
	}
	return $uri;
}

function get_user_uri_by_uid($user, $view='') {
	global $globals;

	$uid = guess_user_id($user);
	if ($uid == 0) $uid = -1; // User does not exist, ensure it will give error later
	$uri = get_user_uri($user, $view);
	if (!empty($globals['base_user_url'])) {
		$uri .= "/$uid";
	} else {
		$uri .= "&amp;uid=$uid";
	}
	return $uri;
}

//devuelve el avatar del usuario
function get_avatar_url($user, $avatar, $size) {
	global $globals, $db;

	// If it does not get avatar status, check the database
	if ($user > 0 && $avatar < 0) {
		$avatar = (int) $db->get_var("select user_avatar from users where user_id = $user");
	}

	if ($avatar > 0) {
		if ($globals['Amazon_S3_media_url'] && !$globals['Amazon_S3_local_cache']) {
			return $globals['Amazon_S3_media_url']."/avatars/$user-$avatar-$size.jpg";
		} elseif ($globals['cache_dir']) {
			$file = Upload::get_cache_relative_dir($user) ."/$user-$avatar-$size.jpg";
			// Don't check every time, but 1/10, decrease VM pressure
			// Disabled for the moment, it fails just too much for size 40
			//if (rand(0, 10) < 10) return $globals['base_url'] . $file;
			$file_path = mnmpath.'/'.$file;
			if ($globals['avatars_check_always']) {
				if (is_readable($file_path)) {
					return $globals['base_static'] . $file;
				} else {
					return $globals['base_url'] . "backend/get_avatar.php?id=$user&amp;size=$size&amp;time=$avatar";
				}
			} else {
				return $globals['base_static'] . $file;
			}
		}
	}
	return get_no_avatar_url($size);
}


function http_cache() {
	// Send cache control
	global $globals, $current_user;

	if ($current_user->user_id) $globals['cache-control'][] = 's-maxage=0, private, community="'.$current_user->user_login.'"';

	if ($globals['cache-control']) header('Cache-Control: ' . implode(', ', $globals['cache-control']));
	else header('Cache-Control: s-maxage=30');
}

// Simple unified key generator for use in GET requests
function get_security_key($time = false) {
	global $globals, $current_user, $site_key;
	if (!$time) $time = $globals['now'];

	if ($current_user->user_id > 0) {
		// For users of balanced connections and 3G we avoid using the IP
		return $time.'-'.sha1($time.$current_user->user_id.$current_user->user_date.$site_key);
	} else {
		// We shift 8 bits to avoid key errors with mobiles/3G that change IP frequently
		$ip_key = $globals['user_ip_int']>>8;
		return $time.'-'.sha1($time.$ip_key.$site_key);
	}

}

function check_ip_behind_proxy() {
	static $last_seen = '';

	if(!empty($last_seen) ) return $last_seen;

	if ($_SERVER["HTTP_X_FORWARDED_FOR"]) {
		$user_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} else if ($_SERVER["HTTP_CLIENT_IP"]) {
		$user_ip = $_SERVER["HTTP_CLIENT_IP"];
	} else {
		$last_seen = $_SERVER["REMOTE_ADDR"];
		return $last_seen;
	}

	$ips = preg_split('/[, ]/', $user_ip, -1, PREG_SPLIT_NO_EMPTY);
	foreach ($ips as $last_seen) {
		if (preg_match('/^[1-9]\d{0,2}\.(\d{1,3}\.){2}[1-9]\d{0,2}$/s', $last_seen)
			&& !isPrivateIP($last_seen) ) {
			return $last_seen;
		}
	}

	$last_seen = $_SERVER["REMOTE_ADDR"];
	return $last_seen;
}

function get_form_auth_ip() {
	global $globals, $site_key;
	if (check_form_auth_ip()) { // We reuse the values
		$ip = $_REQUEST['userip'];
		$control = $_REQUEST['useripcontrol'];
	} else {
		$ip = $globals['user_ip'];
		$control = sha1($ip.$site_key.includedir); // includedir to add entropy
	}
	echo '<input type="hidden" name="userip" value="'.$ip.'"/>';
	echo '<input type="hidden" name="useripcontrol" value="'.$control.'"/>';
}

function check_form_auth_ip() {
	global $globals, $site_key;
	if ($_REQUEST['userip'] && $_REQUEST['useripcontrol'] && sha1($_REQUEST['userip'].$site_key.includedir) == $_REQUEST['useripcontrol']) {
		$globals['form_user_ip'] = $_REQUEST['userip'];
		$globals['form_user_ip_int'] = sprintf("%u", ip2long($globals['form_user_ip']));
		return true;
	} else {
		$globals['form_user_ip'] = $globals['user_ip'];
		$globals['form_user_ip_int'] = $globals['user_ip_int'];
		return false;
	}
}





/*
function check_auth_page() {
	global $globals;

	if ($_SERVER["SERVER_PORT"] == 443 || $_SERVER['HTTPS'] == 'on') {
		// If it's not a page that need SSL, redirect to the standard server
		if (!$globals['secure_page']) {
			header('HTTP/1.1 302 Moved');
			header('Location: http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
			die;
		}
	} elseif ($globals['ssl_server'] && $globals['secure_page']) {
		header('HTTP/1.1 302 Moved');
		header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
		die;
	}
}*/

?>
