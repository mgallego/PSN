<?php

   include('config.php');
   include(includedir.'log.php');
   include(includedir.'ts.php');
   include(includedir.'html1.php');
   
 
   //supongo que esto será para activar o no la publicidad en la pantalla de login
   //$globals['ads'] = true; 
   
   if(!empty($_REQUEST['return']))
	$_REQUEST['return'] = clean_input_string($_REQUEST['return']);
   
   if($_GET["op"] == 'logout') {
	// check the user is really authenticated (to avoid bucles due to bad caching)
	if ($current_user->user_id > 0) {
		$current_user->Logout($_REQUEST['return']);
	} else {
		header("Location: http://".get_server_name().$globals['base_url']);
		die;
	}
}
	
	
   //Creo que se usa por que se modifica el header o por temas de las cookies
   ob_start();
   
   if ($_POST["processlogin"] == 1) {
	$globals['secure_page'] = True;
	}
   

	do_header("login");

	echo '<div id="singlewrap" style="float:right; width:55%;">' . "\n";
	echo '<div class="genericform">'."\n";

   	if($_GET["op"] === 'recover' || !empty($_POST['recover'])) {
		do_recover();
	} else {
		do_login();
	}
	
   	echo '</div>'."\n";
	echo '</div>'."\n"; // singlewrap

   do_footer();
	
   //hacemos login en la web
   function do_login(){
      global $current_user, $globals;

      
      $form_ip_check = check_form_auth_ip();
      //Busca la última vez que intentó hacer login ese usuario
      $previous_login_failed =  log_get_date('login_failed', $globals['form_user_ip_int'], 0, 300);
      
      
      
      echo '<form action="'.get_auth_link().'login.php" id="thisform" method="post">'."\n";
      
   
   if($_POST["processlogin"] == 1) {
		// Check the IP, otherwise redirect
		if (!$form_ip_check) {
			header("Location: http://".get_server_name().$globals['base_url']."login.php");
			die;
		}

		$username = clean_input_string(trim($_POST['username']));
		$password = trim($_POST['password']);
		
		// Check form
		if (($previous_login_failed > 2 || ($globals['captcha_first_login'] == true && ! UserAuth::user_cookie_data()) ) 
				&& !ts_is_human() 
				) {
			log_insert('login_failed', $globals['form_user_ip_int'], 0);
			recover_error(_('el código de seguridad no es correcto'));
		} elseif ($current_user->Authenticate($username, md5($password), $_POST['persistent']) == false) {
			log_insert('login_failed', $globals['form_user_ip_int'], 0);
			recover_error(_('usuario o email inexistente, sin validar, o clave incorrecta'));
			$previous_login_failed++;
		} else {
			UserAuth::check_clon_from_cookies();

			// If the user is authenticating from a mobile device, keep her in the standar version
			if ($globals['mobile']) {
				setcookie('nomobile', '1', 0, $globals['base_url']);
			}

			if(!empty($_REQUEST['return'])) {
				header('Location: http://'.get_server_name().$_REQUEST['return']);
 			} else {
				header('Location: http://'.get_server_name().$globals['base_url']);
			}
			die;
		}
	}

    echo '<fieldset>'."\n";
	echo '<legend><span class="sign">login</span></legend>'."\n";
	echo '<p><label for="name">'._('usuario o email').':</label><br />'."\n";
	echo '<input type="text" name="username" size="25" tabindex="1" id="name" value="'.htmlentities($username).'" /></p>'."\n";
	echo '<p><label for="password">'._('clave').':</label><br />'."\n";
	echo '<input type="password" name="password" id="password" size="25" tabindex="2"/></p>'."\n";
	echo '<p><label for="remember">'._('recuérdame').': </label><input type="checkbox" name="persistent" id="remember" tabindex="3"/></p>'."\n";

	// Print captcha
	if ($previous_login_failed > 2 || ($globals['captcha_first_login'] == true && ! UserAuth::user_cookie_data()) ) {
		ts_print_form();
	}

	get_form_auth_ip();

	echo '<p><input type="submit" value="login" class="button" tabindex="4" />'."\n";

	echo '<div align="center">';
	//print_oauth_icons($_REQUEST['return']);
	echo '</div>'."\n";

	echo '<input type="hidden" name="processlogin" value="1"/></p>'."\n";
	echo '<input type="hidden" name="return" value="'.htmlspecialchars($_REQUEST['return']).'"/>'."\n";
	echo '</fieldset>'. "\n";
	echo '</form>'."\n";
	
	echo '<div class="recoverpass" align="center"><h4><a href="login.php?op=recover">'._('¿has olvidado la contraseña?').'</a></h4></div>'."\n";
	echo '</div>'."\n";
	echo '<br clear="all"/>&nbsp;';
      
    }
    
    
	function do_recover() {
		global $site_key, $globals;
	
		echo '<div class="genericform">'."\n";
		echo '<fieldset>'."\n";
		echo '<legend><span class="sign">'._("recuperación de contraseñas").'</span></legend>'."\n";
	
		if(!empty($_POST['recover'])) {
			if (!ts_is_human()) {
				recover_error(_('el código de seguridad no es correcto'));
			} else {
				$error = false;
				$user=new User();
				if (preg_match('/.+@.+\..+$/', $_POST['email'])) {
					// It's an email address
					$user->email=$_POST['email'];
				} else {
					recover_error(_('el email no es válido'));
					$error = true;
				}
	
				if(!$error && !$user->read()) {
					recover_error(_('el email no está relacionado con ninguna cuenta'));
					$error = true;
				}
				if(!$error && $user->disabled()) {
					recover_error(_('cuenta deshabilitada'));
					$error = true;
				}
				if (!$error) {
					require_once(mnminclude.'mail.php');
					$sent = send_recover_mail($user);
				}
			}
		}
		if (!$sent) {
			echo '<form action="login.php" id="thisform-recover" method="post">'."\n";
			echo '<label for="name" style="font-size:120%">'._('indica el email de la cuenta').':</label><br />'."\n";
			echo '<input type="text" name="email" size="25" tabindex="1" id="name" value="'.htmlspecialchars($_POST['email']).'" />'."\n";
			echo '<p>'._('(recibirás un e-mail que te permitirá editar tus datos)').'</p>&nbsp;<br/>';
			echo '<input type="hidden" name="recover" value="1"/>'."\n";
			echo '<input type="hidden" name="return" value="'.htmlspecialchars($_REQUEST['return']).'"/>'."\n";
			ts_print_form();
			echo '<br /><input type="submit" value="'._('recibir e-mail').'" class="button" />'."\n";
			echo '</form>'."\n";
		}
		echo '</fieldset>'."\n";
		echo '</div>'."\n";
	}
	
	function recover_error($message) {
		echo '<div class="form-error">';
		echo "$message";
		echo "</div>\n";
	}
   
?>