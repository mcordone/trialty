<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');

$id = '';

$consulta2 = "SELECT * FROM configuracion WHERE id = '1'";
$resultado2= @mysql_query($consulta2) or die(mysql_error());
$datos2 = mysql_fetch_assoc($resultado2);

if(@$_GET['id'] != '')
{
@$id = $_GET['id'];
$consulta = "SELECT * FROM propiedades WHERE propiedades_id = $id";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);
$ruta = "../images/propiedades/" . $datos['imagen'];



@$provincia_id = $datos['provincia'];
@$sector_id = $datos['sector'];


$consulta3 = "SELECT * FROM lista_provincias WHERE id = '$provincia_id'";
$resultado3= @mysql_query($consulta3) or die(mysql_error());
$datos3 = mysql_fetch_assoc($resultado3);

$idprovincia = @$datos3['id'];
$nombreprovincia = @$datos3['opcion'];

$consulta4 = "SELECT * FROM lista_sectores WHERE id = '$sector_id'";
$resultado4= @mysql_query($consulta4) or die(mysql_error());
$datos4 = mysql_fetch_assoc($resultado4);


}

 

?>

         <?php include('menu.php'); ?>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tablero.php">Admin Panel</a></li>
            <li><a href="propiedades.php">propiedades</a></li>
            <li class="active">Subir propiedades</li>
          </ol>
          <h1>propiedades</h1>
          <p class="margin-bottom-15">Aqui se suben los propiedades</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" action="subir_propiedades.php<?php if(@$id != '') { echo "?id=".$_GET['id']; } ?>" id="templatemo-preferences-form" method="POST" enctype="multipart/form-data" onsubmit="return validarForm(this);">
              
            

<script type="text/javascript">
function validarForm(formulario) {

  if(formulario.nombre_propiedad.value.length==0) { //comprueba que no est? vac?o
    formulario.nombre_propiedad.focus();   
    alert('No has escrito el Nombre del propiedad'); 
    return false; //devolvemos el foco
  }
  
      if(formulario.moneda.value.length==0) { //comprueba que no est? vac?o
    formulario.moneda.focus();   
    alert('No has colocado el moneda'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.precio.value.length==0) { //comprueba que no est? vac?o
    formulario.precio.focus();   
    alert('No has colocado el precio'); 
    return false; //devolvemos el foco
  }
  
  
  if(formulario.descripcion.value.length==0) { //comprueba que no est? vac?o
    formulario.descripcion.focus();   
    alert('No has escrito la descripcion'); 
    return false; //devolvemos el foco
  }
  
    if(formulario.tipo.value.length==0) { //comprueba que no est? vac?o
    formulario.tipo.focus();   
    alert('No has seleccionado el tipo de propiedad'); 
    return false; //devolvemos el foco
  }
  
        <?php
                  	if(@$datos['imagen'] == '')
					{
				?>	  
    if(formulario.imagen.value.length==0) { //comprueba que no est? vac?o
    formulario.imagen.focus();   
    alert('No has seleccionado la imagen de la propiedad'); 
    return false; //devolvemos el foco
  }
  <?php } ?>
  
 }



</script>  
              
              
                <div class="row">
                  <div class="col-md-4 margin-bottom-15">
                    <label for="firstName" class="control-label">Nombre del propiedad</label>
                    <input type="text" class="form-control" name="nombre_propiedad" id="firstName" value="<?php echo @$datos['nombre_propiedad']; ?>">                  
                  </div>
                   <div class="col-md-2 margin-bottom-15">
                    <label for="lastName" class="control-label">Moneda</label>
                                <select class="form-control margin-bottom-15" name="moneda" id="singleSelect"> 
                                 
                                  <option value="<?php echo @$datos['moneda']; ?>"><?php echo @$datos['moneda']; ?></option>
                    <option value="rd">DOP$</option>
                    <option value="us">USD$</option>
                    <option value="eu">EUR$</option>
         
                  </select>              
                  </div>
                  <div class="col-md-2 margin-bottom-15">
                    <label for="lastName" class="control-label">Precio</label>
                    <input type="text" class="form-control" id="lastName" name="precio" value="<?php if(@$datos['moneda'] == 'rd') { echo @$datos['precio_rd']; } else { echo @$datos['precio_us']; } ?>">                 
                  </div>
                  <!--
                   <div class="col-md-4 margin-bottom-15">
                    <label for="lastName" class="control-label">Codigo</label>
                    <input type="text" class="form-control" id="lastName" name="codigo" value="<?php echo @$datos['codigo']; ?>">                 
                  </div>-->
                </div>
  
                <div class="row">
                  <div class="col-md-3 margin-bottom-15">
                    <label for="password_1">Cantidad de habitaciones</label>
                           <select class="form-control margin-bottom-15" name="cantidad_habitacion" id="singleSelect">
                  <?php
                  	if(@$datos['parqueo'] != '')
					{
					echo '<option value="'.$datos['cantidad_habitacion'].'">'.$datos['cantidad_habitacion'].'</option>'; 
					}
					else
					{
					echo '<option value="">Seleccionar No.</option>'; 
					}	
					  ?>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                     <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
        <option value="+10">M&aacute;s de 10</option>
      
                  </select>
                  </div>
                  
                      <div class="col-md-3 margin-bottom-15">
                    <label for="lastName" class="control-label">Ba&ntilde;os</label>
                                    <select class="form-control margin-bottom-15" name="bano" id="singleSelect">
                  <?php
                  	if(@$datos['bano'] != '')
					{
					echo '<option value="'.$datos['bano'].'">'.$datos['bano'].'</option>'; 
					}
					else
					{
					echo '<option value="">Seleccionar ba&ntilde;os</option>'; 
					}	
					  ?>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>                    
                    <option value="5">5</option>
                    <option value="5.5">5.5</option>
                    <option value="6">6</option>
                    <option value="6.5">6.5</option>
                    <option value="7">7</option>
                    <option value="7.5">7.5</option>
                    <option value="8">8</option>
                    <option value="8.5">8.5</option>
                    <option value="9">9</option>
                    <option value="9.5">9.5</option>
                    <option value="10">10</option>
                    <option value="+10">M&aacute;s de 10</option>
        
      
                  </select>               
                  </div>
                  
                             <div class="col-md-3 margin-bottom-15">
                    <label for="password_1">Parqueos</label>
                           <select class="form-control margin-bottom-15" name="parqueo" id="singleSelect">
                  <?php
                  	if(@$datos['parqueo'] != '')
					{
					echo '<option value="'.$datos['parqueo'].'">'.$datos['parqueo'].'</option>'; 
					}
					else
					{
					echo '<option value="">Seleccionar parqueo</option>'; 
					}	
					  ?>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                     <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
        <option value="+10">M&aacute;s de 10</option>
      
                  </select>
                  </div>
                  
                  
                         <div class="col-md-3 margin-bottom-15">
                    <label for="lastName" class="control-label">Metraje</label>
                    <input type="text" class="form-control" id="lastName" name="metraje" value="<?php echo @$datos['metraje']; ?>">                 
                  </div>
                  
                  
                  
                </div>
                
                

 <div class="row">
                  <div class="col-md-1 margin-bottom-15">
                    <label for="password_1">Jardin</label><br>
                       <!--    <select class="form-control margin-bottom-15" name="jardin" id="singleSelect"> -->
                  <?php
                  	if(@$datos['jardin'] == '1')
					{
					echo '<input type="checkbox" name="jardin" value="1" checked>'; 
					}
					else
					{
					echo '<input type="checkbox" name="jardin" value="1">'; 
					}	
					  ?>

                  </div>
                  
                      <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Patio</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                  	if(@$datos['patio'] == '1')
					{
					echo ' <input type="checkbox" name="patio" value="1" checked>'; 
					}
					else
					{
					echo '<input type="checkbox" name="patio" value="1">'; 
					}	
         
					  ?>
  <!--  <option value="0">No</option>
                    <option value="1">Si</option> 

                      

                  
        
      
                  </select>  -->             
                  </div>


                     <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Balcon</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['balcon'] == '1')
          {
          echo ' <input type="checkbox" name="balcon" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="balcon" value="1">'; 
          } 
         
            ?>
  <!--  <option value="0">No</option>
                    <option value="1">Si</option> 

                      

                  
        
      
                  </select>  -->             
                  </div>



                                       <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Terraza</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['terraza'] == '1')
          {
          echo ' <input type="checkbox" name="terraza" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="terraza" value="1">'; 
          } 
         
            ?>
  <!--  <option value="0">No</option>
                    <option value="1">Si</option> 

                      

                  
        
      
                  </select>  -->             
                  </div>


                                                         <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Piscina</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['piscina'] == '1')
          {
          echo ' <input type="checkbox" name="piscina" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="piscina" value="1">'; 
          } 
         
            ?>
          
                  </div>




          
                                                                  <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Area Social</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['area_social'] == '1')
          {
          echo ' <input type="checkbox" name="area_social" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="area_social" value="1">'; 
          } 
         
            ?>
          
                  </div>




                                                                    <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Gym</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['gym'] == '1')
          {
          echo ' <input type="checkbox" name="gym" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="gym" value="1">'; 
          } 
         
            ?>
          
                  </div>   





                                                                        <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Estudio</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['estudio'] == '1')
          {
          echo ' <input type="checkbox" name="estudio" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="estudio" value="1">'; 
          } 
         
            ?>
          
                  </div>




                                                                        <div class="col-md-1 margin-bottom-15">
                    <label for="lastName" class="control-label">Family</label><br>
                                  <!--  <select class="form-control margin-bottom-15" name="patio" id="singleSelect"> -->
                  <?php
                 
                    if(@$datos['estudio'] == '1')
          {
          echo ' <input type="checkbox" name="family" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="family" value="1">'; 
          } 
         
            ?>
          
                  </div>




                  
                  
                  
                </div>
                
                

      




 <div class="row">
                  
                             <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">Piso</label>
                           <select class="form-control margin-bottom-15" name="piso" id="singleSelect">
                  <?php
                    if(@$datos['piso'] != '')
          {
          echo '<option value="'.$datos['piso'].'">'.$datos['piso'].'</option>'; 
          }
          else
          {
          echo '<option value="">Seleccionar piso</option>'; 
          } 
            ?>
                    <option value="Marmol">Marmol</option>
                    <option value="Granito">Granito</option>
                    <option value="Ceramica">Ceramica</option>
                    <option value="ceramica_importada">Ceramica Importada</option>
 
      
                  </select>
                  </div>
                  
                  
                         <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Nivel</label>
                                  <select class="form-control margin-bottom-15" name="nivel" id="singleSelect">
                  <?php
                    if(@$datos['parqueo'] != '')
          {
          echo '<option value="'.$datos['nivel'].'">'.$datos['nivel'].'</option>'; 
          }
          else
          {
          echo '<option value="">Seleccionar nivel</option>'; 
          } 
            ?>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="12">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                     <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
        <option value="+20">M&aacute;s de 20</option>
      
                  </select>              
                  </div>



</div>

                
                
                
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label for="notes">Descripci&oacute;n</label>
                  <textarea class="form-control" rows="8" name="descripcion" id="notes"><?php echo @$datos['descripcion']; ?></textarea>
                </div>
              </div>

              
                     <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="notes">Provincia</label>
           <?php if($datos['provincia'] == '') 
		       {

        echo "<select class='form-control margin-bottom-15' name='provincias' id='paises' onChange='cargaContenido(this.id)'>";

          }
		   

function generaPaises()
{
	conectar();
	$consulta=mysql_query("SELECT id, opcion FROM lista_provincias");
	
		$consulta2=mysql_query("SELECT provincia FROM propiedades WHERE propiedades_id='".$_GET['id']."'");
			while($registro2=mysql_fetch_row($consulta2))
	{
	$id_provi = $registro2[0];
	$consulta3=mysql_query("SELECT id, opcion FROM lista_provincias WHERE id='$id_provi'");
	
		// Voy imprimiendo el primer select compuesto por los paises
	echo "<select class='form-control margin-bottom-15' name='provincias' id='paises' onChange='cargaContenido(this.id)'>";
	while($registro3=mysql_fetch_row($consulta3))
	{
		echo "<option value='".$registro3[0]."'>".$registro3[1]."</option>";
	}
	
		
		
		
		
	}
		
		
	desconectar();


	
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>

        
				<div id="demoIzq">
				<label for="singleSelect">Provincias</label>
				
                
                
				<?php generaPaises(); ?></div>


                <div class="col-md-2 margin-bottom-15">
                    <label for="password_1">Slideshow</label><br>
                       <!--    <select class="form-control margin-bottom-15" name="jardin" id="singleSelect"> -->
                  <?php
                    if(@$datos['slideshow'] == '1')
          {
          echo '<input type="checkbox" name="slideshow" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="slideshow" value="1">'; 
          } 
            ?>

                  </div>

                            <div class="col-md-2 margin-bottom-15">
                    <label for="password_1">Portada</label><br>
                       <!--    <select class="form-control margin-bottom-15" name="jardin" id="singleSelect"> -->
                  <?php
                    if(@$datos['portada'] == '1')
          {
          echo '<input type="checkbox" name="portada" value="1" checked>'; 
          }
          else
          {
          echo '<input type="checkbox" name="portada" value="1">'; 
          } 
            ?>

                  </div>
                  

                  </div>
                  
                     <div class="col-md-6 margin-bottom-15">       
                  <label for="singleSelect">Sectores</label>
                  
              <div id="demoDer">
					<select class='form-control margin-bottom-15' disabled="disabled" name="sectores" id="estados">
                  <?php 
				  
				  if(@$datos['sector'] != '')

	{ echo "<option value='".@$datos4['id']."'>".@$datos4['opcion']."</option>";

					}
				    ?>
						<option value="0">Selecciona opci&oacute;n...</option>
					</select>
			</div>
                  
                  
                  
                   </div>
              

              
          
              <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Selecciona tipo de propiedad</label>
                  <select class="form-control margin-bottom-15" name="tipo" id="singleSelect">
                  <?php
                  	if(@$datos['tipo'] != '')
					{
					echo '<option value="'.$datos['tipo'].'">'.$datos['tipo'].'</option>'; 
					}
					else
					{
					echo '<option value="">Seleccionar tipo de propiedad</option>'; 

      		}	

					  ?>


                    <option value="casas">casas</option>
                    <option value="apartamentos">apartamentos</option>
                    <option value="proyectos">Proyectos Inmobiliarios</option>
                    <option value="fincas">fincas</option>
                    <option value="solares">Solares</option>
                    <option value="nave_industrial">Nave Industrial</option>
                    <option value="pent_houses">Pent Houses</option>
                    <option value="negocios">Negocios</option>
      
                  </select>
                  </div>
                  
                          <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Selecciona tipo de compra</label>
                  <select class="form-control margin-bottom-15" name="tipo_compra" id="singleSelect">
                  <?php
                  	if(@$datos['tipo_compra'] != '')
					{
					echo '<option value="'.$datos['tipo_compra'].'">'.$datos['tipo_compra'].'</option>'; 
					}
					else
					{
					echo '<option value="">Todo</option>'; 
					}	
					  ?>
                
                    <option value="venta">Venta</option>
                    <option value="alquiler">Alquiler</option>
                    <option value="venta_alquiler">Venta y alquiler</option>
                    <option value="alquiler_amueblado">Alquiler Amueblado</option>
                    <option value="alquiler_lineablanca">Alquiler linea blanca</option>


                  </select>
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
 
                  <input type="hidden" name="moneda_us" value="<?php echo $datos2['moneda_us']; ?>"> 
                  <input type="hidden" name="moneda_eur" value="<?php echo $datos2['moneda_eur']; ?>"> 
                  <input type="hidden" name="sector" value="<?php echo $datos['sector']; ?>"> 
                  <input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario']; ?>"> 
                  <p class="help-block">Subir imagen aqui.</p>  
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
        <p>Copyright &copy;</p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>