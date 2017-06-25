<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
$consulta = "SELECT * FROM propiedades order by propiedades_id desc";
$resultado= @mysql_query($consulta) or die(mysql_error());

$datatables = 1;
$seccion_admin = 'propiedades';
 include('menu.php'); ?>
      
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Propiedades</li>
          </ol>
          <h1>Manejar Propiedades</h1>


          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="form_propiedades.php">Crear Nuevo Propiedad</a></li>

              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">

              <div class="table-responsive">
                <h4 class="margin-bottom-15">Propiedades</h4>
                 <div class="paging"></div>
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                      
                      <th>Nombre</th>
                      <th>Descripci&oacute;n</th>
                       <th>Publicado</th>
                      <th>Usuario</th>                    
                    <th>Seccion</th> 
                        <th>Modificar</th>
     
                    </tr>
                  </thead>
                  <tbody>
                   <?php    
                  //si el resultado fue exitoso
//obtendremos los datos que ha devuelto la base de datos
//y con un ciclo recorreremos todos los resultados
while ($datos = @mysql_fetch_assoc($resultado) ){
	//ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
	$ruta = "../images/propiedades/" . $datos['imagen'];

	//ahora solamente debemos mostrar la imagen
/*	echo "<img src='$ruta' /> */
	
	if($datos['publicado'] == "1")
	{ $publicacion = 'Si'; } else { $publicacion = 'No';}
	
	                
                   echo " <tr>
                     
                      <td>".utf8_encode($datos['nombre_propiedad'])."</td>
                      <td>".utf8_encode($datos['descripcion'])."</td>
					   <td>".$publicacion."</td>
					    <th>Admin</th>		
						<td>".$datos['tipo']."</td>				 
						  <td><img src='$ruta' width='100' /></td>
                     ".
                    
                           '
                      <td>
                        <!-- Split button -->
                      <div class="btn-group">';
					  ?>
                          <button type="button" style="width:150px;" onclick="window.location.href='form_propiedades.php?id=<?php echo $datos['propiedades_id']; ?>'" class="btn btn-info">Editar Propiedad</button>
                         <br>
                         
                        
              						   <button style="width:150px;" type="button" onclick="window.location.href='ver_libro.php?id=<?php echo $datos['propiedades_id']; ?>&nombre=<?php echo $datos['nombre_propiedad']; ?>'" class="btn btn-info">Modificar Fotos</button>
                                   
<?php if($_SESSION['tipo'] == "administrador")
{ ?>
 <br>
   <a href="javascript:;" style="width:150px;" class="btn btn-info" onclick="aviso('borrar_propiedad.php?id=<?php echo $datos['propiedades_id']; ?>&url=<?php echo $datos['imagen']; ?>&nombre=<?php echo $datos['nombre_propiedad']; ?>'); return false;">Eliminar</a>
                         
                                       <br>
       <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['propiedades_id']; ?>&publicado=1&seccion=propiedades&nombre=<?php echo $datos['nombre_propiedad']; ?>'" class="btn btn-info">Publicar</button><br>
                  <button type="button" style="width:150px;" onclick="window.location.href='publicar.php?id=<?php echo $datos['propiedades_id']; ?>&publicado=0&seccion=propiedades&nombre=<?php echo $datos['nombre_propiedad']; ?>'" class="btn btn-info">Despublicar</button>                                 
                                       
            <?php } echo '              
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