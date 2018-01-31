<?php
$host = "localhost";
$user = "smbacom_admin";
$pw   = "mNg%%^Jti0)K";
$db   = "smbacom_logistica";

$con = mysql_connect($host, $user, $pw) or die("No se puede conectar a la base de datos ");
mysql_select_db($db) or die("No se encontro la base de datos");
$resultado = mysql_query($query);


?>