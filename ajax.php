<?php
header('Content-Type: text/html; charset=utf-8');

if ( !defined('ABSPATH') ) { define('ABSPATH', dirname(__FILE__) . '/'); }
if ( !defined('THEME') ) { define('THEME', ABSPATH . "templates/default/"); }
if ( !defined('THEMEPATH') ) { define('THEMEPATH', ($_SERVER['HTTPS'] ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .  "/templates/default/"); }

include(ABSPATH . 'model/class.init.php');
require_once( ABSPATH . 'controllers/control-ajax.php');
//
$ajax = new Ajax();
?>