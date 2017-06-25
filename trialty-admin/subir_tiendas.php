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

$nombre_tienda = $_POST['nombre_tienda'];						
				$direccion = $_POST['direccion'];
				$apertura = $_POST['apertura'];
				$telefono = $_POST['telefono'];
				@$mapa = $_POST['mapa'];
				
				@$id = $_GET['id'];
				
				
	if(@$id != '' && $_FILES["imagen"]["error"] > 0)
{
			
							
				
$query2 = "UPDATE `tiendas` SET `nombre_tienda`='$nombre_tienda', `direccion`='$direccion', `telefono`='$telefono', `apertura`='$apertura', `mapa`='$mapa' where tiendas_id = '".$id."'";		
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El supermercado ha sido actualizado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tiendas.php'>Ir a todos los supermercados</a></h3>
		  ";
		  
		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado actualizado $nombre_tienda','$usuario_admin','$fecha')", $con);	 
		  


}
else
{
				
			

if (@$_FILES["imagen"]["error"] > 0){
	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>ha ocurrido un error
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_tiendas.php'>Volver a subir el Supermercado</a>
	</h2>";
} 

else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){

		$ruta = "../images/tiendas/" . $_FILES['imagen']['name'];

				

	
if (file_exists($ruta)){

if(@$id != '') { 
	$query2 = "UPDATE `tiendas` SET `nombre_tienda`='$nombre_tienda', `direccion`='$direccion', `telefono`='$telefono', `apertura`='$apertura', `mapa`='$mapa' where tiendas_id = '".$id."'";		
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado actualizado $nombre_tienda','$usuario_admin','$fecha')", $con);	
		  
		  
}
else {
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>LO SENTIMOS</h2>
<h3 style='text-align:center;'>Existe otro Supermercado con el mismo nombre de la foto, <br>Cambie el nombre de la foto y vuelva a subir el Supermercado.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_tiendas.php'>Volver a subir el Supermercado</a>
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
			
									@$insertar_producto = mysql_query("INSERT INTO tiendas (nombre_tienda, direccion, telefono, imagen, apertura, mapa)
VALUES ('$nombre_tienda','$direccion','$telefono','$nombre_foto','$apertura','$mapa')", $con);


$rss = mysql_query("SELECT @@identity AS tiendas_id");
if ($roww = mysql_fetch_row($rss)) {
$idd = trim($roww[0]);
}	


$sacar_nombre = mysql_query("SELECT * FROM tiendas where tiendas_id=$idd", $con);

while ($datos = @mysql_fetch_assoc($sacar_nombre) ){	                

   $nombre2 = $datos['nombre_tienda'];
   
   		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado actualizado $nombre2','$usuario_admin','$fecha')", $con);	
   
   
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>El Supermercado ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_super.php?id=$idd&nombre=$nombre2'>Subir Fotos del Supermercado</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tiendas.php'>Ir a todas los supermercados</a></h2>
";
}



				}
				
				else
				{ 
								
	$query2 = "UPDATE `tiendas` SET `nombre_tienda`='$nombre_tienda', `direccion`='$direccion', `telefono`='$telefono', `imagen`='$nombre_foto', `apertura`='$apertura', `mapa`='$mapa'  where tiendas_id = '".$id."'";		
	
	 

	 
        $result2 = mysql_query($query2);

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  		  	  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado actualizado $nombre_tienda','$usuario_admin','$fecha')", $con);	
		  
		  
	
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El Supermercado ha sido actualizado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tiendas.php'>Ir a todos las supermercados</a></h3>
		  ";
	
		  
		  
		  } //ID NO EXISTE



} //SUBIO LA FOTO
else {
echo "<h3 style='text-align:center; color:red; margin-top:100px;'>ocurrio un error al subir archivo.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_tiendas.php'>Volver a subir el Supermercado</a></h3>
";

}


				
				} //NO EXISTE LA FOTO

			

	
		

		
		} //SI NO SUPERA EL LIMITE
		else {
		echo "<h3 style='text-align:center; margin-top:200px;'>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><br>
		<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_tiendas.php'>Volver a subir el Supermercado</a></h3>
		";
	}



} //SI NO HAY ERROR

}//si no hay imagen

?>
