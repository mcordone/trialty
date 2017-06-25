<?php


        require('config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');



//comprobamos si ha ocurrido un error.
if (@$_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	//$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png", application/pdf);
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "../../images/ofertas/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['imagen']['name'];
				$nombre_producto = $_POST['nombre_producto'];
				$titulo1 = $_POST['titulo1'];
				$titulo3 = $_POST['titulo3'];
				$descripcion = $_POST['descripcion'];
				$tipo_oferta = $_POST['tipo'];
				$precio = $_POST['precio'];
				
				/*
				echo $nombre.'<br>';
				echo $nombre_producto.'<br>';
				echo $titulo1.'<br>';
				echo $titulo3.'<br>';
				echo $descripcion.'<br>';
				echo $tipo_oferta.'<br>';
				echo $precio.'<br>';
				*/
				
				$id = $_GET['id'];
				
				if(@$id != '')
				{
				
			
				
			
				
	$query2 = "UPDATE `ofertas` SET `nombre_oferta`='$nombre_producto', `precio`='$precio', `titulo1`='$titulo1', `titulo3`='$titulo3', `descripcion`='$descripcion', `tipo`='$tipo_oferta', `imagen`='$nombre'  where ofertas_id = '".$id."'";		
	
	 

	 
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }

				
				}
				else
				{
				
					@$insertar_producto = mysql_query("INSERT INTO ofertas (nombre_oferta, precio, titulo1, titulo3, descripcion, tipo, imagen)
VALUES ('$nombre_producto','$precio','$titulo1','$titulo3','$descripcion','$tipo_oferta','$nombre')", $con);

				}
				

				echo "la oferta ha sido actualizada exitosamente";
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

?>
