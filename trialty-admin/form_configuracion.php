<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');

$consulta = "SELECT * FROM configuracion where id='1'";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);


?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Configuraci&oacute;n</li>
          </ol>
          <h1>Configuraci&oacute;n General</h1>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_configuracion.php" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.facebook.value.length==0) { //comprueba que no est? vac?o
    formulario.facebook.focus();   
    alert('No has escrito la Url de Facebook'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.instagram.length==0) { //comprueba que no est? vac?o
    formulario.instagram.focus();   
    alert('No has escrito la Url de Instagram'); 
    return false; //devolvemos el foco
  }
  
      if(formulario.twitter.value.length==0) { //comprueba que no est? vac?o
    formulario.twitter.focus();   
    alert('No has escrito la Url de Twitter'); 
    return false; //devolvemos el foco
  }
  
  
      if(formulario.moneda.value.length==0) { //comprueba que no est? vac?o
    formulario.moneda.focus();   
    alert('No has escrito la moneda'); 
    return false; //devolvemos el foco
  }
  

  
  
        if(formulario.trabaja.value.length==0) { //comprueba que no est? vac?o
    formulario.trabaja.focus();   
    alert('No has escrito el correo de Trabaja con Nosotros'); 
    return false; //devolvemos el foco
  }
  
  
  if(formulario.contacto.value.length==0) { //comprueba que no est? vac?o
    formulario.contacto.focus();   
    alert('No has escrito el correo de contacto'); 
    return false; //devolvemos el foco
  }
  

  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-3 margin-bottom-15">
                    <label for="firstName" class="control-label">Url Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="firstName" value="<?php echo @$datos['facebook']; ?>">                  
                  </div>
                  <div class="col-md-3 margin-bottom-15">
                    <label for="lastName" class="control-label">Url Instagram</label>
                    <input type="text" class="form-control" id="lastName" name="instagram" value="<?php echo @$datos['instagram']; ?>">                 
                  </div>
                    <div class="col-md-3 margin-bottom-15">
                    <label for="firstName" class="control-label">Url Pinterest</label>
                    <input type="text" class="form-control" name="pinterest" id="firstName" value="<?php echo @$datos['pinterest']; ?>">                  
                  </div>
                    <div class="col-md-3 margin-bottom-15">
                    <label for="firstName" class="control-label">Url Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" id="firstName" value="<?php echo @$datos['linkedin']; ?>">                  
                  </div>


                </div>

                   <div class="row">
                
                  <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Url Youtube</label>
                    <input type="text" class="form-control" id="lastName" name="youtube" value="<?php echo @$datos['youtube']; ?>">                 
                  </div>

                       <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Url Twitter</label>
                    <input type="text" class="form-control" id="lastName" name="twitter" value="<?php echo @$datos['twitter']; ?>">                 
                  </div>

                   <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Url Google +</label>
                    <input type="text" class="form-control" id="lastName" name="google" value="<?php echo @$datos['google']; ?>">                 
                  </div>

                </div>

                         <div class="row">
                  <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Correo contacto</label>
                    <input type="text" class="form-control" id="lastName" name="contacto" value="<?php echo @$datos['contacto']; ?>">                 
                  </div>
                   <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Telefono contacto</label>
                    <input type="text" class="form-control" id="lastName" name="telefono" value="<?php echo @$datos['telefono']; ?>">                 
                  </div>

                             <div class="col-md-2 margin-bottom-15">
                    <label for="lastName" class="control-label">Moneda en Dolares</label>
                    <input type="text" class="form-control" id="lastName" name="moneda_us" value="<?php echo @$datos['moneda_us']; ?>">                 
                  </div>
        
             <div class="col-md-2 margin-bottom-15">
                    <label for="lastName" class="control-label">Moneda en Euros</label>
                    <input type="text" class="form-control" id="lastName" name="moneda_eur" value="<?php echo @$datos['moneda_eur']; ?>">                 
                  </div>


              </div>
  
                <div class="row">
     

                      <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto contacto</label>
                    <textarea class="form-control" rows="8" name="texto_contacto" id="notes"><?php echo @$datos['texto_contacto']; ?></textarea>                
                  </div>

                     <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto busqueda</label>
                   <textarea class="form-control" rows="8" name="texto_busqueda" id="notes"><?php echo @$datos['texto_busqueda']; ?></textarea>                
                  </div>

                    <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto publicidad</label>
                  <textarea class="form-control" rows="8" name="texto_publicidad" id="notes"><?php echo @$datos['texto_publicidad']; ?></textarea>               
                  </div>

                  </div>


        <div class="row">
     

                      <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto Plan Personal</label>
                    <textarea class="form-control" rows="8" name="personal" id="notes"><?php echo @$datos['personal']; ?></textarea>                
                  </div>

                     <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto Plan Business</label>
                   <textarea class="form-control" rows="8" name="business" id="notes"><?php echo @$datos['business']; ?></textarea>                
                  </div>

                    <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Texto Plan Premium</label>
                  <textarea class="form-control" rows="8" name="premium" id="notes"><?php echo @$datos['premium']; ?></textarea>               
                  </div>

                  </div>


                           <div class="row">
                
                  <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Precio Plan Personal</label>
                    <input type="text" class="form-control" id="lastName" name="precio_personal" value="<?php echo @$datos['precio_personal']; ?>">                 
                  </div>

                       <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Precio Plan Business</label>
                    <input type="text" class="form-control" id="lastName" name="precio_business" value="<?php echo @$datos['precio_business']; ?>">                 
                  </div>

                   <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Precio Plan Premium</label>
                    <input type="text" class="form-control" id="lastName" name="precio_premium" value="<?php echo @$datos['precio_premium']; ?>">                 
                  </div>

                </div>



                  


              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" name="subir" class="btn btn-primary">Actualizar</button>
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