<?php

	class Imagen{
		
		
		function __construnct(){
			
			$this->url_imagen = 0;
			$this->width = 0;
			$this->height = 0;
		}
		
		function get_random_image(){
			global $db, $globals;
			
			$this->url_imagen = $db->get_var('select image_url from images order by rand() limit 1');
			
			$this->size = getimagesize($globals['user_image_path'].$this->url_imagen);
			
		}

		
	}


?>