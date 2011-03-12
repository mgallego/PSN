<?php

include('config.php');
include(includedir.'html1.php');



$page_size = 20;/*
$page = get_current_page();
$offset=($page-1)*$page_size;*/
$globals['ads'] = true;

do_header("PSN");

do_context();

do_footer();

	function do_context(){
		global $globals, $current_user;
		
		//frames variables
		$f_height = '850px';
		$f_witdh = '850px';
		
		
		if ($current_user->authenticated){
						
			/*echo 'obteniendo del tamaño de una imagen'."\n";
			
			//print_r(getimagesize('eli.png'));
			
			$filename = 'eli.png';
			$percent = 0.5;
			
			//echo phpinfo();
			
			//echo gd_version();
			
			list($width, $height) = getimagesize($filename);
			
			
			//$image_p = 'imagen_resample.png';
			$new_width = $width * $percent;
			$new_height = $height * $percent;
			
			$image_p = imagecreatetruecolor($new_width, $new_height);
			
			$image_p = imagecreatetruecolor($new_width, $new_height);
			$image = imagecreatefrompng($filename);
			//imagecopyresampled('imagen_resample.png', $image, 0, 0, 0, 0, '60', '53', '80', '73');
			imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
			
			imagejpeg($image_p, 'nombre.jpg', 100);
			
			echo '<img src="nombre.jpg"/>';
			*/
			
			$obImagen = new Imagen();
			
		    $obImagen->get_random_image();
			
			$f_height = ($obImagen->size[1] + 2).'px';  
		    
			$f_witdh = ($obImagen->size[0] + 2).'px';
			
			
			
			//echo $f_height.'  '.$f_witdh;
			echo '<div id="image_frame"  style="float:left;height: '.$f_height.';width: '.$f_witdh.'">';
				
			
			//show random image 
			
			
			
			//echo '<div class="code">';
            
          	//echo '</div>';
			echo '<img src="'.$globals['user_image_path'].$obImagen->url_imagen.'"/>';
			
			echo '<a href="'.$globals['user_image_path'].$obImagen->url_imagen.'" rel="facebox">texto</a>';
	/*		echo '<a href="#info" rel="facebox">textzzzz</a>';
			
			
			 echo '<div id="info" style="display:none;">';
			 echo '<p> Hey, Im the info div! </p>';
			 echo '  <p> I look like this: </p>';
			 echo   '<code>';
			 echo   '   &lt;div id="info" style="display:none;"&gt; <br/>';
			 echo  '       &nbsp;&nbsp;text<br/>';
			 echo '     &lt;/div&gt;';
			 echo '   </code>';
			 echo ' </div>';
			
			echo '</div>';
*/
			
		}
		else{
			
		
		echo '<div>';
		
		echo '<div class="faq" style="float:left; width:55%; margin-top: 10px;margin: 10px;margin-bottom: 50px">'."\n";
		// Only prints if the user was redirected from submit.php
		if (!empty($_REQUEST['return']) && preg_match('/submit\.php/', $_REQUEST['return'])) { 
			echo '<p style="border:1px solid #FF9400; font-size:1.3em; background:#FEFBEA; font-weight:bold; padding:0.5em 1em;">Para enviar una historia debes ser un usuario registrado</p>'."\n";
		}
		echo '<h3>'._('¿Qué es PSN?').'</h3>'."\n";
		echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a est ut leo rutrum rutrum. Mauris lectus eros, adipiscing a ultrices vel, tempor sit amet elit. Maecenas accumsan pellentesque orci, a cursus sem pellentesque iaculis. Sed sit amet nunc sed nisi rutrum aliquet. Aliquam convallis tellus mattis urna vulputate pulvinar. Nunc venenatis dictum est, a egestas urna consequat id. Phasellus lobortis mi sed dolor convallis tincidunt. Duis faucibus ante tristique erat fermentum accumsan. Donec facilisis condimentum facilisis. Quisque urna ligula, placerat quis tincidunt eu, laoreet vel neque. Aenean tristique dignissim ante, at interdum nisi cursus et. Morbi interdum euismod consectetur. Vivamus a erat a dui placerat fermentum quis vitae lorem. Etiam sit amet nulla leo. In viverra ligula nec erat tempus sodales. Suspendisse interdum laoreet facilisis. Nullam est ipsum, gravida vitae sollicitudin nec, aliquam in magna.

Vivamus eget tortor nisi. Vestibulum nec quam tortor, in pellentesque neque. Morbi pharetra massa non neque ullamcorper elementum luctus urna egestas. In sit amet ipsum odio, sit amet varius diam. Aliquam sit amet ante urna. Suspendisse potenti. Sed aliquet sem ut nibh scelerisque in aliquet purus rhoncus. Fusce sit amet est augue. Duis convallis, turpis eget ornare gravida, ante risus facilisis risus, eget scelerisque sapien nulla ut metus. Morbi posuere congue nulla in vulputate. Praesent nibh lacus, malesuada sit amet porttitor id, posuere vel dui. Cras elementum lorem nec diam condimentum id porttitor ligula tincidunt. Fusce nulla massa, commodo eu faucibus non, feugiat vestibulum magna. Duis odio urna, laoreet sit amet scelerisque in, tincidunt aliquet lacus. Ut in est mauris. Duis eu nulla eget purus fringilla vestibulum. Vestibulum ac elit lectus, a convallis lorem.

Quisque sed sapien magna. Phasellus aliquet imperdiet ultricies. Quisque egestas porttitor vestibulum. Nulla bibendum, eros nec vestibulum egestas, magna orci iaculis odio, ac pellentesque sem urna sed metus. Pellentesque non nisl a purus lobortis dictum sed at ante. Etiam porttitor consequat ante, quis mattis erat lacinia at. Integer quis dolor in eros consectetur rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eu elit felis, a tempor purus. Quisque cursus dui ac mi faucibus in varius enim volutpat. Praesent dui arcu, sagittis semper viverra sed, auctor quis nisl. Pellentesque vulputate elementum sem sit amet lobortis. Sed vehicula justo nec felis malesuada cursus eget id dolor. Cras a pharetra nulla. In nec turpis et lectus commodo aliquam vel at leo. Proin eu congue sapien. Integer consectetur velit ac turpis malesuada molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc et suscipit nisi. Aliquam a fermentum nisl.';
		echo '</div>'."\n";
		
		echo '<div class="genericform" style="float:right; width:40%; margin: 0;">'."\n";	
	
			echo '<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/Bf_uVyjKUiM" frameborder="0" allowfullscreen></iframe>';
			
		echo '</div>'."\n";
		
		}
	}



?>