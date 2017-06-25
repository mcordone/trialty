<?php

include("controlsesion.php");

if($_POST['facebook'] != '')
{

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');
		
		
	
	$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];		
$instagram = $_POST['instagram'];

  $google = $_POST['google'];
$pinterest = $_POST['pinterest'];   
$linkedin = $_POST['linkedin'];   
$youtube = $_POST['youtube'];

$contacto = $_POST['contacto'];
$sugerencias = $_POST['sugerencias'];
$moneda_us = $_POST['moneda_us'];
$moneda_eur = $_POST['moneda_eur'];
$telefono = $_POST['telefono'];

$texto_contacto = $_POST['texto_contacto'];
$texto_contacto = $_POST['texto_contacto'];
$texto_contacto = rawurlencode($texto_contacto);
$texto_contacto = rawurldecode(str_replace("%0D%0A","<br>",$texto_contacto));

$texto_busqueda = $_POST['texto_busqueda'];
$texto_busqueda = $_POST['texto_busqueda'];
$texto_busqueda = rawurlencode($texto_busqueda);
$texto_busqueda = rawurldecode(str_replace("%0D%0A","<br>",$texto_busqueda));

$texto_publicidad = $_POST['texto_publicidad'];
$texto_publicidad = $_POST['texto_publicidad'];
$texto_publicidad = rawurlencode($texto_publicidad);
$texto_publicidad = rawurldecode(str_replace("%0D%0A","<br>",$texto_publicidad));


$texto_business = $_POST['business'];
$texto_business = $_POST['business'];
$texto_business = rawurlencode($texto_business);
$texto_business = rawurldecode(str_replace("%0D%0A","<br>",$texto_business));

$texto_personal = $_POST['personal'];
$texto_personal = $_POST['personal'];
$texto_personal = rawurlencode($texto_personal);
$texto_personal = rawurldecode(str_replace("%0D%0A","<br>",$texto_personal));


$texto_premium = $_POST['premium'];
$texto_premium = $_POST['premium'];
$texto_premium = rawurlencode($texto_premium);
$texto_premium = rawurldecode(str_replace("%0D%0A","<br>",$texto_premium));



$precio_business = $_POST['precio_business'];
$precio_personal = $_POST['precio_personal'];
$precio_premium = $_POST['precio_premium'];
		

				
	$query2 = "UPDATE `configuracion` SET `facebook`='$facebook', `twitter`='$twitter', `instagram`='$instagram', `google`='$google', `pinterest`='$pinterest', `linkedin`='$linkedin', `youtube`='$youtube', `contacto`='$contacto', `telefono`='$telefono', `sugerencias`='$sugerencias', `moneda_us`='$moneda_us', `moneda_eur`='$moneda_eur', `texto_contacto`='$texto_contacto', `texto_busqueda`='$texto_busqueda', `texto_publicidad`='$texto_publicidad', `personal`='$texto_personal', `business`='$texto_business', `premium`='$texto_premium', `precio_personal`='$precio_personal', `precio_business`='$precio_business', `precio_premium`='$precio_premium'  where id = '1'";			
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La configuraci&oacute;n ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al inicio</a></h3>
		  ";
		  
		  

 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Configuracion Actualizada','$usuario_admin','$fecha')", $con);


}
else

{
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La configuraci&oacute;n tiene un error y no ha sido actualizada<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al inicio</a></h3>
		  ";

}

