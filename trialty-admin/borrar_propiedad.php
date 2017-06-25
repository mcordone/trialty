<?php

include("controlsesion.php");

if(isset($_GET["id"]) && isset($_GET["url"])){

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');



$idborrar = $_GET["id"];
$directorio = '../images/propiedades/';
$foto = $_GET["url"];
$nombre1= $_GET["nombre"];

//eliminando foto de promocion
	$query2 = "DELETE FROM `propiedades` where propiedades_id = '".$idborrar."'";			  
        $result2 = mysql_query($query2);

        

        if (!mysql_query($query2,$con))

          {

          die('Error: ' . mysql_error());

          }
		  
		  
//eliminando foto de libros
	$query3 = "DELETE FROM `image` where id_book = '".$idborrar."'";			  
        $result3 = mysql_query($query3);

        

        if (!mysql_query($query3,$con))

          {

          die('Error: ' . mysql_error());

          }	
		  
		  
		  	 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Propiedad $nombre1 Borrada Completa','$usuario_admin','$fecha')", $con);  
		  
		  

//eliminando foto del servidor
unlink($directorio.$foto);//sabiendo que estos son los parametros para tu caso  


//$idborrar = '13';

//borrar carpeta y contenido
function removeDirectory($path)
{
    $path = rtrim( strval( $path ), '/' ) ;
    
    @$d = dir( $path );
    
    if( ! $d )
        return false;
    
    while ( false !== ($current = $d->read()) )
    {
        if( $current === '.' || $current === '..')
            continue;
        
        $file = $d->path . '/' . $current;
        
        if( is_dir($file) )
            removeDirectory($file);
        
        if( is_file($file) )
            unlink($file);
    }
    
    rmdir( $d->path );
    $d->close();
    return true;
}

removeDirectory("../images/propiedades/$idborrar");

	echo "<h2 style='text-align:center; color:red; margin-top:100px;'>Propiedad borrada
	<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='propiedades.php'>Volver a las propiedades</a>
	</h2>";


}


?>