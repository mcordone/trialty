 <?php 
include("controlsesion.php");

		 include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
          <li><a href="tablero.php">Admin Panel</a></li>
            <li><a href="promociones.php">Promociones</a></li>
            <li><a href="ver_libro.php?id=<?php echo $_GET['id']; ?>&nombre=<?php echo $_GET['nombre']; ?>">Lista de Paginas</a></li>
            <li class="active">Subir Paginas del Libro <?php echo $_GET['nombre']; ?></li>
          </ol>
          <h1>Libro <?php echo $_GET['nombre']; ?></h1>
          <p class="margin-bottom-15">Aqui se sube las p&aacute;ginas</p>
          <div class="row">
            <div class="col-md-12">
             <form enctype="multipart/form-data" method="post" action="upload_book.php?id=<?php echo $_GET['id']; ?>&nombre=<?php echo $_GET['nombre']; ?>">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Subir P&aacute;gina</label>
                   <input name="image[]" required="" type="file" multiple />          
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
        <p>Copyright &copy; 2084 Your Company Name <!-- Credit: www.templatemo.com --></p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>