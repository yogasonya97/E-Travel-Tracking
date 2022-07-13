<?php

/* $current_path = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
  $current_host = pathinfo($_SERVER['REMOTE_ADDR'], PATHINFO_BASENAME);
  $the_depth = substr_count( $current_path , '/');
  //Set path to root for includes to access from anywhere
  if($current_host == '192.168.1.2')
  $pathtoroot =$_SERVER['DOCUMENT_ROOT'];
  else
  $pathtoroot ='http://localhost/e-travel/'; */

// define('URL', 'http://localhost/e-travel/');
// define('URL', 'http://192.168.1.6/e-travel/');
// define('URL', 'http://192.168.43.129/e-travel/');
$config['URL'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['URL'] .= "://".$_SERVER['HTTP_HOST'];
$config['URL'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
define('URL',$config['URL']);

define('LIBS', 'libs/');
?>