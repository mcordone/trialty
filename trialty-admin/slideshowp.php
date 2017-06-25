<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
$consulta = "SELECT * FROM slideshowp";
$resultado= @mysql_query($consulta) or die(mysql_error());

$datatables = 1;
$seccion_admin = 'slideshow';
?>


       <?php include('menu.php'); ?>
      
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Manejar Anuncios Cuadrados</li>
          </ol>
          <h1>Manejar Anuncios Cuadrados</h1>
          <p>Tama&ntilde;o 370px X 326px, 72dpi</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="form_slideshowp.php">Crear Nuevo Anuncio<!-- <span class="badge">42</span>--></a></li>
   
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
      
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Anuncios</h4>
                <div class="paging"></div>
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                     
                      <th>Nombre</th>
                      <th>Secci&oacute;n</th> 
                      <th>Publicado</th>
                        <th>Usuario</th> 
                       <th></th>                  
                        <th>Modificar</th>
                        
                              </thead>
                  <tbody>
                 <?php    
while ($datos = @mysql_fetch_assoc($resultado) ){

	$ruta = "../images/slideshowp/" . $datos['imagen'];
			if($datos['publicado'] == "1")
	{ $publicacion = 'Si'; } else { $publicacion = 'No';}

                   echo " <tr>
                      <td>".$datos['nombre_slideshow']."</td> 
					   <td>".$datos['seccion']."</td>   
					   <td>".$publicacion."</td>             
					    <td>Admin</td>
						
						
						  <td><img src='$ruta' width='100' /></td>
                     ".'
                         <td>
                        <!-- Split button -->
                      <div class="btn-group">';
					  ?>
                                    <button type="button" style="width:150px;" onclick="window.location.href='form_slideshowp.php?id=<?php echo $datos['slideshow_id']; ?>'" class="btn btn-info">Editar Anuncio</button>
                         <br>
                         
                         <a href="javascript:;" style="width:150px;" class="btn btn-info" onclick="aviso('borrar.php?id=<?php echo $datos['slideshow_id']; ?>&url=<?php echo $datos['imagen']; ?>&seccion=slideshowp'); return false;">Eliminar</a>

                          <br>

       <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['slideshow_id']; ?>&publicado=1&seccion=slideshowp'" class="btn btn-info">Publicar</button><br>
                  <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['slideshow_id']; ?>&publicado=0&seccion=slideshowp&nombre=<?php echo $datos['nombre_slideshow']; ?>'" class="btn btn-info">Despublicar</button>  
                          <?php echo '              
                        </div>
		
                      </td></tr>';
	

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