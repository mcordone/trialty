<?php

include("controlsesion.php");
        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');



				
				$id = $_GET['id'];
				
				if($id != '')
				{
				
			

$text = $_POST['text'];
			
				
	$query2 = "UPDATE `editor` SET `author`='$usuario_admin', `text`='$text'  where id = '".$id."'";		
	
	 

	 
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		   @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Conocenos Actualizada','$usuario_admin','$fecha')", $con);
		  
		  
		  
		  echo "<h2 style='text-align:center; color:red; margin-top:100px;'>Conocenos ha sido actualizado exitosamente<br><br>
		  <a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='form_conocenos.php'>Volver a Conocenos</a>
<BR><BR><a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='tablero.php'>Ir al menu</a>
</h2>
";

				
				}
				

?>
