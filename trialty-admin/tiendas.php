<?php
include("controlsesion.php");
require('../conexion/db.php');
$consulta = "SELECT * FROM tiendas order by tiendas_id desc";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datatables = 1;
$seccion_admin = "tiendas";

 include('menu.php'); ?>
      
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Supermercados</li>
          </ol>
          <h1>Manejar Supermercados</h1>


          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="form_tiendas.php">Crear Nuevo Supermercado</a></li>

              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">

              <div class="table-responsive">
                <h4 class="margin-bottom-15">Supermercados</h4>
                 <div class="paging"></div>
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                      
                      <th>Nombre</th>
                      <th>Direcci&oacute;n</th>
                       <th>Publicado</th>
                      <th>Telefono</th>
                       <th>Apertura</th>
                        <th>Usuario</th>   
                       <th></th>
                                      
                    
                        <th>Modificar</th>
     
                    </tr>
                  </thead>
                  <tbody>
                   <?php    
   
while ($datos = @mysql_fetch_assoc($resultado) ){
	$ruta = "../images/tiendas/" . $datos['imagen'];	
	if($datos['publicado'] == "1")
	{ $publicacion = 'Si'; } else { $publicacion = 'No';}
	
	                
                   echo " <tr>
                     
                      <td>".$datos['nombre_tienda']."</td>
                      <td>".$datos['direccion']."</td>
					  <td>".$publicacion."</td>
					   <td>".$datos['telefono']."</td>
					    <td>".$datos['apertura']."</td>
					   
					    <td>Admin</td>						 
						  <td><img src='$ruta' width='100' /></td>
                     ".
                    
                           '
                      <td>
                        <!-- Split button -->
                      <div class="btn-group">';
					  ?>
                          <button type="button" style="width:150px;" onclick="window.location.href='form_tiendas.php?id=<?php echo $datos['tiendas_id']; ?>'" class="btn btn-info">Editar Tienda</button>
                         <br>
                         
                         <a href="javascript:;" style="width:150px;" class="btn btn-info" onclick="aviso('borrar_tienda.php?id=<?php echo $datos['tiendas_id']; ?>&url=<?php echo $datos['imagen']; ?>'); return false;">Eliminar</a>

                          <br>
              						   <button style="width:150px;" type="button" onclick="window.location.href='ver_super.php?id=<?php echo $datos['tiendas_id']; ?>&nombre=<?php echo $datos['nombre_tienda']; ?>'" class="btn btn-info">Modificar Tiendas</button>
                                       <br>
       <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['tiendas_id']; ?>&publicado=1&seccion=tiendas'" class="btn btn-info">Publicar</button><br>
                  <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['tiendas_id']; ?>&publicado=0&seccion=tiendas'" class="btn btn-info">Despublicar</button>                                 
                                       
            
                          <?php echo '              
                        </div>
		
                      </td></tr>';
	

}
   
   ?>   
                  
                  
                 
                  </tbody>
                </table>
              </div>

              <div class="paging"></div>

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