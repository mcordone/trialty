<?php 

if($_POST['correo'] != '')
{



session_start();


require('../conexion/db.php');


$nickname=$_POST['correo'];
$contrasena=$_POST['password'];


$valido=true;
 $consulta="SELECT * FROM usuarios where correo='$nickname' AND password='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             
             $valido=false;
			
			 header("location:index.php?login=error");
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['usuario']= $rowsresult['nombre'].' '.$rowsresult['apellido'];
        $_SESSION['tipo']= $rowsresult['tipo_usuario'];
        $_SESSION['id_usuario']= $rowsresult['usuario'];
             $valido=true;
             //$_SESSION["usuario"]=$nickname;			
             header("location:tablero.php?login=true");
        

         }


 }
 

 else
 
 {
  header("location: index.php?login=error");
 
 }

?>