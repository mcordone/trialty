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

$nombre_promocion = $_POST['nombre_promocion'];						
				$descripcion = $_POST['descripcion'];
				$seccion = $_POST['seccion'];
				
				@$id = $_GET['id'];
				
				
	if(@$id != '' && $_FILES["imagen"]["error"] > 0)
{
			
							
				
$query2 = "UPDATE `promociones` SET `nombre_promocion`='$nombre_promocion', `descripcion`='$descripcion', `seccion`='$seccion' where promociones_id = '".$id."'";		
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La promoci&oacute;n ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='promociones.php'>Ir a todos los promociones</a></h3>
		  ";
		  
		  
		 		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Promocion actualizada $nombre_promocion','$usuario_admin','$fecha')", $con);
		   


}
else
{
				
			

if (@$_FILES["imagen"]["error"] > 0){
	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>ha ocurrido un error
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_promociones.php'>Volver a subir la promoci&oacute;n</a>
	</h2>";
} 

else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){

		$ruta = "../images/promociones/" . $_FILES['imagen']['name'];

				

	
if (file_exists($ruta)){

if(@$id != '') { 
	$query2 = "UPDATE `promociones` SET `nombre_promocion`='$nombre_promocion', `descripcion`='$descripcion', `seccion`='$seccion' where promociones_id = '".$id."'";		
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		 		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Promocion actualizada $nombre_promocion','$usuario_admin','$fecha')", $con);
		  
		  
}
else {
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>LO SENTIMOS</h2>
<h3 style='text-align:center;'>Existe otra promoci&oacute;n con el mismo nombre de la foto, <br>Cambie el nombre de la foto y vuelva a subir la promoci&oacute;n.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_promociones.php'>Volver a subir la promoci&oacute;n</a>
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
			
									@$insertar_producto = mysql_query("INSERT INTO promociones (nombre_promocion, descripcion, seccion, imagen)
VALUES ('$nombre_promocion','$descripcion','$seccion','$nombre_foto')", $con);


$rss = mysql_query("SELECT @@identity AS promociones_id");
if ($roww = mysql_fetch_row($rss)) {
$idd = trim($roww[0]);
}	


$sacar_nombre = mysql_query("SELECT * FROM promociones where promociones_id=$idd", $con);

while ($datos = @mysql_fetch_assoc($sacar_nombre) ){	                

   $nombre2 = $datos['nombre_promocion'];
   
   		 		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Promocion creada $nombre2','$usuario_admin','$fecha')", $con);
   
   
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>La promoci&oacute;n ha sido creada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_book.php?id=$idd&nombre=$nombre2'>Subir P&aacute;ginas del libro</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='promociones.php'>Ir a todas las promociones</a></h2>
";
}



				}
				
				else
				{ 
								
	$query2 = "UPDATE `promociones` SET `nombre_promocion`='$nombre_promocion', `descripcion`='$descripcion', `imagen`='$nombre_foto', `seccion`='$seccion'  where promociones_id = '".$id."'";		
	
	 

	 
        $result2 = mysql_query($query2);

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
		  		 		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Promocion creada $nombre_promocion','$usuario_admin','$fecha')", $con);
		  
		  
		//  else{
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La promoci&oacute;n ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='promociones.php'>Ir a todas las promociones</a></h3>
		  ";
		//  }
		  
		  
		  } //ID NO EXISTE



} //SUBIO LA FOTO
else {
echo "<h3 style='text-align:center; color:red; margin-top:100px;'>ocurrio un error al subir archivo.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_promociones.php'>Volver a subir la promoci&oacute;n</a></h3>
";

}


				
				} //NO EXISTE LA FOTO

			

	
		

		
		} //SI NO SUPERA EL LIMITE
		else {
		echo "<h3 style='text-align:center; margin-top:200px;'>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><br>
		<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_promociones.php'>Volver a subir la promoci&oacute;n</a></h3>
		";
	}



} //SI NO HAY ERROR

}//si no hay imagen

?>
