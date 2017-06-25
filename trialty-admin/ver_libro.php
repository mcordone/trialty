<?php
include("controlsesion.php");
if (!isset($_GET["nombre"]) || !isset($_GET["id"])){
    header("location:propiedades.php");	 
}
else
{

//include "book/db.php";
include "db_book.php";
$files = get_imgs();
$datatables = 1;
?>

       <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
               <li><a href="tablero.php">Admin Panel</a></li>
             <li><a href="propiedades.php">Propiedades</a></li>
            <li class="active">Modificar Fotos</li>
          </ol>
          <h1>Modificar fotos de Propiedad <?php echo $_GET['nombre']; ?></h1>
         

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="./form_book.php?id=<?php echo $_GET['id']; ?>&nombre=<?php echo $_GET['nombre']; ?>">Agregar foto<!-- <span class="badge">42</span>--></a></li>
             <!--   <li><a href="#">Active Users <span class="badge">107</span></a></li>
                <li><a href="#">Expired Users <span class="badge">3</span></a></li>
                -->
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
       
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Fotos de Propiedad <?php echo $_GET['nombre']; ?></h4>
                 <div class="paging"></div>
                 

                        
                  
	<?php if(count($files)>0):?>
			                      
                <table class="table table-striped table-hover table-bordered" id="example-table">
                  <thead>
                    <tr>
                      
                      <th>Pagina</th>
                      <th>Descargar</th>
                      <th>Eliminar</th>
                      
                    </tr>
                  </thead>
                  <tbody>
			<?php foreach($files as $f):?>
				<tr>
				<td><img src="<?php echo $f->folder.$f->src;?>" width="100" /></td>
				<td><button type="button" onclick="window.location.href='./download.php?id=<?php echo $f->id; ?>&seccion=propiedades'" class="btn btn-info">Descargar</button></td>
				<td><button type="button" onclick="window.location.href='./delete.php?id=<?php echo $f->id; ?>&nombre=<?php echo $_GET['nombre']; ?>&seccion=propiedades'" class="btn btn-info">Eliminar</button></td>
				</tr>
			<?php endforeach;?>
			  
                  </tbody>
                </table>
		<?php else:?>
			<h4 style="font-weight:bold;">No hay imagenes!</h4>
		<?php endif; ?>                
                  
                                   
              
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

<?php } ?>