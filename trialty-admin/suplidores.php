<?php

include("controlsesion.php");

require('../conexion/db.php');
$consulta = "SELECT * FROM suplidores";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datatables = 1;
$seccion_admin = 'suplidores';
?>

       <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li class="active">Suplidores</li>
          </ol>
          <h1>Manejar Suplidores</h1>
         

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">              
                <li class="active"><a href="excel/file_upload.php">Subir nueva lista</a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
       
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Suplidores</h4>
                 <div class="paging"></div>
 
                                <?php    

while ($datos = @mysql_fetch_assoc($resultado) ){

/*
$excel = '<style> .datatable-filter-cell, .datatable-filter-line{ display:none; }</style><table border=1 class="table table-striped table-hover table-bordered" id="example-table">
<thead> <tr><th>Suplidores</th><th></th></tr></thead>'.$datos['text'];
*/


$excel = '<table border=1 class="table table-striped table-hover table-bordered" id="example-table">
<thead> <tr><th>Suplidores</th><th></th><th></th></tr></thead>'.$datos['text'];


				  echo $excel;
	

}
   
   ?>   

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