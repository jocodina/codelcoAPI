<?php
ini_set("display_errors", 1);

if ( !defined('ABSPATH') ) { define('ABSPATH', dirname(__FILE__) . '/'); }
if ( !defined('THEME') ) { define('THEME', ABSPATH . "templates/default/"); }
if ( !defined('THEMEPATH') ) { define('THEMEPATH', ( $_SERVER['HTTPS'] ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .  "/templates/default/"); }

include( ABSPATH . 'model/class.init.php');
$rutas = $base->mvc();

if(file_exists(THEME .'functions.php') ){ require_once( THEME .'functions.php' ); }
if( file_exists( ABSPATH . 'controllers/control-'. $rutas[0] .'.php' ) ){
    require_once (ABSPATH . 'controllers/control-'. $rutas[0] .'.php');
    $ctrl = new ctrl();
    
    if( count( $rutas ) === 1 ){
        $ctrl->{$rutas[0]}();
        if( file_exists(THEME . $rutas[0] .'.php') ){ require_once( THEME . $rutas[0] .'.php' ); }
        else { include(THEME . '404.php'); }
    }
    elseif( count( $rutas ) > 1 ){
        $rutaString = $rutas[0] . '_' . $rutas[1];
        $ctrl->{$rutaString}();
        if( file_exists(THEME . $rutaString .'.php') ){ require_once( THEME . $rutaString .'.php' ); }
        else { include(THEME . '404.php'); }
    }
}else {
    include(THEME . '404.php');
}
?>