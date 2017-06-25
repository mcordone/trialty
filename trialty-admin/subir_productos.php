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

$nombre_producto = $_POST['nombre_producto'];
$precio_anterior = $_POST['precio_anterior'];		
$descripcion = $_POST['descripcion'];
$tipo_oferta = $_POST['seccion'];
$precio = $_POST['precio'];
$precio_anterior = $_POST['precio_anterior'];
	


if(@$id != '' && $_FILES["imagen"]["error"] > 0)
{

		
							
				
	$query2 = "UPDATE `productos` SET `nombre_producto`='$nombre_producto', `precio`='$precio', `precio_anterior`='$precio_anterior', `descripcion`='$descripcion', `seccion`='$tipo_oferta'  where productos_id = '".$id."'";			
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El producto ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='productos.php'>Ir a todos los productos</a></h3>
		  ";
		  


}
else
{


if (@$_FILES["imagen"]["error"] > 0){
	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>ha ocurrido un error
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_productos.php'>Volver a subir el producto</a>
	</h2>";
} 

else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

	$limite_kb = 100;
	

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){


 
	$ruta = "../images/productos/" . $_FILES['imagen']['name'];


			    $nombre = $_FILES['imagen']['name'];


	
if (file_exists($ruta)){

if(@$id != '') { 
				
							
				
	$query2 = "UPDATE `productos` SET `nombre_producto`='$nombre_producto', `precio`='$precio', `precio_anterior`='$precio_anterior', `descripcion`='$descripcion', `seccion`='$tipo_oferta'  where productos_id = '".$id."'";			
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Producto actualizado $nombre_producto','$usuario_admin','$fecha')", $con);
		  
		  
}
else {
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>LO SENTIMOS</h2>
<h3 style='text-align:center;'>Existe otro producto con el mismo nombre de la foto, <br>Cambie el nombre de la foto y vuelva a subir el producto.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_productos.php'>Volver a subir el producto</a>
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
				
				
					@$insertar_producto = mysql_query("INSERT INTO productos (nombre_producto, precio, precio_anterior, descripcion, seccion, imagen)
VALUES ('$nombre_producto','$precio','$titulo1','$descripcion','$tipo_oferta','$nombre')", $con);

 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Producto Creado $nombre_producto','$usuario_admin','$fecha')", $con);

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>El producto ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_productos.php'>Subir otro producto</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='productos.php'>Ir a todas las productos</a></h2>
";






				}
				
				else
				{ 
				
				
			
				
	$query2 = "UPDATE `productos` SET `nombre_producto`='$nombre_producto', `precio`='$precio', `precio_anterior`='$precio_anterior', `descripcion`='$descripcion', `seccion`='$tipo_oferta', `imagen`='$nombre'  where productos_id = '".$id."'";					
	
	
	 

	 
        $result2 = mysql_query($query2);

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Producto Actualizado $nombre_producto','$usuario_admin','$fecha')", $con);
		  
		  
		  else{
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El producto ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='productos.php'>Ir a todos los productos</a></h3>
		  ";
		  }
		  
		  
		  } //ID NO EXISTE



} //SUBIO LA FOTO
else {
echo "<h3 style='text-align:center; color:red; margin-top:100px;'>ocurrio un error al subir archivo.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_productos.php'>Volver a subir el producto</a></h3>
";

}


				
				} //NO EXISTE LA FOTO

			

	
		

		
		} //SI NO SUPERA EL LIMITE
		else {
		echo "<h3 style='text-align:center; margin-top:200px;'>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><br>
		<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_productos.php'>Volver a subir el producto</a></h3>
		";
	}



} //SI NO HAY ERROR


}//ID NO EXISTE

?>