<?php


$globals['extra_js'] = Array();
$gloabls['extra_css'] = Array();
$gloabls['post_js'] = Array();

$global['start_time'] = microtime(true);

function do_header($title, $id='home'){
	global $current_user, $dblang, $globals;
	
	check_auth_page();
	header('Content-Type: text/html; charset=utf-8');
	http_cache();

	
	$globals['security_key'] = get_security_key();
	setcookie('k',$globals['security_key'], 0, $globals['base_url']);

	if ($globals['greetings']) $greeting = array_rand($globals['greetings'], 1);
	else $greeting = _('hola');

	//guarda el $globals['uri] que se usa para ver a que página redireccionar despues de logout
    if (!empty($_REQUEST['q'])) $globals['q'] = $_REQUEST['q'];
	$globals['uri'] = $_SERVER['REQUEST_URI'];

		
	/*if ($current_user->user_id > 0) {
		$current_user->posts_answers = Post::get_unread_conversations($current_user->user_id);
		$current_user->comments_answers = Comment::get_unread_conversations($current_user->user_id);
		$current_user->new_friends = count(User::get_new_friends($current_user->user_id));
	}
*/

	$vars = compact('title', 'greeting', 'id');

	return Haanga::Load('header.html', $vars);
}


function do_footer($credits = true) {
	return Haanga::Load('footer.html');
}

?>