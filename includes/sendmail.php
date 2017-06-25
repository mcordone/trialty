<?php 


		


if(@$_POST['username'] != "" && @$_POST['subject'] != "" && @$_POST['email'] != "")
 
{
 
$nombre = $_POST['username'];
$telefono = $_POST['subject'];
$correo = $_POST['email'];
$comentario = $_POST['message'];	



if($_GET['tema'] == 'busqueda'){ $user_subject = stripslashes(strip_tags(trim('El cliente no encuentra la propiedad'))); } 
if($_GET['tema'] == 'contacto' || $_GET['tema'] == ''){ $user_subject = stripslashes(strip_tags(trim('Seccion contacto'))); }
if($_GET['tema'] == 'publicidad'){ $user_subject = stripslashes(strip_tags(trim('Solicitud de publicidad'))); }



//echo "Muchas Gracias! Uno de nuestros representantes le estará contactando: <b> $nombre </b>";
 echo "<h2 style='color:red;'>Muchas Gracias <b>$nombre</b>! Uno de nuestros representantes le estará contactando a su correo a la mayor brevedad...</h2>";
 
 
 

$name = $nombre;
$mail = "naybe10@gmail.com";
$titulo = "Contacto desde Web Trialty";
$asunto = $user_subject;


$header = 'From: ' .$titulo."<".$mail."> \r\n";
//$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "El nombre del contacto es " . $name . " \r\n";
$mensaje .= "Su correo: " . $correo . " \r\n";
$mensaje .= "Su telefono: " . $telefono . " \r\n";
$mensaje .= "Comentario: " . $comentario . " \r\n";




$mensaje .= "Este mensaje fue enviado el... " . date('d/m/Y', time());

$para  = 'naybe10@gmail.com'; // atención a la coma




mail($para, $asunto, utf8_decode($mensaje), $header);
 
 
 
}






?>