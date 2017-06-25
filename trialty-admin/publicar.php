<?php
include("controlsesion.php");

if(isset($_GET["id"]) && isset($_GET["publicado"]) && isset($_GET["seccion"])){

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');



$idactualizar = $_GET["id"];
$publicado = $_GET["publicado"];
if($publicado == '1')
{
$publicado1 = 'Publicado';
}
else
{
$publicado1 = 'Despublicado';
}
$nombre1 = $_GET["nombre"];

//PROMOCIONES
if($_GET["seccion"] == 'propiedades')
{
	$query2 = "UPDATE `propiedades` SET `publicado`='$publicado' where propiedades_id = '".$idactualizar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Propiedad $nombre1 $publicado1','$usuario_admin','$fecha')", $con);
		  

header ("Location: propiedades.php");
}
//PROMOCIONES

//TIENDAS
if($_GET["seccion"] == 'tiendas')
{
	$query2 = "UPDATE `tiendas` SET `publicado`='$publicado' where tiendas_id = '".$idactualizar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado $nombre1 $publicado1','$usuario_admin','$fecha')", $con);
		  

header ("Location: tiendas.php");
}
//TIENDAS

//SLIDESHOWG
if($_GET["seccion"] == 'slideshowg')
{
	$query2 = "UPDATE `slideshowg` SET `publicado`='$publicado' where slideshow_id = '".$idactualizar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio Grande $nombre1 $publicado1','$usuario_admin','$fecha')", $con);
		  

header ("Location: slideshowg.php");
}
//SLIDESHOWG

//SLIDESHOWP
if($_GET["seccion"] == 'slideshowp')
{
	$query2 = "UPDATE `slideshowp` SET `publicado`='$publicado' where slideshow_id = '".$idactualizar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio Promo $nombre1 $publicado1','$usuario_admin','$fecha')", $con);
		  

header ("Location: slideshowp.php");
}
//SLIDESHOWP

//SLIDESHOWP
if($_GET["seccion"] == 'productos')
{
	$query2 = "UPDATE `productos` SET `publicado`='$publicado' where productos_id = '".$idactualizar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Producto $nombre1 $publicado1','$usuario_admin','$fecha')", $con);
		  

header ("Location: productos.php");
}
//SLIDESHOWP




}

else{
header ("Location: index.php");
}


?>