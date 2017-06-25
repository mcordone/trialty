<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
@$id = $_GET['id'];
if(@$_GET['id'] != '')
{
$consulta = "SELECT * FROM sectores where id_sector='$id'";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);
}

?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Sectores</li>
          </ol>
          <h1>Manejar Sectores</h1>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_sectores.php<?php if($id != ''){ echo '?id='.$id; }?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre.focus();   
    alert('No has escrito el nombre del sector'); 
    return false; //devolvemos el foco
  }
  
  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del Sector</label>
                    <input type="text" class="form-control" name="nombre" id="firstName" value="<?php echo @$datos['nombre']; ?>">                  
                  </div>
                </div>
                
                       <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Provincia a cual pertenece</label>
                                      <?php
// Consultar la base de datos
$datos_provinciaid = $datos['provincia_id'];
$consulta_mysql2='select * from provincias where id_provincia = "'.$datos_provinciaid.'"';
$resultado_consulta_mysql2= @mysql_query($consulta_mysql2) or die(mysql_error());
$datos3 = mysql_fetch_assoc($resultado_consulta_mysql2);
 ?>
  <select class="form-control margin-bottom-15" name="provincias" id="singleSelect">
   <option selected value='<?php echo @$datos['provincia_id']; ?>'><?php echo @$datos3['nombre']; ?></option>
  <?php

 $consulta_mysql='select * from provincias order by nombre asc';
$resultado_consulta_mysql= @mysql_query($consulta_mysql) or die(mysql_error());
 while($lista=mysql_fetch_assoc($resultado_consulta_mysql))
   echo "<option value='".$lista["id_provincia"]."'>".utf8_encode($lista["nombre"])."</option>"; 
  ?>
</select>                 
                  </div>
                </div>



              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" name="subir" class="btn btn-primary">Aceptar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
          </div>
          <div class="modal-footer">
            <a href="sign-in.html" class="btn btn-primary">Yes</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="templatemo-footer">
      <div class="templatemo-copyright">
        <p>Copyright &copy; 2016 Promunika</p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>