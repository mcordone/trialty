<?php
include ('conectarBD.inc.php'); 
//y hacemos la consulta
$table = "name_table";
$catalog = "select* from $table";
$resEmp = mysql_query($catalog, $conexion) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento</title>
</head>
<body>
  <?php while($row= mysql_fetch_assoc($resEmp)){ ?>
   <div style="margin:10px 0;">
        <div style="margin:10px 0 0 0;"><? echo $row['author'] ?></div>
        <div style="margin:10px 0 0 0;"><? echo $row['text'] ?></div>
    </div>
 <?php } ?>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
