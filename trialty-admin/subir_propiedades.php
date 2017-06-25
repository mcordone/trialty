<?php

include("controlsesion.php");

//ESTA ES LA MARCA DE AGUA
require_once('marca_agua/imageworkshop.php');

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');

@$id = $_GET['id'];

$nombre_propiedad = $_POST['nombre_propiedad'];
//echo "nombre_propiedad ".$nombre_propiedad;
$precio = $_POST['precio'];

$precio = str_replace('.00','',$precio);
$precio = str_replace(',','',$precio);


//ESTA ES LA PARTE DEL CODIGO





 //OBTENER LA FECHA Y NO.COMPROBANTE ANTERIOR

//$codigo = $_POST['codigo'];	

/*
$rs = "select * from propiedades order by propiedades_id desc limit 1";


$listado_compro = mysql_query($rs, $con) or die(mysql_error());
$codigos = mysql_fetch_assoc($listado_compro);
$codigo_anterior = $codigos['codigo'];


$codigo = $codigo_anterior + 1;

*/

//ESTA ES LA PARTE DEL CODIGO











$nombre2 = date("dmYhi").".jpg";

$nombre3 = date("dmYhi")."-thumb.jpg";




$usuario = $_POST['usuario'];	

$cantidad_habitacion = $_POST['cantidad_habitacion'];	
$bano = $_POST['bano'];	
$parqueo = $_POST['parqueo'];

$jardin = $_POST['jardin'];
$patio = $_POST['patio'];
$balcon = $_POST['balcon'];
$terraza = $_POST['terraza'];
$piscina = $_POST['piscina'];
$gym = $_POST['gym'];



//NUEVOS
$area_social = $_POST['area_social'];
$estudio = $_POST['estudio'];
$family = $_POST['family'];

//NUEVOS

$piso = $_POST['piso'];
$nivel = $_POST['nivel'];

$portada = $_POST['portada'];
$slideshow = $_POST['slideshow'];


$metraje = $_POST['metraje'];				
$descripcion = $_POST['descripcion'];
$descripcion = rawurlencode($descripcion);
$descripcion = rawurldecode(str_replace("%0D%0A","<br>",$descripcion));



$provincias = $_POST['provincias'];	
$sectores = $_POST['estados'];


if($sectores == '')
{
$sectores = $_POST['sector'];
}


	
$tipo = $_POST['tipo'];
$tipo_compra = $_POST['tipo_compra'];

$moneda = $_POST['moneda'];

$moneda_us = $_POST['moneda_us'];
$moneda_eur = $_POST['moneda_eur'];


if($moneda == 'us')
{

$precio_us = $precio;
$precio_rd = $precio * $moneda_us;
$precio_eur = $precio_rd / $moneda_eur;



}

if($moneda == 'rd')
{

$precio_us = $precio / $moneda_us;
$precio_rd = $precio;
$precio_eur = $precio_rd / $moneda_eur;



}


if($moneda == 'eu')
{

$precio_eur = $precio;
$precio_rd = $precio * $moneda_eur;
$precio_us = $precio_rd / $moneda_us;



}




//echo $_FILES["imagen"]["error"].' imagen error';



	


if(@$id != '' && $_FILES["imagen"]["error"] >= 0)
{

		
							$area_social = $_POST['area_social'];
$estudio = $_POST['estudio'];
$family = $_POST['family'];
				
	$query2 = "UPDATE `propiedades` SET `nombre_propiedad`='$nombre_propiedad', `moneda`='$moneda', `tipo_compra`='$tipo_compra', `precio_rd`='$precio_rd', `precio_us`='$precio_us', `precio_eu`='$precio_eur', `cantidad_habitacion`='$cantidad_habitacion', `bano`='$bano', `parqueo`='$parqueo', `jardin`='$jardin', `patio`='$patio', `balcon`='$balcon', `terraza`='$terraza', `piscina`='$piscina', `gym`='$gym', `area_social`='$area_social', `estudio`='$estudio', `family`='$family', `piso`='$piso', `nivel`='$nivel', `descripcion`='$descripcion', `metraje`='$metraje', `provincia`='$provincias', `sector`='$sectores', `tipo`='$tipo', `slideshow`='$slideshow', `portada`='$portada' where propiedades_id = '".$id."'";			
	
	
	  
      $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          } 
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La propiedad ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Ir a todas los propiedades</a></h3>
		  ";
		  


}
else
{


if (@$_FILES["imagen"]["error"] > 0){
	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>ha ocurrido un error
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_propiedades.php'>Volver a subir la propiedad</a>
	</h2>";
} 

else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

	$limite_kb = 300;
	

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){


 
	$ruta = "../images/propiedades/" . $_FILES['imagen']['name'];

	$ruta2 = "../images/propiedades/" . $nombre2;

	$ruta3 = "../images/propiedades/" . $nombre3;


			 $nombre = $_FILES['imagen']['name'];

			  //$nombre2 = $_FILES['imagen']['name'];


$nombre2 = date("dmYhi").".jpg";


	
if (file_exists($ruta)){





if(@$id != '') { 




	$query2 = "UPDATE `propiedades` SET `nombre_propiedad`='$nombre_propiedad', `moneda`='$moneda', `tipo_compra`='$tipo_compra', `precio_rd`='$precio_rd', `precio_us`='$precio_us', `precio_eu`='$precio_eur', `cantidad_habitacion`='$cantidad_habitacion', `bano`='$bano', `parqueo`='$parqueo', `jardin`='$jardin', `patio`='$patio', `balcon`='$balcon', `terraza`='$terraza', `piscina`='$piscina', `gym`='$gym', `area_social`='$area_social', `estudio`='$estudio', `family`='$family', `piso`='$piso', `nivel`='$nivel', `descripcion`='$descripcion', `metraje`='$metraje', `provincia`='$provincias', `sector`='$sectores', `tipo`='$tipo', `slideshow`='$slideshow', `portada`='$portada' where propiedades_id = '".$id."'";


							

	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Propiedad actualizada $nombre_propiedad','$usuario_admin','$fecha')", $con);

		  
		  
}
else {
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>LO SENTIMOS</h2>
<h3 style='text-align:center;'>Existe otra propiedad con el mismo nombre de la foto, <br>Cambie el nombre de la foto y vuelva a subir la propiedad.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_propiedades.php'>Volver a subir la propiedad</a>
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
				
				

				
					@$insertar_producto = mysql_query("INSERT INTO propiedades (nombre_propiedad, tipo_compra, moneda, precio_rd, precio_us, precio_eu, cantidad_habitacion, bano, parqueo, jardin, patio, balcon, terraza, piscina, gym, area_social, estudio, family, piso, nivel, descripcion, metraje, provincia, sector, imagen, tipo, publicado, slideshow, portada)
VALUES ('$nombre_propiedad','$tipo_compra','$moneda','$precio_rd','$precio_us','$precio_eur','$cantidad_habitacion','$bano','$parqueo','$jardin','$patio','$balcon','$terraza','$piscina','$gym','$area_social','$estudio','$family','$piso','$nivel','$descripcion','$metraje','$provincias','$sectores','$nombre2','$tipo','0','$slideshow', '$portada', '$usuario')", $con);

/*
echo "INSERT INTO propiedades (nombre_propiedad, tipo_compra, moneda, precio_rd, precio_us, precio_eu, cantidad_habitacion, bano, parqueo, jardin, patio, balcon, terraza, piscina, gym, area_social, estudio, family, piso, nivel, descripcion, metraje, provincia, sector, imagen, tipo, publicado, slideshow, portada)
VALUES ('$nombre_propiedad','$tipo_compra','$moneda','$precio_rd','$precio_us','$precio_eur','$cantidad_habitacion','$bano','$parqueo','$jardin','$patio','$balcon','$terraza','$piscina','$gym','$area_social','$estudio','$family','$piso','$nivel','$descripcion','$metraje','$provincias','$sectores','$nombre2','$tipo','0','$slideshow', '$portada')";
*/

 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Propiedad Creado $nombre_propiedad','$usuario_admin','$fecha')", $con); 

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>La propiedad ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_propiedades.php'>Subir otra propiedad</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Ir a todas las propiedades</a></h2>
";






				}
				
				else
				{ 
				
	

	                $query2 = "UPDATE `propiedades` SET `nombre_propiedad`='$nombre_propiedad', `moneda`='$moneda', `tipo_compra`='$tipo_compra', `precio_rd`='$precio_rd', `precio_us`='$precio_us', `precio_eu`='$precio_eur', `cantidad_habitacion`='$cantidad_habitacion', `bano`='$bano', `parqueo`='$parqueo', `jardin`='$jardin', `patio`='$patio', `balcon`='$balcon', `terraza`='$terraza', `piscina`='$piscina', `gym`='$gym', `area_social`='$area_social', `estudio`='$estudio', `family`='$family', `piso`='$piso', `nivel`='$nivel', `descripcion`='$descripcion', `metraje`='$metraje', `provincia`='$provincias', `sector`='$sectores', `imagen`='$nombre2', `tipo`='$tipo', `slideshow`='$slideshow', `portada`='$portada' where propiedades_id = '".$id."'";



				


        $result2 = mysql_query($query2);

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          } 
		  
		 else{ 

	 	
 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Propiedad Actualizada $nombre_propiedad','$usuario_admin','$fecha')", $con);


	  
		  
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La propiedad ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Ir a todos los propiedades</a></h3>";
		  }
		  
		
		  
		  
		 } //ID NO EXISTE



 } //SUBIO LA FOTO
		 
else {
echo "<h3 style='text-align:center; color:red; margin-top:100px;'>ocurrio un error al subir archivo.<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_propiedades.php'>Volver a subir la propiedad</a></h3>
";

}


				
			} //NO EXISTE LA FOTO

			

	
		

		
	} //SI NO SUPERA EL LIMITE

		else {
		echo "<h3 style='text-align:center; margin-top:200px;'>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><br>
		<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_propiedades.php'>Volver a subir la propiedad</a></h3>
		";
	}



 } //SI NO HAY ERROR


  }//ID NO EXISTE





if (file_exists($ruta)){




//ESTE ES LA FOTO 
$norwayLayer = new ImageWorkshop(array(
    "imageFromPath" => $ruta,
));
//ESTE ES LA FOTO 



 //ESTA ES LA FOTO
 $photou = "login/images/header_peque.png";
$photo = new ImageWorkshop(array(
     "imageFromPath" => $photou,
));

$norwayLayer->addLayer(1, $photo, 15, 15, "RB");
 //ESTA ES LA FOTO


 
$image = $norwayLayer->getResult();
imagepng($image, $ruta2);




//CREAR THUMBNAIL

include('crearThumbnail.php');

crearThumbnailRecortado($ruta, $ruta3, '250', '149');

//CREAR THUMBNAIL


unlink($ruta);

}
















?>