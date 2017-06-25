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

@$id = $_GET['id'];

$nombre_slideshow = $_POST['nombre_slideshow'];						
$tipo_oferta = $_POST['seccion'];

$posicion = $_POST['posicion'];

if($_POST['url'] == '')
{
$url = '#';	
}
else
{
$url = $_POST['url'];	
}



if(@$id != '' && $_FILES["imagen"]["error"] > 0)
{

		
		$query2 = "UPDATE `slideshowp` SET `nombre_slideshow`='$nombre_slideshow', `seccion`='$tipo_oferta', `posicion`='$posicion', `url`='$url' where slideshow_id = '".$id."'";							
					
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		 		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio actualizado Cuadrado $nombre_slideshow','$usuario_admin','$fecha')", $con);	  
		  
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El anuncio ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='slideshowp.php'>Ir a todos los anuncios</a></h3>
		  ";
		  


}
else
{


if (@$_FILES["imagen"]["error"] > 0){
	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>ha ocurrido un error
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_slideshowp.php'>Volver a subir el anuncio</a>
	</h2>";
} 

else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

	$limite_kb = 100;
	

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){


 
	$ruta = "../images/slideshowp/" . $_FILES['imagen']['name'];


			    $nombre = $_FILES['imagen']['name'];


	
if (file_exists($ruta)){

if(@$id != '') { 
				
							
			$query2 = "UPDATE `slideshowp` SET `nombre_slideshow`='$nombre_slideshow', `seccion`='$tipo_oferta', `posicion`='$posicion', `imagen`='$nombre', `url`='$url'  where slideshow_id = '".$id."'";		
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio actualizado Cuadrado $nombre_slideshow','$usuario_admin','$fecha')", $con);	 
		  
		  
}
else {
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>LO SENTIMOS</h2>
<h3 style='text-align:center;'>Existe otro anuncio con el mismo nombre de la foto, <br>Cambie el nombre de la foto y vuelva a subir el anuncio.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_slideshowp.php'>Volver a subir el anuncio</a>
</h3>

";
}

}

else{


$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
if ($resultado){
$nombre_foto = $_FILES['imagen']['name'];


				if(@$id == '')
				{ 
				
				
									@$insertar_producto = mysql_query("INSERT INTO slideshowp (nombre_slideshow, seccion, posicion, imagen, url)
VALUES ('$nombre_slideshow','$tipo_oferta','$posicion','$nombre','$url')", $con);

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>El anuncio ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_slideshowp.php'>Subir otro anuncio</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='slideshowp.php'>Ir a todas las anuncios</a></h2>
";

	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio creado cuadrado $nombre_slideshow','$usuario_admin','$fecha')", $con);	 




				}
				
				else
				{ 
				
				
				
				
	$query2 = "UPDATE `slideshowp` SET `nombre_slideshow`='$nombre_slideshow', `seccion`='$tipo_oferta', `posicion`='$posicion', `imagen`='$nombre', `url`='$url'  where slideshow_id = '".$id."'";		
				

	 
        $result2 = mysql_query($query2);

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
 	  
		  
		  else{

		  
		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio actualizado cuadrado $nombre_slideshow','$usuario_admin','$fecha')", $con);	
		  	
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El anuncio ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='slideshowp.php'>Ir a todos los anuncios</a></h3>
		  ";
		  }
		  
		  
		  } //ID NO EXISTE



} //SUBIO LA FOTO
else {
echo "<h3 style='text-align:center; color:red; margin-top:100px;'>ocurrio un error al subir archivo.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_slideshowp.php'>Volver a subir el anuncio</a></h3>
";

}


				
				} //NO EXISTE LA FOTO

			

	
		

		
		} //SI NO SUPERA EL LIMITE
		else {
		echo "<h3 style='text-align:center; margin-top:200px;'>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><br>
		<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_slideshowp.php'>Volver a subir el anuncio</a></h3>
		";
	}



} //SI NO HAY ERROR


}//ID NO EXISTE

?>


