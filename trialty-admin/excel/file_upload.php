<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @$_FILES["file"]["name"]; ?></title>
</head>

<body style="text-align:center; margin-top:100px;">
<?php

include("../controlsesion.php");

        require('../../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');





require_once("ophir.php");

if (!isset($_FILES["file"])) {
?>
<form action="file_upload.php" method="post"
enctype="multipart/form-data">
<h2>Subir lista de Suplidores</h2>
<input type="file" name="file" id="file" />
<?php
foreach ($_ophir_odt_import_conf["features"] as $conf=>$value){
	//echo  $conf;
	echo '<input style="display:none;" type="radio" name="features['.$conf.']" value="2" checked>';
	echo '<input style="display:none;" type="radio" name="features['.$conf.']" value="1" />';
	echo '<input style="display:none;" type="radio" name="features['.$conf.']" value="0" />';

}
?>

</p>
<input style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white; border:0;' type="submit" name="submit" value="Subir Lista" />
</form>

</body>
</html> 
<?php
}else{
if (($_FILES["file"]["size"] < 1e6))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
	$_ophir_odt_import_conf["features"] = array_map('intval', $_POST["features"]);
	$time = microtime(true);

	
	$excel = odt2html($_FILES["file"]["tmp_name"]);
	
	$excel = str_replace ("<table cellspacing=0 cellpadding=0 border=1>",'',$excel);
	$excel = str_replace ("<td></tr></table>",'',$excel);
	$excel = str_replace ("</td></tr>","</td><td></td><td></td></tr>",$excel);	
	

			  
$excel = str_replace ("<p>","",$excel);
$excel = str_replace ("</p>","",$excel);
$excel = str_replace ("Ñ","&Ntilde;",$excel);

echo "<h2 style='text-align:center; color:red; margin-top:100px;'>La lista ha sido creada exitosamente<br><br>
<a style='font-size:14px; text-decoration:none; text-align:center; padding:10px; background-color:orange; color:white;' href='../suplidores.php'>Ir al Administrador</a></h2>
<br>";


	echo '<table border=1 align=center class="table table-striped table-hover table-bordered" id="example-table">
<thead> <tr><th>SUPLIDORES</th><th></th><th></th></tr></thead>
                  <tbody>'.$excel;
	
					
	$query2 = "UPDATE `suplidores` SET `text`='$excel' where id = '1'";			
	
	  
        $result2 = mysql_query($query2);
		
		 @$historial = mysql_query("INSERT INTO historial (actividad, usuario, fecha)
VALUES ('Actualizacion de Suplidores','$usuario_admin','$fecha')", $con);

    
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>
</body>
</html>
