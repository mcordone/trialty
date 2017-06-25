<?php

include("controlsesion.php");

  require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');

if(isset($_GET["id"]) || isset($_GET["nombre"])){
$id = $_GET["id"];
$nombre = $_GET["nombre"];
if($_GET['seccion']== 'propiedades') {
	include "db_book.php";
	}
	
if($_GET['seccion']== 'tiendas') {
	include "db_tienda.php";
	}	


	$img = get_img($_GET["id"]);
	if($img!=null){
		del($img->id);
		//unlink($img->folder.$img->src);
		unlink($img->folder.$img->src);
		
if($_GET['seccion']== 'propiedades') {
		
		echo "<h3 style='text-align:center; color:red; margin-top:100px;'>Eliminada Exitosamente!<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Ir a todas las propiedades</a><br><br><a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='ver_libro.php?id=$id&nombre=$nombre'>Volver a las fotos de esta propiedad</a></h3>";
		

		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Foto de Propiedad $nombre Borrada','$usuario_admin','$fecha')", $con);
}

if($_GET['seccion']== 'promociones') {
		
		echo "<h3 style='text-align:center; color:red; margin-top:100px;'>Eliminada Exitosamente!<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Ir a todas las propiedades</a><br><br><a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='ver_libro.php?id=$id&nombre=$nombre'>Volver a las Fotos de este libro</a></h3>";
		

		  		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Foto de Promocion $nombre Borrada','$usuario_admin','$fecha')", $con);
}




	}
}


?>