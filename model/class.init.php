<?php
require_once(ABSPATH."model/config.php");

if ( $debug==true ){ require_once(ABSPATH."model/debug.php"); }

//require_once (ABSPATH."model/class-pqdb.php");
//$encbd = new pqdb(DB_USER, DB_PASSWORD, DB_NAME_1, DB_HOST); //conexion a encuestas
//$vodbd = new pqdb(DB_USER, DB_PASSWORD, DB_NAME_2, DB_HOST); //conexion a vod
//$desbd = new pqdb(DB_USER, DB_PASSWORD, DB_NAME_3, DB_HOST); //conexion destacados noticias deportes concursos

require_once (ABSPATH."model/class-base.php");
$base = new base();
?>