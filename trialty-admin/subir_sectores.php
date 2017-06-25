<?php
include("controlsesion.php");

if($_POST['nombre'] != '')
{

@$id = $_GET['id'];
$id_provincia = $_POST['provincias'];

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


				
	$query2 = "UPDATE `lista_sectores` SET `opcion`='$nombre',`relacion`='$id_provincia' where id = '$id'";			
	
	  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
		    @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Sector Actualizado $nombre','$usuario_admin','$fecha')", $con);
		  
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El Sector ha sido actualizada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='sectores.php'>Ir a la lista de sectores</a></h3>";


}

else
{

				
					@$insertar_producto = mysql_query("INSERT INTO lista_sectores (opcion,relacion)
VALUES ('$nombre','$provincia_id')", $con);

				
echo "<h2 style='text-align:center; color:red; margin-top:100px;'>El Sector ha sido creado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_sectores.php'>Crear otro Sector</a><br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='sectores.php'>Ir a todos los Sectores</a></h2>
";

  @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Sector Creado $nombre','$usuario_admin','$fecha')", $con);


}





}

else

{
  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>Ha sucedido un error<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al inicio</a></h3>
		  ";

}


?>