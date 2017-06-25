<?php

include("controlsesion.php");
require_once('marca_agua/imageworkshop.php');
$idbook = $_GET['id'];
$nombre = $_GET['nombre'];

$carpeta = '../images/propiedades/$idbook/';
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}


include "db_book.php";
include "book/class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = false;

$files = array();
foreach ($_FILES['image'] as $k => $l) {
 foreach ($l as $i => $v) {
 if (!array_key_exists($i, $files))
   $files[$i] = array();
   $files[$i][$k] = $v;
 }
}

foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->Process("../images/propiedades/$idbook/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img("../images/propiedades/$idbook/",$handle->file_dst_name);

$ruta = "../images/propiedades/$idbook/",$handle->file_dst_name;


//ESTE ES LA MARCA DE AGUA
$norwayLayer = new ImageWorkshop(array(
    "imageFromPath" => $ruta,
));

 $photou = "login/images/header_peque.png";
$photo = new ImageWorkshop(array(
     "imageFromPath" => $photou,
));

$norwayLayer->addLayer(1, $photo, 15, 15, "RB");
 
$image = $norwayLayer->getResult();
imagepng($image, $ruta);
//ESTE ES LA MARCA DE AGUA

		
		
    } else {
	  $error = true;
      echo 'Error: ' . $handle->error;
    }
  } else {
   	$error = true;
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
}   

if(!$error){

 print "<h3 style='text-align:center; color:red; margin-top:100px;'>La foto ha subido exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_book.php?id=$idbook&nombre=$nombre'>Agregar m&aacute;s fotos</a><br><br><a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='ver_libro.php?id=$idbook&nombre=$nombre'>Ver imagenes de la propiedad</a></h3>
		  ";


insert_historial();

}

?>