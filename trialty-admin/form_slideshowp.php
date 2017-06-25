<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
$id = '';

if(@$_GET['id'] != '')
{
@$id = $_GET['id'];

//vamos a crear nuestra consulta SQL
$consulta = "SELECT * FROM slideshowp WHERE slideshow_id = $id";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);
$ruta = "../images/slideshowp/" . $datos['imagen'];
}

?>


         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
          <li><a href="tablero.php">Admin Panel</a></li>
            <li><a href="slideshowp.php">Lista de Anuncios</a></li>
            <li class="active">Subir Anuncio Cuadrado</li>
          </ol>
          <h1>Anuncios Cuadrados</h1>
          <p class="margin-bottom-15">Aqui se sube el Anuncio</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_slideshowp.php<?php if(@$id != '') { echo "?id=".$_GET['id']; } ?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
              
              
                    


<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre_slideshow.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre_slideshow.focus();   
    alert('No has escrito el Nombre del Anuncio'); 
    return false; //devolvemos el foco
  }
  if(formulario.seccion.value.length==0) { //comprueba que no est? vac?o
    formulario.seccion.focus();   
    alert('No has escrito la Seccion'); 
    return false; //devolvemos el foco
  }

    if(formulario.posicion.value.length==0) { //comprueba que no est? vac?o
    formulario.posicion.focus();   
    alert('No has escrito la Posicion'); 
    return false; //devolvemos el foco
  }
  
  
   <?php
                  	if(@$datos['imagen'] == '')
					{
				?>	  
    if(formulario.imagen.value.length==0) { //comprueba que no est? vac?o
    formulario.imagen.focus();   
    alert('No has seleccionado la imagen de la promocion'); 
    return false; //devolvemos el foco
  }
  <?php } ?>
  
    if(formulario.url.value.length==0) { //comprueba que no est? vac?o
    formulario.url.focus();   
    alert('No has escrito la Url'); 
    return false; //devolvemos el foco
  }

  
 }



</script>        
              
              
              
              
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del Slideshow</label>
                    <input type="text" class="form-control" name="nombre_slideshow" id="firstName" value="<?php echo @$datos['nombre_slideshow']; ?>">                  
                  </div>


                           <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Selecciona Posicion</label>
                  <select class="form-control margin-bottom-15" name="posicion" id="singleSelect">
                  <?php
                    if(@$datos['seccion'] != '')
          {
          echo ' <option value="'.$datos['posicion'].'">'.$datos['posicion'].'</option>'; 
          } 
            ?>
                   
                    <option value="1">1</option>
                     <option value="2">2</option>
 
                    
                  </select>
                   </div>
                 
                </div>
        


              <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Selecciona Seccion</label>
                  <select class="form-control margin-bottom-15" name="seccion" id="singleSelect">
                  <?php
                  	if(@$datos['seccion'] != '')
					{
					echo ' <option value="'.$datos['seccion'].'">'.$datos['seccion'].'</option>'; 
					}	
					  ?>
            
                    <option value="detalle">Seccion Detalle</option>
                     <option value="propiedades">Seccion Propiedades</option>
                
                    
                  </select>
                </div>

<div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Url del Slideshow</label>
                    <input type="text" class="form-control" name="url" id="firstName" value="<?php echo @$datos['url']; ?>">                  
                  </div>

</div>

 <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del Slideshow</label>
                    <input type="text" class="form-control" name="nombre_slideshow" id="firstName" value="<?php echo @$datos['nombre_slideshow']; ?>">                  
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