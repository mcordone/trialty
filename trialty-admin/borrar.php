 <?php
   include("controlsesion.php");
   
     require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        

        mysql_select_db($dbbase, $con);
		
		$ideliminar = $_GET['id'];
		$nombre1 = $_GET['nombre'];
		
if($_GET['seccion'] == "provincias")		
{
$query_borrar = "DELETE FROM lista_provincias WHERE id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
		
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>La provincia ha sido borrada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='provincias.php'>Ir a la lista de provincias</a></h3>";
		
		   //header ("Location: provincias.php");
			
			}
			
			
			
if($_GET['seccion'] == "sectores")		
{
$query_borrar = "DELETE FROM lista_sectores WHERE id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
	
			
		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El sector ha sido borrado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='sectores.php'>Ir a la lista de sectores</a></h3>";	
		
		  // header ("Location: sectores.php");
			
			}			
			

					
			
				if($_GET['seccion'] == "slideshowp")		
{
$query_borrar = "DELETE FROM slideshowp WHERE slideshow_id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio Cuadrado $nombre1 borrado','$usuario_admin','$fecha')", $con);
		
		    		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El anuncio ha sido borrado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='slideshowp.php'>Ir a la lista de anuncios</a></h3>";
			}
			
			
						
				if($_GET['seccion'] == "usuarios")		
{
$query_borrar = "DELETE FROM usuarios WHERE id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
				 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Usuario $nombre1 borrado','$usuario_admin','$fecha')", $con);
		
		    header ("Location: usuarios.php");
			}
			
			
			
						
				if($_GET['seccion'] == "slideshowg")		
{
$query_borrar = "DELETE FROM slideshowg WHERE slideshow_id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
				 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Anuncio Grande $nombre1 borrado','$usuario_admin','$fecha')", $con);
		
		     //header ("Location: slideshowg.php");


				 		    		  echo "<h3 style='text-align:center; color:red; margin-top:100px;'>El anuncio ha sido borrado exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='slideshowg.php'>Ir a la lista de anuncios</a></h3>";



			}
			
									
				if($_GET['seccion'] == "productos")		
{
$query_borrar = "DELETE FROM productos WHERE productos_id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
				 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Producto $nombre1 borrado','$usuario_admin','$fecha')", $con);
		
		     header ("Location: productos.php");
			}
			
			
						if($_GET['seccion'] == "tiendas")		
{
$query_borrar = "DELETE FROM tiendas WHERE tiendas_id=$ideliminar";
		$borrar = mysql_query($query_borrar);
		
				 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Supermercado $nombre1 borrado','$usuario_admin','$fecha')", $con);
		
		     header ("Location: tiendas.php");
			}
				
				
				
			
			
			
			
			
		
		?>