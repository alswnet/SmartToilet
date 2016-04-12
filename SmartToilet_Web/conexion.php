<?php
//Cambia por los usuarios de tu MySQL
$LocalHost =  "";
$Usar = "";
$Server = "";
$DB = "";

$Con = mysql_connect($LocalHost,$Usar,$Server);
mysql_select_db($DB,$Con);

?>
