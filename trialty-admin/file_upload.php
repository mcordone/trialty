
<?php
/*
include("controlsesion.php");

        require('../conexion/config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());

          }

        mysql_select_db($dbbase, $con);


        mysql_set_charset('utf8');

*/



require_once("excel/ophir.php");

if (isset($_FILES["file"])) {

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

	echo odt2html($_FILES["file"]["tmp_name"]);
	/*
	$excel = odt2html($_FILES["file"]["tmp_name"]);
	
	$excel = str_replace ("<table cellspacing=0 cellpadding=0 border=1>",'',$excel);
	$excel = str_replace ("<td></tr></table>",'',$excel);
	
				  
$excel = str_replace ("</td></tr>","</td><td></td></tr>",$excel);				  
$excel = str_replace ("<p>","",$excel);
$excel = str_replace ("</p>","",$excel);
$excel = '<table border=1 class="table table-striped table-hover table-bordered" id="example-table">
<thead> <tr><th>Suplidores</th><th></th></tr></thead>
                  <tbody>'.$excel;
	
	

	echo $excel;
	*/
	/*
	
			  @$historial = mysql_query("INSERT INTO editor (author, text)
VALUES ('yo','$excel')", $con);
		*/  
	
	
	//echo odt2html($_FILES["file"]["tmp_name"]);
	/*
	echo '<div style="background-color:grey">';
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	echo "\n\n<br><font size='0.5em'>HTML generated in <b>".(microtime(true)-$time)."</b> microseconds</font>";
	echo "</div>";
	*/
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>
