<?php
include("controlsesion.php");

if($_POST['nombre'] != '')
{

@$id = $_GET['id'];

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);

        mysql_set_charset('utf8');
		
		
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];		
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$correo = $_POST['correo'];
$tipo_usuario = $_POST['tipo_usuario'];



//CREAR THUMBNAIL

$imagen = $_FILES['imagen']['name'];
$ruta_user = "../images/usuarios/" . $_FILES['imagen']['name'];
$resultado_ruta = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_user); 


//CREAR THUMBNAIL


		


if(@$id != '')
{



if(isset($_FILES['imagen']['name']))
{
				
	$query2 = "UPDATE `usuarios` SET `nombre`='$nombre', `apellido`='$apellido', `usuario`='$usuario', `password`='$password', `correo`='$correo', `imagen`='$imagen', `tipo_usuario`='$tipo_usuario'  where id = '$id'";			
	}
  else
  {

      $query2 = "UPDATE `usuarios` SET `nombre`='$nombre', `apellido`='$apellido', `usuario`='$usuario', `password`='$password', `correo`='$correo', `tipo_usuario`='$tipo_usuario'  where id = '$id'"; 
  }
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
		    @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Usuario Actualizado $nombre','$usuario_admin','$fecha')", $con);
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El usuario ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='usuarios.php'>Ir a la lista de usuarios</a></h3>";


}

else
{


if(isset($_FILES['imagen']['name']))
{
				
					@$insertar_producto = mysql_query("INSERT INTO usuarios (nombre, apellido, usuario, password, correo, imagen, tipo_usuario)
VALUES ('$nombre','$apellido','$usuario','$password','$correo', '$imagen', '$tipo_usuario')", $con);
}
else
{
          @$insertar_producto = mysql_query("INSERT INTO usuarios (nombre, apellido, usuario, password, correo, tipo_usuario)
VALUES ('$nombre','$apellido','$usuario','$password','$correo', '$tipo_usuario')", $con);

}          

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>El usuario ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_usuarios.php'>Crear otro usuario</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='usuarios.php'>Ir a todas los usuarios</a></h2>
";

  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Usuario Creado $nombre','$usuario_admin','$fecha')", $con);


}





}

else

{
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>Ha sucedido un error<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al inicio</a></h3>
		  ";

}


?>