<?php

require('config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());
          }


        mysql_select_db($dbbase, $con);


function generaPaises()
{
   include 'conexion/db.php';
   //conectar();
   $consulta=mysql_query("SELECT id_provincia, nombre FROM provincias");
   //desconectar();

   // Voy imprimiendo el primer select compuesto por los paises
   echo "<select name='provincia' id='provincias' onChange='cargaContenido(this.id)'>";
   echo "<option selected value='-1'>Provincia</option>";
   while($registro=mysql_fetch_row($consulta))
   {
      echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
   }
   echo "</select>";
}

//require_once('session.php'); 
require_once('conexion/tienda.php'); 




//LISTA DE PROPIEDADES
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_listado = 10;
$pageNum_listado = 0;
if (isset($_GET['pageNum_listado'])) {
  $pageNum_listado = $_GET['pageNum_listado'];
}
$startRow_listado = $pageNum_listado * $maxRows_listado;

mysql_select_db($database_tienda, $tienda);


$buscar = @$_GET['buscar'];
$codigo = @$_GET['codigo'];

$moneda = @$_GET['moneda'];
$cantidad_habitacion = @$_GET['cantidad_habitacion'];
$bano = @$_GET['bano'];
$parqueo = @$_GET['parqueo'];
$jardin = @$_GET['jardin'];
$patio = @$_GET['patio'];
$balcon = @$_GET['balcon'];
$terraza = @$_GET['terraza'];
$piscina = @$_GET['piscina'];
$piso = @$_GET['piso'];
$nivel = @$_GET['nivel'];
$provincia = @$_GET['provincia'];
$sector = @$_GET['sector'];
$tipo = @$_GET['tipo'];

$gym = @$_GET['gym'];

$tipo_compra = @$_GET['tipo_compra[]'];

$metraje = @$_GET['metraje'];

if (@$_GET['ps_price_min'] == '')
{
$precio_min = '0';
}
else
{
$precio_min = @$_GET['ps_price_min'];
}

if (@$_GET['ps_price_max'] == '')
{
$precio_max = '1000000000';
}
else
{
  $precio_max = @$_GET['ps_price_max'];
}


if (@$_GET['metraje_area_min'] == '')
{
    $metraje_min = '0';
}
else
{
$metraje_min = @$_GET['metraje_area_min'];
}

if (@$_GET['metraje_area_max'] == '')
{
$metraje_max = '1000000000';
}
else
{
  $metraje_max = @$_GET['metraje_area_max'];
 
}

$pageNum = @$_GET['pageNum_listado'];

/*
echo $metraje_min.' metraje min<br> ';
echo $metraje_max.' metraje max<br> ';

echo $precio_min.' precio min<br> ';

echo $precio_max.' precio max<br> ';
*/

/*
$fabricante1_array = array();
$sql_array2 = array();

$categoria_array = array();
$sql_array3 = array();

$nombre_cat_array = array();
$sql_array4 = array();

$todos_propiedades_array = array();
$sql_array5 = array();

$pageNum_array = array();
$sql_array6 = array();




if (ctype_alpha($fabricante1)) {
    $fabricante1_array['freedom'] = $fabricante1;
} 

if (ctype_alpha($categoria1)) {
    $categoria_array['categoria1'] = $categoria1;
} 

if (ctype_alpha($nombre_cat)) {
    $nombre_cat_array['nombre_cat'] = $nombre_cat;
} 

if (ctype_alpha($todos_propiedades)) {
    $todos_propiedades_array['todos_propiedades'] = $todos_propiedades;
} 

if (ctype_alpha($pageNum)) {
    $pageNum_array['pageNum'] = $pageNum;
} 


 



$sql_array2['fabricante'] = mysql_real_escape_string($fabricante1_array['fabricante']);


$sql_array3['id_cat'] = mysql_real_escape_string($categoria_array['id_cat']);


$sql_array4['nombre_cat'] = mysql_real_escape_string($nombre_cat_array['nombre_cat']);


$sql_array5['todos_propiedades'] = mysql_real_escape_string($todos_propiedades_array['todos_propiedades']);


$sql_array6['pageNum'] = mysql_real_escape_string($pageNum_array['pageNum']);
;

*/




if($provincia != ""){


 if($codigo == '' || $codigo == 'codigo')
{
$codigo = '';
}
else
{
    $codigo = "AND propiedades_id like '".'%'.$codigo.'%'."'";
  
}


 if($tipo_compra == '-1')
{
 $tipo_compra = '';
}
else
{


 if($tipo_compra == '')
{
 $tipo_compra = '';
}
else
{

foreach ($_GET['tipo_compra'] as $indice => $valor){
$indice2 = $indice;
}

if($indice2 == '0')
{
$tipo_compra = "AND tipo_compra ='".$tipo_compra[0]."' ";    
}

if($indice2 == '1')
{
$tipo_compra = "AND (tipo_compra ='".$tipo_compra[0]."' OR tipo_compra ='".$tipo_compra[1]."') ";    
}

if($indice2 == '2')
{
$tipo_compra = "AND (tipo_compra ='".$tipo_compra[0]."' OR tipo_compra ='".$tipo_compra[1]."' OR tipo_compra ='".$tipo_compra[2]."') ";    
}

}
}


if($moneda == '-1' || $moneda == '' || $moneda == 'rd')
{

  $precio_margen = "AND precio_rd >= '".$precio_min."' AND precio_rd <= '".$precio_max."'";
}

else
{


if($moneda == 'us')
{
  $precio_margen = "AND precio_us >= '".$precio_min."' AND precio_us <= '".$precio_max."'";
}

if($moneda == 'eu')
{
  $precio_margen = "AND precio_eu >= '".$precio_min."' AND precio_eu <= '".$precio_max."'";
}

}


$metraje_margen = "AND metraje >= '".$metraje_min."' AND metraje <= '".$metraje_max."'";



 if($provincia != '-1')
{
  $provincia = "AND provincia = '".$provincia."'";
}
else
{
  $provincia = '';
}


if (isset($_GET['sector']))
{
 if($sector != '-1')
{
  $sector = "AND sector = '".$sector."'";
}
else
{
  $sector = '';
}
}


 if($tipo != '-1')
{
  $tipo = "AND tipo = '".$tipo."'";
}
else
{
$tipo = '';
}





 if($cantidad_habitacion != '-1')
{
  $cantidad_habitacion = "AND cantidad_habitacion = '".$cantidad_habitacion."'";
}
else
{
$cantidad_habitacion = '';
}

 if($bano != '-1')
{
  $bano = "AND bano = '".$bano."'";
 // echo 'BANOO'.$bano;
}
else
{
  $bano = '';
}

 if($piso == '-1' || $piso == '')
{
  $piso = '';
  
}
else
{
  $piso = "AND piso like '%".$piso."%'";
}

 if($nivel == '-1' || $nivel == '')
{
$nivel = '';
}
else
{

    $nivel = "AND nivel = '".$nivel."'";
  
}



 if($parqueo != '-1')
{
  $parqueo = "AND parqueo = '".$parqueo."'";
}
else
{
  $parqueo = '';
}


 if($jardin != '')
{
    $jardin = "AND jardin = '".$jardin."'";
}

 if($patio != '')
{
    $patio = "AND patio = '".$patio."'";
}

 if($balcon != '')
{
    $balcon = "AND balcon = '".$balcon."'";
}

 if($terraza != '')
{
    $terraza = "AND terraza = '".$terraza."'";
}

 if($piscina != '')
{
    $piscina = "AND piscina = '".$piscina."'";
}

 if($gym != '')
{
    $gym = "AND gym = '".$gym."'";
}






/*
echo $codigo.' codigo<br>';
echo $tipo_compra.' tipo compra<br>';
echo $cantidad_habitacion.' habitacion<br>';
echo $bano.' bano <br>';
echo $parqueo.' parqueo <br>';
echo $jardin.' jardin <br>';
echo $patio.'patio <br>';
echo $piso.' piso <br>';
echo $nivel.'nivel <br>';
echo $provincia.' provincia<br>';
echo $sector.'sector <br>';
echo $tipo.'tipo <br>';
*/
 

//$query_listado = "SELECT * from propiedades where $codigo $tipo_compra $provincia $sector $tipo $moneda $cantidad_habitacion $bano $piso $parqueo AND publicado = '1'";
$query_listado = "SELECT * from propiedades where publicado = '1' $codigo $tipo_compra $precio_margen $cantidad_habitacion $bano $parqueo $jardin $patio $balcon $terraza $piscina $gym $piso $nivel $metraje_margen $provincia $sector $tipo";
//$query_listado = "SELECT * from propiedades where publicado = '1' $codigo $tipo_compra $precio_margen $cantidad_habitacion";

//echo $query_listado;

/* $query_listado = "SELECT * from propiedades where codigo like '%$codigo%' AND publicado = '1'"; */

/*  
$query_listado = "SELECT propiedades.propiedades_id, propiedades.nombre_propiedad, propiedades.codigo, propiedades.tipo_compra, propiedades.moneda, propiedades.precio_rd, propiedades.precio_us, propiedades.precio_eu, propiedades.cantidad_habitacion, propiedades.bano, propiedades.parqueo, propiedades.jardin, propiedades.patio, propiedades.piso, propiedades.nivel, propiedades.ubicacion, propiedades.metraje, propiedades.provincia, propiedades.sector, propiedades.imagen, propiedades.tipo, lista_provincias.opcion, lista_sectores.opcion from propiedades, lista_provincias, lista_sectores where propiedades.codigo = '$codigo' AND propiedades.publicado = '1'";
*/

$parte_arriba = "";

$titulo_web = "BUSQUEDA DE PROPIEDAD";

$titulo_propiedades = 'BUSQUEDA DE PROPIEDAD';
}










if($codigo == "" && $tipo_compra == "" && $moneda == "" && $cantidad_habitacion == "" && $bano == "" && $parqueo == "" && $jardin == "" && $patio == "" && $piso == "" && $nivel == "" && $provincia == "" && $sector == "" && $tipo == ""){
   /*
$query_listado = "SELECT propiedades.propiedades_id, propiedades.nombre_propiedad, propiedades.codigo, propiedades.tipo_compra, propiedades.moneda, propiedades.precio_rd, propiedades.precio_us, propiedades.precio_eu, propiedades.cantidad_habitacion, propiedades.bano, propiedades.parqueo, propiedades.jardin, propiedades.patio, propiedades.piso, propiedades.nivel, propiedades.ubicacion, propiedades.metraje, propiedades.provincia, propiedades.sector, propiedades.imagen, propiedades.tipo, lista_provincias.opcion, lista_sectores.opcion from propiedades, lista_provincias, lista_sectores where propiedades.provincia = lista_provincias.id AND propiedades.publicado = '1' order by rand()";
*/

$query_listado = "SELECT * from propiedades where publicado = '1' order by rand()";

$titulo_propiedades = "TODAS LAS PROPIEDADES";




}



$query_limit_listado = sprintf("%s LIMIT %d, %d", $query_listado, $startRow_listado, $maxRows_listado);
$listado = mysql_query($query_limit_listado, $tienda) or die(mysql_error());
$row_listado = mysql_fetch_assoc($listado);

if (isset($_GET['totalRows_listado'])) {
  $totalRows_listado = $_GET['totalRows_listado'];
} else {
  $all_listado = mysql_query($query_listado);
  $totalRows_listado = mysql_num_rows($all_listado);
}
$totalPages_listado = ceil($totalRows_listado/$maxRows_listado)-1;

$queryString_listado = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_listado") == false && 
        stristr($param, "totalRows_listado") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_listado = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_listado = sprintf("&totalRows_listado=%d%s", $totalRows_listado, $queryString_listado);


//AQUI FINALIZA LA LISTA DE propiedades




?>



<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <!-- <link rel="icon" type="image/x-icon" href="images/favicon.png" /> -->
      <title><?php echo $titulo_propiedades; ?> - Trialty</title>
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CMontserrat%3A700%2C400&amp;subset=cyrillic%2Ccyrillic-ext%2Clatin%2Cgreek-ext%2Cgreek%2Clatin-ext%2Cvietnamese&amp;ver=1.6.11" type="text/css" media="all">
      <link rel='stylesheet' href='js/vendor/booked/font-awesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/essgrid/tooltipster.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/essgrid/tooltipster-light.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/booked/styles.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/revslider/settings.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/_animation.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/shortcodes.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/magnific-popup/magnific-popup.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
      <script type="text/javascript" src="select_dependientes.js"></script>
   </head>
   <body class="page-template-blog-property body_filled body_style_wide responsive_menu scheme_original top_panel_show top_panel_above sidebar_show sidebar_right">
      <div class="body_wrap">
         <div class="page_wrap">
            <?php include('menu.php'); ?>
            <!--
            <header class="top_panel_wrap top_panel_style_1 scheme_original">
               <div class="header-bg">
                  <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
                     <div class="content_wrap clearfix">
                        <div class="top_panel_logo">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo-header1.jpg" class="logo_main" alt=""></a>
                           </div>
                        </div>
                        <div class="top_panel_contacts">
                           <div class="top_panel_contacts_left">
                              <div class="contact_phone">121 King Street, NY, USA</div>
                              <div class="contact_email">contact@yoursite.com</div>
                           </div>
                           <div class="top_panel_contacts_right">call us: <strong><i>800</i> 123 45 67</strong></div>
                           <div class="cL"></div>
                        </div>
                        <div class="top_panel_menu">
                           <a href="#" class="menu_main_responsive_button icon-down">Select menu item</a>
                           <nav class="menu_main_nav_area">
                              <ul id="menu_main" class="menu_main_nav">
                                 <li class="menu-item menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="index.html">Home 1</a></li>
                                       <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                       <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item menu-item-has-children">
                                    <a href="#">Features</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Elements</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="typography.html">Typography</a></li>
                                             <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                             <li class="menu-item"><a href="404.html">Page 404</a></li>
                                             <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                                             <li class="menu-item"><a href="support.html">Support</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item"><a href="booking.html">Booking</a></li>
                                       <li class="menu-item"><a href="customization.html">Customization</a></li>
                                       <li class="menu-item"><a href="video-tutorials.html">Video tutorials</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item menu-item-has-children">
                                    <a href="#">About us</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="about.html">About</a></li>
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Team</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="team.html">Our agents</a></li>
                                             <li class="menu-item"><a href="single-team.html">Agent&#8217;s profile</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Services</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="services.html">Our Services</a></li>
                                             <li class="menu-item"><a href="single-service.html">Service Single Page</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item current-menu-parent menu-item-has-children">
                                    <a href="#">Listing</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item current-menu-item"><a href="listing.html">All property</a></li>
                                       <li class="menu-item"><a href="single-property.html">Single property</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item menu-item-has-children">
                                    <a href="#">Gallery</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="gallery-grid.html">Grid</a></li>
                                       <li class="menu-item"><a href="gallery-masonry.html">Masonry</a></li>
                                       <li class="menu-item"><a href="gallery-cobbles.html">Cobbles</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="classic-with-sidebar.html">Classic With Sidebar</a></li>
                                       <li class="menu-item"><a href="classic-without-sidebar.html">Classic Without Sidebar</a></li>
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Masonry</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 columns</a></li>
                                             <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 columns</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Portfolio</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 columns</a></li>
                                             <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 columns</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item"><a href="contacts.html">Contacts</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="cL"></div>
                        -->
                     </div>
                  </div>
                  <div class="top_panel_title top_panel_style_1  title_present scheme_original">
                     <div class="top_panel_title_inner top_panel_inner_style_1 breadcrumbs_present_inner">
                        <div class="content_wrap">
                           <h1 class="page_title"><?php echo $titulo_propiedades; ?></h1>
                           <div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.html">Inicio</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php echo $titulo_propiedades; ?></span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>

            <div class="page_content_wrap">
               <div class="content_wrap">
                  <div class="content">
                     <div class="sc_property sc_property_style_property-1">
                        <div class="columns_wrap ">


<?php
   
   if (mysql_num_rows($listado) <= 0)
{
echo '<h2>No encuentras lo que buscas</h2>

<h4>Permitenos ayudarte, escribenos lo que necesitas<br> y te buscamos una propiedad acorde a tu necesidad.</h4>
<a href="contacto.php?tema=busqueda" class="sc_emailer_button sc_button sc_button_box sc_button_style_style3">ESCRIBIR</a>

';
}
else
{
   
   
   
    
   $contador=0;
   
   do { 
   if ($contador==0){
      ?>
      <tr>
        <?php
        }
      $contador++;


if($moneda == '-1' || $moneda == '')
{
      if($row_listado['moneda'] == 'us')
      {
$precio = $row_listado['precio_us'];
      }

      if($row_listado['moneda'] == 'rd')
      {
$precio = $row_listado['precio_rd'];
      } 

            if($row_listado['moneda'] == 'eu')
      {
$precio = $row_listado['precio_eu'];
      } 

      $moneda2 = strtoupper($row_listado['moneda']);     
      
}
else
{

      if($moneda == 'us')
      {
$precio = $row_listado['precio_us'];


      }

      if($moneda == 'rd')
      {
$precio = $row_listado['precio_rd'];
      } 

            if($moneda == 'eu')
      {
$precio = $row_listado['precio_eu'];
      } 

$moneda2 = strtoupper($moneda);  


}

$imagen_thumb = str_replace('.jpg', '-thumb.jpg', $row_listado['imagen']);

  
  echo '     <div class="column-1_2 column_padding_bottom">
                              <div class="sc_property_item">
                                 <div class="sc_property_image">
                                    <a href="detalle.php?nombre='.url_amigable($row_listado['nombre_propiedad']).'&id='.$row_listado['propiedades_id'].'">
                                       <div class="property_price_box">
                                          <span class="property_price_box_sign">'.strtoupper($moneda2).'$</span><span class="property_price_box_price">'.number_format($precio).'</span>
                                       </div>
                                       <img alt="" src="images/propiedades/'.$imagen_thumb.'">
                                    </a>
                                 </div>
                                 <div class="sc_property_info">
                                    <div class="sc_property_description">'.str_replace("_"," ",$row_listado['tipo']).' en '.str_replace("_"," ",$row_listado['tipo_compra']).'</div>
                                    <div>
                                       <div class="sc_property_icon">
                                          <span class="icon-location"></span>
                                       </div>
                                       <div class="sc_property_title">
                                          <div class="sc_property_title_address_1">
                                             <a href="detalle.php?nombre='.url_amigable($row_listado['nombre_propiedad']).'&id='.$row_listado['propiedades_id'].'">'.$row_listado['nombre_propiedad'].'</a> 
                                          </div>
                                          <div class="sc_property_title_address_2">'.$row_listado['ubicacion'].'</div>
                                       </div>
                                       <div class="cL"></div>
                                    </div>
                                 </div>
                                 <div class="sc_property_info_list">
                                    <span class="icon-building113">'.$row_listado['metraje'].' sqft</span>
                                    <span class="icon-bed">'.$row_listado['cantidad_habitacion'].'</span>
                                    <span class="icon-bath">'.$row_listado['bano'].'</span>
                                    <span class="park">'.$row_listado['parqueo'].'</span>
                        
                                 </div>
                              </div>
                           </div>';
             
              
        
   
     
       

         if ($contador==3){
            $contador=0;
            
            
            
      ?>
      
        <?php
         }
         
   
            
         
         ?>
      
      <?php  } 
     
         
     
      while ($row_listado = mysql_fetch_assoc($listado)); 
     
        
         
      } //AQUI FINALIZA SI EL RESULTADO NO ES 0
        
  ?>
        <!--

        
         CIERRA PAGINACION -->


                        </div>
                     </div>



       <div class="section-divider" style="text-align:center; padding:5px; font-weight:bold;">   
          
           <?php if ($pageNum_listado > 0) { // Show if not first page ?>
      
          <a href="<?php printf("%s?pageNum_listado=%d%s", $currentPage, 0, $queryString_listado); ?>">< Primero</a>
          <?php } // Show if not first page ?>
     <?php if ($pageNum_listado > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_listado=%d%s", $currentPage, max(0, $pageNum_listado - 1), $queryString_listado); ?>">Anterior</a>
          <?php } // Show if not first page ?>
      <?php if ($pageNum_listado < $totalPages_listado) { // Show if not last page ?>
         <a href="<?php printf("%s?pageNum_listado=%d%s", $currentPage, min($totalPages_listado, $pageNum_listado + 1), $queryString_listado); ?>">Siguiente</a>
          <?php } // Show if not last page ?>
     <?php if ($pageNum_listado < $totalPages_listado) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_listado=%d%s", $currentPage, $totalPages_listado, $queryString_listado); ?>">&Uacute;ltimo ></a>
          <?php } // Show if not last page  */ ?>
        
              
        
                  
          </div>

<!--
                     <nav id="pagination" class="pagination_wrap pagination_pages">
                        <span class="pager_current active">1</span>
                        <a href="#" class="">2</a>
                        <a href="#" class="pager_next"></a>
                        <a href="#" class="pager_last"></a>
                     </nav> -->
                  </div>
                  <div class="sidebar widget_area scheme_original">
                     <div class="sidebar_inner widget_area_inner">
                        <aside class="widget widget_property_search scheme_dark">
                           <form method="get" action="propiedades.php">
                              <input type="text" name="codigo" placeholder="Codigo">
                              <select multiple name="tipo_compra[]" style="height:70px;">
                                 <option value="-1">Tipo de Compra</option>
                                  <option value="-1">Todas</option>
                                 <option value="venta">Venta</option>
                                 <option value="alquiler">Alquiler</option>
                                 <option value="venta_alquiler">Venta y Alquiler</option>
                                 <option value="alquiler_amueblado">Alquiler Amueblado</option>
                              </select>



                             <?php utf8_encode(generaPaises()); ?>
                             <!-- <select name="provincia">
                                 <option value="-1">Provincia</option>
                        <option value="1">DISTRITO NACIONAL</option>
<option value="2">SANTO DOMINGO</option>
<option value="3">LA ALTAGRACIA</option>
<option value="35">BAHORUCO</option>
<option value="5">AZUA</option>
<option value="7">BARAHONA</option>
<option value="8">DAJABON</option>
<option value="9">EL SEIBO</option>
<option value="10">ELIAS PI�A</option>
<option value="11">ESPAILLAT</option>
<option value="12">HATO MAYOR</option>
<option value="14">HERMANAS MIRABAL</option>
<option value="15">INDEPENDENCIA</option>
<option value="16">LA ROMANA</option>
<option value="17">LA VEGA</option>
<option value="18">MARIA TRINIDAD SANCHEZ</option>
<option value="19">MONSE�OR NOUEL</option>
<option value="20">MONTE CRISTI</option>
<option value="21">MONTE PLATA</option>
<option value="22">PEDERNALES</option>
<option value="24">PERAVIA</option>
<option value="25">PUERTO PLATA</option>
<option value="26">SAMANA</option>
<option value="27">SAN CRISTOBAL</option>
<option value="28">SAN JOS� DE OCOA</option>
<option value="29">SAN JUAN</option>
<option value="30">SAN PEDRO DE MACORIS</option>
<option value="31">SANCHEZ RAMIREZ</option>
<option value="32">SANTIAGO RODRIGUEZ</option>
<option value="33">SANTIAGO</option>
<option value="34">VALVERDE</option>
                              </select> -->
                             <div id="demoDer">
  <select disabled="disabled" name="sector" id="estados">
                  <option value="-1">Selecciona opci&oacute;n...</option>
               </select>
             </div>
            <!--
  <select name="sector">
                                 <option value="-1">Sector</option>
                                       <option value="2">Gazcue</option>
<option value="4">Piantini</option>
<option value="6">Evaristo Morales</option>
<option value="7">Naco</option>
<option value="9">La Esperilla</option>
<option value="10">Mirador Norte</option>
<option value="11">Bella Vista</option>
<option value="12">Los Prados</option>
<option value="13">Ensanche Quisqueya</option>
                              </select>
                            -->

                              <select name="tipo">
                                 <option value="-1">Tipo de Propiedad</option>
                       <option value="casas">casas</option>
<option value="apartamentos">apartamentos</option>
<option value="proyectos">Proyectos</option>
<option value="fincas">fincas</option>
<option value="solares">Solares</option>
<option value="villas">Villas</option>
<option value="nave_industrial">Nave Industrial</option>
<option value="pent_houses">Pent Houses</option>
<option value="negocios">Negocios</option>
                              </select>
                         
                              <select name="cantidad_habitacion">
                                 <option value="-1">Habitaciones</option>
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
<option value="+10">Más de 10</option>
                              </select>
                              <select name="bano">
                                 <option value="-1">Ba&ntilde;os</option>
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
<option value="10.5">10.5</option>
<option value="+10">Más de 10</option>
                              </select>


                              <select name="nivel">
                                 <option value="-1">Nivel</option>
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
<option value="+10">Más de 10</option>
                              </select>


                              <select name="piso">
                                 <option value="-1">Piso</option>
                             <option value="Marmol">Marmol</option>
<option value="Granito">Granito</option>
<option value="Ceramica">Ceramica</option>
<option value="ceramica_importada">Ceramica Importada</option>
                              </select>
                              <select name="parqueo">
                                 <option value="-1">Parqueo</option>
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
<option value="+10">Más de 10</option>
                              </select>

                             <!-- <div class="ps_area ps_range_slider"> --><br>
                                 <div class="ps_area_info">
                                    <div class="ps_area_info_title">Metraje (Solo numeros)</div>
                                    <!--
                                 <!--   <div class="ps_area_info_value"></div>
                                    <div class="cL"></div>
                                 </div>
                                 <div id="slider-range-area"></div>
                                 <input type="hidden" class="ps_area_min" name="metraje_area_min" value="0">
                                 <input type="hidden" class="ps_area_max" name="metraje_area_max" value="10000">
                                 <input type="hidden" class="ps_area_big" name="metraje_area_big" value="10000">
-->  <input type="text" class="ps_area_min" placeholder="area minima" name="metraje_area_min"><br>
       <input type="text" class="ps_area_min" placeholder="area maxima" name="metraje_area_max">

                              </div> 
                           
                                   <select name="moneda">
                                 <option value="-1">Moneda</option>
                                 <option value="rd">Peso</option>
                                 <option value="us">Dolares</option>
                                  <option value="eu">Euros</option>
         
                              </select>
<br>
                                 <div class="ps_price_info">
                                    <div class="ps_price_info_title">Precio</div>
                                 <input type="text" placeholder="precio minimo" class="ps_price_min" name="ps_price_min"><br>
                                 <input type="text" placeholder="precio maximo" class="ps_price_max" name="ps_price_max">
                             
                              </div> <br>

                              <div class="ps_amenities">
                                 <div class="accent1h">Amenidades</div>
                                 <label class="estateLabelCheckBox">
                                 <input  class="estateCheckBox" type="checkbox" name="jardin" value="1">Jardin</label>
                                 <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="patio" value="1">Patio</label>
                                  <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="balcon" value="1">Balcon</label>
                                   <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="terraza" value="1">Terraza</label>
                                 <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="piscina" value="1">Piscina</label>
                                 <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="gym" value="1">Gymnasio</label>

                              </div>
                              <!--
                              <div class="ps_options">
                                 <div class="accent1h">Options</div>
                                 <label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="ps_options[New Listings Only]" value="1">New Listings Only</label><label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="ps_options[Open Houses]" value="1">Open Houses</label><label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="ps_options[Sponsor Units]" value="1">Sponsor Units</label><label class="estateLabelCheckBox"><input  class="estateCheckBox" type="checkbox" name="ps_options[Show Listings In Contract]" value="1">Show Listings In Contract</label>
                              </div>
                           -->
                              <input type="submit" class="sc_button sc_button_box sc_button_style_style2 aligncenter ps" value="Buscar">
                           </form>
                        </aside>


                        <aside class="widget widget_categories">
<?php

            $query5 = "SELECT * FROM slideshowp where posicion = '1' AND publicado ='1' ORDER BY rand() LIMIT 1";

            $resultado5 = mysql_query($query5, $con);

            $row5 = mysql_fetch_assoc($resultado5);
                      
                       echo '<a href="'.$row5['url'].'"><img width="100%" style="margin-top:20px; margin-bottom:20px;" src="images/slideshowp/'.$row5['imagen'].'"/></a>';





     ?>


                        <!--    <img src="images/publicidad.jpg">
                          
                           <h5 class="widget_title">categories</h5>
                           <ul>
                              <li class="cat-item"><a href="classic-with-sidebar.html">Classic With Sidebar</a> (15)
                              </li>
                              <li class="cat-item"><a href="classic-without-sidebar.html">Classic Without Sidebar</a> (15)
                              </li>
                              <li class="cat-item"><a href="#">Gallery</a> (12)
                              </li>
                              <li class="cat-item"><a href="masonry-2-columns.html">Masonry 2 columns</a> (15)
                              </li>
                              <li class="cat-item"><a href="masonry-3-columns.html">Masonry 3 columns</a> (15)
                              </li>
                              <li class="cat-item"><a href="#">New properties</a> (3)
                              </li>
                              <li class="cat-item"><a href="portfolio-2-columns.html">Portfolio 2 columns</a> (15)
                              </li>
                              <li class="cat-item"><a href="portfolio-3-columns.html">Portfolio 3 columns</a> (15)
                              </li>
                              <li class="cat-item"><a href="post-formats.html">Post Formats</a> (10)
                              </li>
                           </ul> -->
                        </aside>




                     </div>
                  </div>
               </div>
            </div>
            <?php  include ('footer.php'); ?>
            <!--
            <footer class="footer_wrap widget_area scheme_original">
               <div class="footer_wrap_inner widget_area_inner">
                  <div class="content_wrap">
                     <div class="columns_wrap">
                        <aside class="column-1_4 widget widget_text">
                           <h5 class="widget_title">contacts</h5>
                           <div class="textwidget">
                              We are the leading real estate and rental marketplace dedicated to empowering consumers with data.
                              <br>
                              <br>
                              <div class="footer-widget-contacts">
                                 <span class="accent1h margin_right_tiny icon-location"></span> 121 King Street, NY, USA
                                 <br>
                                 <span class="accent1h margin_right_tiny icon-tablet"></span> +800 1234 56 78
                                 <br>
                                 <span class="accent1h margin_right_tiny icon-mail"></span> contact@yoursite.com
                              </div>
                           </div>
                        </aside>
                        <aside class="column-1_4 widget widget_recent_posts">
                           <h5 class="widget_title">from the blog</h5>
                           <article class="post_item">
                              <div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">Making the Most of Your Small Space with Furniture</a></div>
                                 <div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
                                 </div>
                              </div>
                           </article>
                           <article class="post_item">
                              <div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">4 Ways to Decorate Your First Apartment on a Budget</a></div>
                                 <div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
                                 </div>
                              </div>
                           </article>
                           <article class="post_item">
                              <div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">How to Infuse Your Space with Natural Light</a></div>
                                 <div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
                                 </div>
                              </div>
                           </article>
                        </aside>
                        <aside class="column-1_4 widget widget_nav_menu">
                           <h5 class="widget_title">quick links</h5>
                           <div>
                              <ul class="menu">
                                 <li class="menu-item"><a href="index.html">Home</a></li>
                                 <li class="menu-item"><a href="support.html">Support</a></li>
                                 <li class="menu-item"><a href="about.html">About us</a></li>
                                 <li class="menu-item"><a href="listing.html">Listing</a></li>
                                 <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                 <li class="menu-item"><a href="contacts.html">Contacts</a></li>
                              </ul>
                           </div>
                        </aside>
                        <aside class="column-1_4 widget widget_twitter">
                           <h5 class="widget_title">latest tweets</h5>
                           <ul>
                              <li class="theme_text"><a href="https://twitter.com/axiomthemes" class="username" target="_blank">@axiomthemes</a> For the little ones: bright and colorful, modern and professional #ecommerce #WP #site #template White Rabbit! <a href="https://themeforest.net/item/white-rabbit-kids-toys-clothing-store/16846054?s_rank=1" target="_blank">themeforest.net/item/white-rab…</a></li>
                              <li class="theme_text"><a href="https://twitter.com/axiomthemes" class="username" target="_blank">@axiomthemes</a> We continue #summer #sports and #tournaments topic! Check out Soccer Club #WordPess theme by Axiom: <a href="https://themeforest.net/item/soccer-club-wordpess-theme/16340049?s_rank=1" target="_blank">themeforest.net/item/soccer-cl…</a></li>
                           </ul>
                        </aside>
                     </div>
                  </div>
               </div>
            </footer>
            <footer class="contacts_wrap">
               <div class="contacts_wrap_inner">
                  <div class="content_wrap">
                     <div class="columns_wrap">
                        <div class="column-1_4 show_logo_footer">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo-footer.jpg" alt=""></a>
                           </div>
                        </div>
                        <div class="column-2_4">
                           <h5>about us</h5>
                           We are the leading real estate and rental marketplace dedicated to empowering consumers with data, inspiration and knowledge around the place they call home, and connecting them with the best local professionals who can help.
                        </div>
                        <div class="column-1_4">
                           <h5>follow us</h5>
                           <div class="sc_socials sc_socials_type_icons sc_socials_size_small">
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-facebook"></span></a></div>
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-twitter"></span></a></div>
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-instagramm"></span></a></div>
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-plus-1"></span></a></div>
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-linkedin"></span></a></div>
                              <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-youtube-play"></span></a></div>
                           </div>
                        </div>
                        <div class="cL"></div>
                     </div>
                  </div>
               </div>
            </footer>
            <div class="copyright_wrap copyright_style_menu scheme_original">
               <div class="copyright_wrap_inner">
                  <div class="content_wrap">
                     <ul class="menu_footer_nav">
                        <li class="menu-item"><a href="#">Disclaimer</a></li>
                        <li class="menu-item"><a href="#">Privacy</a></li>
                        <li class="menu-item"><a href="#">Advertisement</a></li>
                        <li class="menu-item"><a href="contacts.html">Contact us</a></li>
                     </ul>
                     <div class="copyright_text">ESTATE © 2016 All Rights Reserved</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   -->
      <a href="#" class="scroll_to_top icon-up"></a>
      <script type='text/javascript' src='js/vendor/jquery.js'></script>
      <script type='text/javascript' src='js/custom/plugins.js'></script>
      <script type='text/javascript' src='js/custom/messages.js'></script>
      <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
      <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
      <script type='text/javascript' src='js/vendor/ui/jquery-ui.min.js'></script>
      <script type='text/javascript' src='js/vendor/superfish.js'></script>
      <script type='text/javascript' src='js/custom/_utils.js'></script>
      <script type='text/javascript' src='js/custom/_init.js'></script>
      <script type='text/javascript' src='js/custom/_shortcodes.js'></script>
      <script type='text/javascript' src='js/vendor/magnific-popup/jquery.magnific-popup.min.js'></script>
   </body>
</html>