<?php

include('config.php');

$hostname_tienda = $dbhost;
$database_tienda = $dbbase;
$username_tienda = $dbuser;
$password_tienda = $dbpass;


$tienda = mysql_pconnect($hostname_tienda, $username_tienda, $password_tienda) or trigger_error(mysql_error(),E_USER_ERROR); 

 mysql_set_charset('utf8');
?>