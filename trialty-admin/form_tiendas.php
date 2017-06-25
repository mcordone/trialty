<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');

$id = '';

if(@$_GET['id'] != '')
{
@$id = $_GET['id'];
$consulta = "SELECT * FROM tiendas WHERE tiendas_id = $id";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);
$ruta = "../images/tiendas/" . $datos['imagen'];

}

?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li><a href="tiendas.php">Supermercados</a></li>
            <li class="active">Subir Supermercados</li>
          </ol>
          <h1>Productos</h1>
          <p class="margin-bottom-15">Aqui se suben los Supermercados</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_tiendas.php<?php if(@$id != '') { echo "?id=".$_GET['id']; } ?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre_tienda.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre_tienda.focus();   
    alert('No has escrito el Nombre del Supermercado'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.telefono.value.length==0) { //comprueba que no est? vac?o
    formulario.telefono.focus();   
    alert('No has colocado el telefono'); 
    return false; //devolvemos el foco
  }
  
      if(formulario.apertura.value.length==0) { //comprueba que no est? vac?o
    formulario.apertura.focus();   
    alert('No has escrito el horario de apertura'); 
    return false; //devolvemos el foco
  }
  
  if(formulario.direccion.value.length==0) { //comprueba que no est? vac?o
    formulario.direccion.focus();   
    alert('No has escrito la direccion'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.mapa.value.length==0) { //comprueba que no est? vac?o
    formulario.mapa.focus();   
    alert('No has escrito colocado el mapa'); 
    return false; //devolvemos el foco
  }
  
  
        <?php
                  	if(@$datos['imagen'] == '')
					{
				?>	  
    if(formulario.imagen.value.length==0) { //comprueba que no est? vac?o
    formulario.imagen.focus();   
    alert('No has seleccionado la imagen del supermercado'); 
    return false; //devolvemos el foco
  }
  <?php } ?>
  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del Supermercado</label>
                    <input type="text" class="form-control" name="nombre_tienda" id="firstName" value="<?php echo @$datos['nombre_tienda']; ?>">                  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Telefono</label>
                    <input type="text" class="form-control" id="lastName" name="telefono" value="<?php echo @$datos['telefono']; ?>">                 
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">Apertura</label>
                    <input type="text" class="form-control" id="password_1" name="apertura" value="<?php echo @$datos['apertura']; ?>" placeholder="<?php
					if(@$datos['apertura'] != '')
					{
					echo @$datos['apertura']; 
					}
					else
					echo 'apertura';
					  ?>">  
                  </div>
        
                </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label for="notes">Direcci&oacute;n</label>
                  <textarea class="form-control" rows="3" name="direccion" id="notes"><?php echo @$datos['direccion']; ?></textarea>
                </div>
              </div>
              
                  <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label for="notes">Mapa</label>
                  <textarea class="form-control" rows="3" name="mapa" id="notes"><?php echo @$datos['mapa']; ?></textarea>
                </div>
              </div>
          
                   
              <div class="row">
                <div class="col-md-12 margin-bottom-30">
              <?php  
			     	if(@$datos['imagen'] != '')
					{
					 echo"<img src='".@$ruta."' width='100' /><br><br>";
					}
			  
			  
            ?>
                
                  <label for="exampleInputFile">Subir imagen</label>
                  
                <input type="file" id="exampleInputFile" name="imagen"> 
 
                  
                  <p class="help-block">Subir imagen aqui.</p>  
                </div>                  
              </div>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" name="subir" class="btn btn-primary">Subir</button>
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