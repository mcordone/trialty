<?php
include("controlsesion.php");
require('../conexion/db.php');
$consulta = "SELECT * FROM lista_provincias order by opcion asc";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datatables = 1;
$seccion_admin = 'provincias';
?>

       <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Provincias</li>
          </ol>
          <h1>Manejar Provincias</h1>
         

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="form_provincias.php">Crear Nueva Provincia</a></li>

              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
       
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Provincias</h4>
                 <div class="paging"></div>
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                                     
                      <th>Nombre Provincia</th>
                       <th></th>
 <th></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                                <?php    

while ($datos = @mysql_fetch_assoc($resultado) ){


                   echo " <tr>

					   <td>".utf8_encode($datos['opcion'])."</td>				
                     ".
                    
              
                           '
                       <td>
                        <!-- Split button -->
                      <div class="btn-group">';
					  ?>
                             <button type="button" style="width:150px;" onclick="window.location.href='form_provincias.php?id=<?php echo $datos['id']; ?>'" class="btn btn-info">Editar Provincia</button>
                         <br>
                         
                         <a href="javascript:;" style="width:150px;" class="btn btn-info" onclick="aviso('borrar.php?id=<?php echo $datos['id']; ?>&seccion=provincias'); return false;">Eliminar</a>
                         
                                      <br>
                         
                         <a style="width:150px;" class="btn btn-info" href="sectores.php?id=<?php echo $datos['id']; ?>">Ver Sectores</a>           
                         
                         
                         
                          <?php echo '              
                        </div>
		
                      </td>
                     
           
                    </tr>';
	

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