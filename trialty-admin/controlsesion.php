<?php @session_start();
if (!$_SESSION){
header( 'Location: index.php' ) ;
}
else{
$fecha = date('Y-m-d');
$usuario_admin = $_SESSION['usuario'];
}
?>