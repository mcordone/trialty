<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/




function con(){
	return new mysqli("localhost","superbravo_nueva","oLmp&213","superbravo_nueva");
}

function insert_img($folder, $image){
$idsuper = $_GET['id'];
	$con = con();
	$con->query("insert into image_super (folder,src,id_super,created_at) value (\"$folder\",\"$image\",\"$idsuper\",NOW())");
}

function insert_historial(){

$fecha = date('Y-m-d');
$usuario_admin = $_SESSION['usuario'];
$nombre = $_GET['nombre'];
$actividad = 'Foto agregada a Supermercado '.$nombre;
	$con = con();
	$con->query("insert into historial (actividad, usuario, fecha) value (\"$actividad\",\"$usuario_admin\",\"$fecha\")");
}



function get_imgs(){
$idsuper = $_GET['id'];
	$images = array();
	$con = con();
	$query=$con->query("select * from image_super where id_super=$idsuper order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image_super where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image_super where id=$id");
}

?>