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

		


if(@$id != '')
{


				
	$query2 = "UPDATE `lista_provincias` SET `opcion`='$nombre' where id = '$id'";			
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
		    @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Provincia Actualizada $nombre','$usuario_admin','$fecha')", $con);
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La provincia ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='provincias.php'>Ir a la lista de provincias</a></h3>";


}

else
{

				
					@$insertar_producto = mysql_query("INSERT INTO lista_provincias (opcion)
VALUES ('$nombre')", $con);

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>La provincia ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_provincias.php'>Crear otra provincia</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='provincias.php'>Ir a todas Las provincias</a></h2>
";

  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Provincia Creada $nombre','$usuario_admin','$fecha')", $con);


}





}

else

{
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>Ha sucedido un error<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al inicio</a></h3>
		  ";

}


?>