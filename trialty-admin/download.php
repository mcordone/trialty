<?php

include("controlsesion.php");

if(isset($_GET["id"])){

if($_GET['seccion']== 'propiedades') {
	include "db_book.php";
	}
	
	if($_GET['seccion']== 'tiendas') {
	include "db_tiendas.php";
	}
	
	$img = get_img($_GET["id"]);
	if($img!=null){
		//del($img->id);
		$fullpath = $img->folder.$img->src;
		header("Content-Disposition: attachment; filename=$img->src");
		readfile($fullpath);
	} 
}


?>