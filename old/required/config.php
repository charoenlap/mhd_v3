<?php

  	define('DEBUG_MODE',false);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	date_default_timezone_set('Asia/Bangkok');
 
	$base = str_replace('required', '', __DIR__);
  	define('MURL','http://www.fsoftpro.com/production/mhd/');
	// define('MURL','https://www.fsoftpro.com/dohung/');
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/production/mhd/');
	define('ROW_IN_DOC','10');
	define('BYTE_PER_KB','1000');
	 
	define('app_id','');
	define('app_secret','');
	define('default_graph_version','v2.10');

	define('GOOGLE_CLIENT_ID', '');
	define('GOOGLE_CLIENT_SECRET', '');
	define('GOOGLE_REDIRECT_URL', MURL.'index.php?route=user/gmailCallback');

	define('DEFAULT_PAGE','home');
	define('WEB_NAME','');
	define('IMAGE',MURL.'uploads/');
	define('IMAGE_PHOTO',MURL.'uploads/photo/'); 
	define('NO_PHOTO',MURL.'uploads/no_photo.jpg');
	define('DB','mysqli');
	define('KEY', 'xD3exWSe9xwdnNmP');
	
	// Config DB localhost
	define('PREFIX', 'mhd_');
	define('DB_HOST','localhost');
	define('DB_USER','fsoftpro_mhd');
	define('DB_PASS','Cgjtj88FX');
	define('DB_DB','fsoftpro_mhd');
	define('DATE_FORMAT','Y-m-d');

	// System config 
	define('DEFAULT_LANGUAGE','1');
	define('DEFAULT_LIMIT_PAGE','10');

	// Email Config
	require_once 'PHPMailer-master/src/PHPMailer.php';
	require_once 'PHPMailer-master/src/SMTP.php';
	require_once 'PHPMailer-master/src/Exception.php';
	// Enable SMTP debugging
	//  1 SMTP::DEBUG_OFF = off (for production use)
	//  2 SMTP::DEBUG_CLIENT = client messages
	//  3 SMTP::DEBUG_SERVER = client and server messages
	define('EMAIL_DEBUG', 1);
	define('EMAIL_USERNAME','support@fsoftpro.com'); // for login authen
	define('EMAIL_PASSWORD','fiverama2'); // for login authen
	define('EMAIL_FROM','support@fsoftpro.com'); // Sender
	define('EMAIL_HOST','smtp.gmail.com');
	define('EMAIL_POST', 465); // 25, 465, 587
	define('EMAIL_PROTOCOL','ssl'); // ssl, tls


	
?>