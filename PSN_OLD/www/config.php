<?php

$globals['lang'] = $dblang = 'es';

//Database access

$globals['db_server'] = 'localhost';
$globals['db_name'] = 'prueba';
$globals['db_user'] = 'prueba';
$globals['db_password'] = 'password';
$globals['mysql_persistent'] = false;

$globals['server_name'] = $_SERVER['SERVER_NAME'];
$globals['base_url'] = '/';
$globals['base_static'] = '/';
$globals['check_behind_proxy'] = false;
$globals['ssl_server'] = False; //Secure server must have the same name and base
$globals['behind_load_balancer'] = false;
$site_key = 12345679;
$globals['secure_page'] = false;


$globals['noindex'] = false;

//User Images Path
$globals['user_image_path'] = './img/users/';

//tags para el meta
$globals['tags'] = 'fotografia';


$globals['greetings'] = array('bienvenid@'=>'españolo y española ;-)','hola'=>'español','kaixo'=>'euskera',
		'apa'=>'catalán','com va'=>'catalán','va bé?'=>'catalán','cómo andás'=>'argentino','epa'=>'catalán',
		'aupa'=>'español','ieup'=>'vasco','gñap'=>'gñapés','aiya'=>'quenya','hello'=>'inglés',
		'uep com anam'=>'catalán','hey'=>'inglés','hi'=>'inglés','hunga hunga'=>'troglodita',
		'salut'=>'francés','bonjour'=>'francés','hallo'=>'alemán','guten tag'=>'alemán','moin moin'=>'frisón',
		'Dobrý deň'=>'eslovaco','helo'=>'SMTP','minjhani'=>'tsonga','kunjhani'=>'tsonga','ciao'=>'italiano',
		'hej'=>'danés','god dag'=>'noruego','have a nice day'=>'inglés','as-salaam-aleykum'=>'árabe',
		'marhabah'=>'árabe','sabbah-el-khair'=>'árabe','salaam or do-rood'=>'árabe','namaste'=>'hindi',
		'ahn nyeong ha se yo'=>'coreano','ahn nyeong'=>'coreano','goedendag'=>'neerlandés','priviet'=>'ruso',
		'zdravstvuyte'=>'ruso','ni hao'=>'mandarín','nei ho'=>'cantonés','shalom'=>'hebreo','hei'=>'finés',
		'oi'=>'portugués','olá'=>'portugués','hej'=>'sueco','god dag'=>'sueco','mingalarbar'=>'birmano',
		'merhaba'=>'turco','ciao'=>'italiano','kumusta ka'=>'tagalo','saluton'=>'esperanto','vanakkam'=>'tamil',
		'jambo'=>'swahili','mbote'=>'lingala','namaskar'=>'malayalam','dzień dobry'=>'polaco','cześć'=>'polaco',
		'aloha'=>'hawaiano','jo napot'=>'húngaro','szervusz'=>'húngaro','dobriy ranok'=>'ucraniano',
		'labdien'=>'letón','sveiki'=>'letón','chau'=>'letón','hyvää päivää'=>'finés','moi'=>'finés',
		'hei'=>'finés','yia sou'=>'griego','yia sas'=>'griego','góðan dag'=>'islandés','hæ'=>'islandés',
		'ellohay'=>'pig latin','namaskkaram'=>'telugú','adaab'=>'urdu','baagunnara'=>'telugú','niltze'=>'náhuatl',
		'hao'=>'náhuatl','bok'=>'croata','ya\'at\'eeh'=>'navajo','merħba'=>'maltés','mambo'=>'congo',
		'salam aleikum'=>'senegalés','grüzi'=>'alemán suizo','haj'=>'escandinavo','hallå'=>'escandinavo',
		'moïen'=>'luxemburgués','talofa'=>'samoano','malo'=>'samoano','malo e lelei'=>'tongano',
		'ia ora na'=>'tahitiano','kia ora'=>'maorí','buna ziua'=>'rumano','kem che'=>'guyaratí',
		'namaskar'=>'canarés','kwe kwe'=>'tailandés','hola, ho,'=>'asturiano','oh'=>'nicolino',
		'vary'=>'nicolino','Привет'=>'ruso','konnichiwa'=>'japonés','hello world'=>'holamundo',
		'klaatu barada nikto'=>'el idioma de Klatu y Gort',
		'ola'=>'gallego','boas'=>'gallego', 'bonos díes'=>'asturiano', 'nuqneH'=>'klingon',
		'Mba\'eichapa' => 'guaraní', 'Mba\'eteko' => 'guaraní'
	);


$globals['js_main'] = 'general.js.php?v=12'; //?N is to force reloading for newer versions
// CSS files (main, color, notame)
$globals['css_main'] = 'css/es/mnm.css?v=18'; //?N is to force reloading for newer versions
//$globals['css_color'] = 'css/es/mnmcol17.css';
$globals['html_main'] = 'html1.php';

// Recaptcha settings
$globals['captcha_first_login'] = false;
// Put your keys en to enable recaptcha
$globals['recaptcha_public_key'] = '6LfZMMISAAAAAJ1ZRIRLJlu3grff900z65-ZGrME';
$globals['recaptcha_private_key'] = '6LfZMMISAAAAAJEz8nfVF4rwL8pib8isO3Bcg4YQ';


//RewriteRule ^/user/(.+)$ /user.php/$1  [L,NS]
$globals['base_user_url'] = 'user/';

// Haanga templates configuration
$globals['haanga_cache'] = '/var/tmp';
$globals['haanga_templates'] = 'templates';

//Facebox
$globals['facebox_css']  = 'libs/facebox/src/facebox.css';
$globals['facebox_js'] = 'libs/facebox/src/facebox.js';
$globals['facebox_jquery'] = 'libs/facebox/lib/jquery.js';

$globals['captcha_first_login'] = false;


define("psnpath", dirname(__FILE__));
define("includedir", dirname(__FILE__).'/libs/');






include includedir.'init.php';
include includedir.'login.php';

?>