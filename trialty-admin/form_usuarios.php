<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
@$id = $_GET['id'];
$consulta = "SELECT * FROM usuarios where id='$id'";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);


?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Usuarios</li>
          </ol>
          <h1>Manejar Usuarios</h1>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_usuarios.php<?php if($id != ''){ echo '?id='.$id; }?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre.focus();   
    alert('No has escrito el nombre del usuario'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.apellido.length==0) { //comprueba que no est? vac?o
    formulario.apellido.focus();   
    alert('No has escrito el apellido del usuario'); 
    return false; //devolvemos el foco
  }
  
      if(formulario.usuario.value.length==0) { //comprueba que no est? vac?o
    formulario.usuario.focus();   
    alert('No has escrito el usuario'); 
    return false; //devolvemos el foco
  }
  
  if(formulario.password.value.length==0) { //comprueba que no est? vac?o
    formulario.password.focus();   
    alert('No has escrito password'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.correo.value.length==0) { //comprueba que no est? vac?o
    formulario.correo.focus();   
    alert('No has escrito el correo'); 
    return false; //devolvemos el foco
  }
  
  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-4 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="firstName" value="<?php echo @$datos['nombre']; ?>">                  
                  </div>
                  <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Apellido</label>
                    <input type="text" class="form-control" id="lastName" name="apellido" value="<?php echo @$datos['apellido']; ?>">                 
                  </div>

                   <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Telefono</label>
                    <input type="text" class="form-control" id="lastName" name="telefono" value="<?php echo @$datos['telefono']; ?>">                 
                  </div>

                </div>
  
                <div class="row">
            <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Usuario</label>
                    <input type="text" class="form-control" id="lastName" name="usuario" value="<?php echo @$datos['usuario']; ?>">                 
                  </div>
                  
                          <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Password</label>
                    <input type="password" class="form-control" id="lastName" name="password" value="<?php echo @$datos['password']; ?>">                 
                  </div>
        
                </div>
              <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Correo</label>
                    <input type="text" class="form-control" id="lastName" name="correo" value="<?php echo @$datos['correo']; ?>">                 
                  </div>

                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Tipo de Administrador</label>
                    <select class="form-control" name="tipo_usuario">
                      <?php if($datos['tipo_usuario'] != "")
                      {
                     echo '<option value="'.$datos['tipo_usuario'].'">'.$datos['tipo_usuario'].'</option>'; } ?>
                      <option value="administrador">Administrador</option>
                       <option value="usuario">Usuario</option> </select>              
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
                
                  <label for="exampleInputFile">Subir imagen principal</label>
                   <input type="file" id="exampleInputFile" name="imagen"> 
                  
                  <p class="help-block">Subir imagen aqui.</p>  
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
        <p></p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>