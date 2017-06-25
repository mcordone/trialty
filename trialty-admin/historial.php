<?php

require('../conexion/db.php');
$consulta = "SELECT * FROM historial";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datatables = 1;
?>

       <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Actividades</li>
          </ol>
          <h1>Ultimas Actividades</h1>
         

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
              <!--  <li class="active"><a href="form_usuarios.php">Crear Nuevo Usuario</a></li> -->

              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
       
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Actividades</h4>
                 <div class="paging"></div>
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                      
                      <th>Actividad</th>                
                      <th>Usuario</th>
                      <th>Fecha</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                                <?php    

while ($datos = @mysql_fetch_assoc($resultado) ){


                   echo " <tr>
                     
                      <td>".$datos['actividad']."</td>
					   <td>".$datos['usuario']."</td>				
                       <td>".$datos['fecha']."</td>
                     ".'</tr>';
	

}
   
   ?>   
                  
                
                  </tbody>
                </table>
                 <div class="paging"></div>
              </div>
           
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
<?php include('footer.php'); ?>
  </body>
</html>