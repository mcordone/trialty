<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');

$id = '';

if(@$_GET['id'] != '')
{
@$id = $_GET['id'];
$consulta = "SELECT * FROM productos WHERE productos_id = $id";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);
$ruta = "../images/productos/" . $datos['imagen'];

}

?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li class="active">Subir Productos</li>
          </ol>
          <h1>Productos</h1>
          <p class="margin-bottom-15">Aqui se suben los productos</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_productos.php<?php if(@$id != '') { echo "?id=".$_GET['id']; } ?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre_producto.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre_producto.focus();   
    alert('No has escrito el Nombre del producto'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.precio.value.length==0) { //comprueba que no est? vac?o
    formulario.precio.focus();   
    alert('No has colocado el precio'); 
    return false; //devolvemos el foco
  }
  
      if(formulario.precio_anterior.value.length==0) { //comprueba que no est? vac?o
    formulario.precio_anterior.focus();   
    alert('No has colocado el precio anterior'); 
    return false; //devolvemos el foco
  }
  
  if(formulario.descripcion.value.length==0) { //comprueba que no est? vac?o
    formulario.descripcion.focus();   
    alert('No has escrito la descripcion'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.seccion.value.length==0) { //comprueba que no est? vac?o
    formulario.seccion.focus();   
    alert('No has seleccionado la seccion'); 
    return false; //devolvemos el foco
  }
  
        <?php
                  	if(@$datos['imagen'] == '')
					{
				?>	  
    if(formulario.imagen.value.length==0) { //comprueba que no est? vac?o
    formulario.imagen.focus();   
    alert('No has seleccionado la imagen del producto'); 
    return false; //devolvemos el foco
  }
  <?php } ?>
  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del Producto</label>
                    <input type="text" class="form-control" name="nombre_producto" id="firstName" value="<?php echo @$datos['nombre_producto']; ?>">                  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Precio</label>
                    <input type="text" class="form-control" id="lastName" name="precio" value="<?php echo @$datos['precio']; ?>">                 
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">Precio Anterior</label>
                    <input type="text" class="form-control" id="password_1" name="precio_anterior" value="<?php echo @$datos['precio_anterior']; ?>" placeholder="<?php
					if(@$datos['precio_anterior'] != '')
					{
					echo @$datos['precio_anterior']; 
					}
					else
					echo 'precio anterior';
					  ?>">  
                  </div>
        
                </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label for="notes">Descripci&oacute;n</label>
                  <textarea class="form-control" rows="3" name="descripcion" id="notes"><?php echo @$datos['descripcion']; ?></textarea>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Selecciona Seccion</label>
                  <select class="form-control margin-bottom-15" name="seccion" id="singleSelect">
                  <?php
                  	if(@$datos['seccion'] != '')
					{
					echo '<option value="'.$datos['seccion'].'">'.$datos['seccion'].'</option>'; 
					}
					else
					{
					echo '<option value="">Seleccionar Secci&oacute;n</option>'; 
					}	
					  ?>
                    <option value="productosbravo">Productos Bravo</option>
                    <option value="dietasespeciales">Dietas Especiales</option>
                    <option value="artesanal">Artesanal</option>
                    <option value="bodega">Bodega</option>
                    <option value="mubravo">Mu Bravo</option>
                    <option value="bistro">Bistro by Bravo</option>
                  </select>
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