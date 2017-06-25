<?php
//1. Crear conexión a la Base de Datos
$conexion = mysql_connect("localhost","root","");
if (!$conexion) {
die("Fallo la conexión a la Base de Datos: " . mysql_error());
}
//2. Seleccionar la Base de Datos a utilizar
$seleccionar_bd = mysql_select_db("name_BD", $conexion);
if (!$seleccionar_bd) {
die("Fallo la selección de la Base de Datos: " . mysql_error());
}
//3. Tomar los campos provenientes del Formulario
$author = $_POST['author'];
$text = $_POST['text'];
//4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
$insertar = mysql_query("INSERT INTO `name_BD`.`name_table` (`id` ,`author` ,`text`) VALUES (NULL , '$author', '$text');", $conexion);
if (!$insertar) {
die("Fallo en la insercion de registro en la Base de Datos: " . mysql_error());
}
else{
echo '<SCRIPT LANGUAGE="javascript">location.href = "editar.html";   </SCRIPT>';
}
//4. Cerrar conexión a la Base de Datos
mysql_close($conexion);
?>