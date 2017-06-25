<?php

include("controlsesion.php");
$idtienda = $_GET['id'];
$nombre = $_GET['nombre'];

$carpeta = '../images/tiendas/$idtienda/';
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}


include "db_tienda.php";
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
    $handle->Process("../images/tiendas/$idtienda/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img("../images/tiendas/$idtienda/",$handle->file_dst_name);
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

 print "<h3 style='text-align:center; color:red; margin-top:100px;'>La pagina ha subido exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_super.php?id=$idbook&nombre=$nombre'>Agregar m&aacute;s fotos</a><br><br><a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='ver_super.php?id=$idtienda&nombre=$nombre'>Ver imagenes del Supermercado</a></h3>
		  ";


insert_historial();
}

?>