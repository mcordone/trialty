<?php
echo "**** CONFIG FROM CONEXTION DIR";
/*$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbuser = $_SERVER['RDS_USERNAME'];
$dbpass = $_SERVER['RDS_PASSWORD'];
$dbbase = $_SERVER['RDS_DB_NAME'];
$dbport = $_SERVER['RDS_PORT']*/

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbbase = "baynaodo_trialty";


//db settings
$db_username = $dbuser;
$db_password = $dbpass;
$db_name = $dbbase;
$db_host = $dbhost;
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

?>
