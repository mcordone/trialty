<?php

include('config.php');

/*mysql_connect($dbhost, "root", "") or die(mysql_error()) ;
mysql_select_db("trialty") or die(mysql_error()) ;*/


function conectar()
{
	mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db($dbbase);
}

function desconectar()
{
	mysql_close();
}

?>
