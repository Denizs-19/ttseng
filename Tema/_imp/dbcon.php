<?php
$g1servername = "localhost";
$g1username = "kralcift_ms";
$g1password = "Warpowercs11";
$g1db_name = "kralcift_sm";

$link = @mysql_connect("$g1servername", "$g1username", "$g1password") or die(mysql_error());
$db = @mysql_select_db("$g1db_name", $link) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci' ");
?>