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
   conectar();
   $consulta=mysql_query("SELECT id_provincia, nombre FROM provincias");
   //desconectar();

   // Voy imprimiendo el primer select compuesto por los paises
   echo "<select name='provincia' id='provincias' onChange='cargaContenido(this.id)'>";
   echo "<option selected value='-1'>Elige</option>";
   while($registro=mysql_fetch_row($consulta))
   {
      echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
   }
   echo "</select>";
}
?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <!--<link rel="icon" type="image/x-icon" href="images/favicon.png" /> -->
      <title>Trialty</title>
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
      <link rel='stylesheet' href='js/vendor/swiper/swiper.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
<script type="text/javascript" src="select_dependientes.js"></script>
   </head>
   <body class="body_style_wide responsive_menu scheme_original top_panel_show top_panel_over sidebar_hide">
      <div class="body_wrap">
         <div class="page_wrap">
            <?php include('menu.php'); ?>
            <!--
            <header class="top_panel_wrap top_panel_style_1 scheme_original">
               <div class="header-bg">
                  <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_over">
                     <div class="content_wrap clearfix">
                        <div class="top_panel_logo">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo-header1.jpg" class="logo_main" alt=""></a>
                           </div>
                        </div>
                        <div class="top_panel_contacts">
                           <div class="top_panel_contacts_left">
                              <div class="contact_phone">121 King Street, Santo Domingo, Republica Dominicana</div>
                              <div class="contact_email">contacto@trialty.com</div>
                           </div>
                           <div class="top_panel_contacts_right">contactenos: <strong><i>809</i> 123 45 67</strong></div>
                           <div class="cL"></div>
                        </div>
                        <div class="top_panel_menu">
                           <a href="#" class="menu_main_responsive_button icon-down">Select menu item</a>
                           <nav class="menu_main_nav_area">
                              <ul id="menu_main" class="menu_main_nav">
                                 <li class="menu-item">
                                    <a href="#">Inicio</a>
                                    
                                    <ul class="sub-menu">
                                       <li class="menu-item current-menu-item"><a href="index.html">Home 1</a></li>
                                       <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                       <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                    </ul>
                               
                                 </li>
                                 <li class="menu-item">
                                    <a href="#">Nosotros</a>
                                   
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
                                 <li class="menu-item">
                                    <a href="#">Propiedades</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="about.html">About</a></li>
                                       <li class="menu-item menu-item-has-children">
                                          <a href="#">Team</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item"><a href="team.html">Our agents</a></li>
                                             <li class="menu-item"><a href="single-team.html">Agent&#8217;s profile</a></li>
                                          </ul> 
                                       </li>
                                       <li class="menu-item">
                                          <a href="#">Publica tus Propiedades</a>
                                         <ul class="sub-menu">
                                             <li class="menu-item"><a href="services.html">Our Services</a></li>
                                             <li class="menu-item"><a href="single-service.html">Service Single Page</a></li>
                                          </ul>
                                       </li> 
                                       <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                 </li>  
                                  <li class="menu-item">
                                    <a href="#">Publica tus Propiedades</a>
                                  <ul class="sub-menu">
                                       <li class="menu-item"><a href="listing.html">All property</a></li>
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
                              
                                 <li class="menu-item"><a href="#">Contacto</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="cL"></div>
                     </div>
                  </div>
               </div>
            </header>
         -->
             </div>
                  </div>
               </div>
            </header>

            <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_revsliderHome1">
               <!-- REVOLUTION SLIDER -->
               <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin-top:80px;">
                  <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.1">
                     <ul>





    <?php






            $query = "SELECT * FROM propiedades where publicado ='1' AND slideshow = '1' LIMIT 5";



            $resultado = mysql_query($query);



            while ($row = mysql_fetch_array($resultado)){




if($row['moneda'] == 'us')
{
   $simbolo_moneda = 'US';
   $precio = $row['precio_us'];
}

if($row['moneda'] == 'rd')
{

   $simbolo_moneda = 'RD';
   $precio = $row['precio_rd'];
}

if($row['moneda'] == 'eu')
{
   $simbolo_moneda = 'EUR';
   $precio = $row['precio_eu'];
}


//$imagen_thumb = str_replace('.jpg', '-thumb.jpg', $row['imagen']);



echo '<li data-index="rs-'.$row['propiedades_id'].'" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider1h1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                           <img src="images/propiedades/'.$row['imagen'].'" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>';
                           ?>
                           <div class="tp-caption Estate tp-resizeme" id="slide-8-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                             
                             <?php 
                             echo '<div class="sc_property_wrap">
                                 <div class="sc_property sc_property_style_property-6" data-interval="7176" data-slides-min-width="250">
                                    <div class="sc_property_item">
                                       <div class="sc_pr_h1">
                                          <div class="sc_pr_h2">'.$row['tipo'].' en '.$row['tipo_compra'].'</div>
                                       </div>
                                       <div class="sc_pr_t1">
                                
                                          <a href="detalle.php?nombre='.url_amigable($row['nombre_propiedad']).'&id='.$row['propiedades_id'].'">'.$row['nombre_propiedad'].'</a> 
                                       </div>
                                       <div class="sc_pr_t2">'.$row['ubicacion'].'</div>
                                       <div class="sc_pr_f1">
                                          <div class="sc_pr_f11">
                                             <div class="sc_pr_f111"><span>'.$row['tipo'].' en '.$row['tipo_compra'].'</span></div>
                                          </div>
                                          <div class="sc_pr_f12"><span>'.$simbolo_moneda.'$</span>'.number_format($precio).'</div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </li>';




            }



     ?>

<!--

                        <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider1h1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                           <img src="images/slider1h2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           <div class="tp-caption Estate tp-resizeme" id="slide-8-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                              <div class="sc_property_wrap">
                                 <div class="sc_property sc_property_style_property-6" data-interval="7176" data-slides-min-width="250">
                                    <div class="sc_property_item">
                                       <div class="sc_pr_h1">
                                          <div class="sc_pr_h2">Casa en Venta</div>
                                       </div>
                                       <div class="sc_pr_t1">
                                          <a href="single-post.html">87 Mishaum Point Rd</a> 
                                       </div>
                                       <div class="sc_pr_t2">Dartmouth, MA 02748</div>
                                       <div class="sc_pr_f1">
                                          <div class="sc_pr_f11">
                                             <div class="sc_pr_f111"><span>Casa en Venta</span></div>
                                          </div>
                                          <div class="sc_pr_f12"><span>RD$</span>1,249,000</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="images/slider1h2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                           <img src="images/slider1h2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           <div class="tp-caption Estate tp-resizeme" id="slide-12-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                              <div class="sc_property_wrap">
                                 <div class="sc_property sc_property_style_property-6 " data-interval="7743" data-slides-min-width="250">
                                    <div class="sc_property_item">
                                       <div class="sc_pr_h1">
                                          <div class="sc_pr_h2">Apartamento en Venta</div>
                                       </div>
                                       <div class="sc_pr_t1">
                                          <a href="single-post.html">9615 Shore Rd APT BA</a> 
                                       </div>
                                       <div class="sc_pr_t2">Santo Domingo, Republica Dominicana</div>
                                       <div class="sc_pr_f1">
                                          <div class="sc_pr_f11">
                                             <div class="sc_pr_f111"><span>Apartamento en Venta</span></div>
                                          </div>
                                          <div class="sc_pr_f12"><span>RD$</span>2,189,000</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li data-index="rs-13" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="images/slider1h3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                           <img src="images/slider1h2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>                             
                           <div class="tp-caption Estate tp-resizeme" id="slide-13-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                              <div class="sc_property_wrap">
                                 <div class="sc_property sc_property_style_property-6 " data-interval="5718" data-slides-min-width="250">
                                    <div class="sc_property_item">
                                       <div class="sc_pr_h1">
                                          <div class="sc_pr_h2">Casa en Alquiler</div>
                                       </div>
                                       <div class="sc_pr_t1">
                                          <a href="single-post.html">80646 Via Pessaro</a> 
                                       </div>
                                       <div class="sc_pr_t2">La Quinta, CA 32453</div>
                                       <div class="sc_pr_f1">
                                          <div class="sc_pr_f11">
                                             <div class="sc_pr_f111"><span>Casa en Alquiler</span></div>
                                          </div>
                                          <div class="sc_pr_f12"><span>RD$</span>3,449<span>/año</span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     -->
                     </ul>
                     <div class="tp-bannertimer tp-bottom"></div>
                  </div>
               </div>
               <!-- END REVOLUTION SLIDER -->
            </section>


<div class="content_wrap">

<?php




            $query5 = "SELECT * FROM slideshowg where publicado ='1' ORDER BY rand() LIMIT 1";

            $resultado5 = mysql_query($query5);

            $row5 = mysql_fetch_assoc($resultado5);

            $url = $row5['url'];

           // $imagen_thumb = str_replace('.jpg', '-thumb.jpg', $row5['imagen']);
                      
                       echo '<a href="'.$url.'"><img width="100%" style="margin-top:20px; margin-bottom:20px; max-height:189px;" src="images/slideshowg/'.$row5['imagen'].'"/></a>';


?>


</div>

            <div class="ps_header">
               <div class="content_wrap">
                  <div class="sc_section scheme_dark">
                     <div class="sc_section_inner">
                        <div class="sc_property_search">
                           <form method="get" action="propiedades.php" name="myform">
                              <div class="sc_ps_status">

 <div class="ps_area_info">
                                       <div class="ps_area_info_title">Tipo de Compra</div>
                                    </div>
                                 <select name="tipo_compra[]" multiple style="height:47px; padding-top:0;">
                                    <option value="-1">Todas</option>
                                    <option value="venta">Venta</option>
                                    <option value="alquiler">Alquiler</option>
                                    <option value="venta_alquiler">Venta y Alquiler</option>
                                    <option value="alquiler_amueblado">Alquiler Amueblado</option>
                                 </select>
                              </div>
                              <div class="sc_ps_location">

 <div class="ps_area_info">
                                       <div class="ps_area_info_title">Provincia</div>
                                    </div>



<!--ESTA ES LA PARTE AGREGADA -->
      
           
          <!-- <div id="demoIzq"><?php // generaPaises(); ?></div> 
            <div id="demoDer">
               <select disabled="disabled" name="estados" id="estados">
                  <option value="0">Selecciona opci&oacute;n...</option>
               </select>
            </div>-->
       

         <?php utf8_encode(generaPaises()); ?>
<!--ESTA ES LA PARTE AGREGADA -->
<!--
                                 <select name="provincia">
                                    <option value="-1">Todas</option>
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
                                 </select>
                              -->
                              </div>


                    <div class="sc_ps_bathrooms">

                      <div class="ps_area_info">
                                       <div class="ps_area_info_title">Cantidad de Habitaciones</div>
                                    </div>
                                 <select name="cantidad_habitacion">
                                    <option value="-1">Ninguna</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="+10">Más de 10</option>
                                 </select>
                              </div>


                              <div class="sc_ps_style">


                                 <select name="tipo" onchange="mostrarValor(this);">
                                    <option selected value="-1">Tipo de Propiedad</option>
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



                              </div>

                             <div class="sc_ps_type" id="demoDer">
  <select disabled="disabled" name="sector" id="estados">
                  <option value="0">Selecciona opci&oacute;n...</option>
               </select>

                            <!--     <select name="sector">
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
                                 </select> -->
                              </div>


                           
                              <div class="sc_ps_type">
                                 <select name="bano" style="width:44%; margin-left:28px; display:inline-block; margin-right:10px;">
                                    <option selected value="-1">Ba&ntilde;os</option>
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
                                 <select name="parqueo" style="width:44%; display:inline-block;">
                                    <option selected value="-1">Parqueos</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="+10">Más de 10</option>
                                 </select>

                            <!--     <input type="hidden" value="-1" name="moneda"> -->

                              </div>
                        
          
                              <div class="sc_ps_area">
                                    <div class="ps_area_info">



    



<!-- <script>

var local = '<div class="ps_area_info">';

 document.getElementById('log').innerHTML = local+'<div class="ps_area_info_title">Metraje</div>'
 +'<div class="ps_area_info_value"></div>'+'<div class="cL"></div></div><div id="slider-range-area"></div><input type="hidden" class="ps_area_min" name="metraje_area_min" value="0"><input type="hidden" class="ps_area_max" name="metraje_area_max" value="10000"><input type="hidden" class="ps_area_big" name="metraje_area_big" value="10000">';
 
 ; 

var mostrarValor = function(x){

   if(x.value == 'fincas' || x.value == 'solares')
   {


 document.getElementById('log').innerHTML = local+'<div class="ps_area_info_title">Metraje fincas</div><br>'
 +'<input type="text" style="width:44%; display:inline-block; margin-right:14px;" placeholder="Area minima" class="ps_area_min" name="metraje_area_min"><input placeholder="Area maxima" type="text" style="width:48%; display:inline-block;" class="ps_area_max" name="metraje_area_max">';
 ; 


}
else
{



 document.getElementById('log').innerHTML = local+'<div class="ps_area_info_title">Metraje general</div><br>'
 +'<input type="text" placeholder="Area minima" class="ps_area_min" style="width:44%; display:inline-block; margin-right:14px;" name="metraje_area_min"><input placeholder="Area maxima" type="text" style="width:48%; display:inline-block;" class="ps_area_max" name="metraje_area_max">';
}
    

}

</script>

-->



<div class="ps_area_info_title">Metraje (Escribir solo numeros)</div>
 <input type="text" style="width:44%; display:inline-block; margin-right:14px;" placeholder="Area minima" class="ps_area_min" name="metraje_area_min"><input placeholder="Area maxima" type="text" style="width:48%; display:inline-block;" class="ps_area_max" name="metraje_area_max">

                                 
                              </div></div>


<div class="sc_ps_price">
<div class="ps_area_info_title">Precio (Escribir solo numeros)</div>
 <input type="text" style="width:44%; display:inline-block; margin-right:14px;" placeholder="Desde" class="ps_area_min" name="ps_price_min"><input placeholder="Hasta" type="text" style="width:48%; display:inline-block;" class="ps_area_max" name="ps_price_max">
</div>

                             <!-- 
                              <div class="sc_ps_price">
                                 <div class="ps_price ps_range_slider">
                                    <div class="ps_price_info">
                                       <div class="ps_price_info_title">Precio</div>
                                       <div class="ps_price_info_value"></div>
                                       <div class="cL"></div>
                                    </div>
                                    <div id="slider-range-price"></div>
                                     <input type="hidden" class="ps_price_min" name="ps_price_min" value="0">
                                    <input type="hidden" class="ps_price_max" name="ps_price_max" value="10000000">
                                    <input type="hidden" class="ps_price_big" name="ps_price_big" value="10000000">
                                 </div>
                              </div> -->
                              <div class="sc_ps_submit">
                                 <input type="submit" class="sc_button sc_button_box sc_button_style_style2" value="Buscar">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="page_content_wrap page_paddings_no">
               <div class="sc_section">
                  <div class="content_wrap">
                     <div class="columns_wrap margin_top_xlarge margin_bottom_xmedium">
                        <div class="column-1_2">
                           <div class="bgtext1">
                              <p></p>
                           </div>



<?php

            $query2 = "SELECT * FROM propiedades where publicado ='1' AND portada = '1' ORDER BY rand() LIMIT 1";



            $resultado2 = mysql_query($query2);



            while ($row2 = mysql_fetch_array($resultado2)){




if($row2['moneda'] == 'us')
{
   $precio = $row2['precio_us'];
   $simbolo_moneda = 'US';
}

if($row2['moneda'] == 'rd')
{
   $precio = $row2['precio_rd'];
   $simbolo_moneda = 'RD';
}

if($row2['moneda'] == 'eu')
{
   $precio = $row2['precio_eu'];
   $simbolo_moneda = 'EUR';
}






$imagen_thumb = str_replace('.jpg', '-thumb.jpg', $row2['imagen']);



echo

                           '<h2 class="sc_title sc_title_iconed ind2 margin_top_null margin_bottom_xmedium">
                              <span class="sc_title_icon sc_title_icon_left sc_title_icon_small icon-map-pointer18 sc_left"></span>
                              <span class="sc_title_box">
                              <a href="detalle.php?nombre='.url_amigable($row2['nombre_propiedad']).'&id='.$row2['propiedades_id'].'">'.$row2['nombre_propiedad'].'</a>
                              <span class="sc_title_subtitle">'.$row2['ubicacion'].'</span>
                              </span>
                           </h2>
                           <div class="sc_section margin_bottom_xmedium section_style_1">
                              <div class="sc_section_inner">
                                 <p>'.utf8_encode(substr($row2['descripcion'], 0, 200)).'...</p>
                              </div>
                           </div>
                           <div class="columns_wrap sc_columns margin_bottom_medium">
                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">';

if($row2['jardin'] == '1') { echo '
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p>Hermoso Jardin</p>
                                    </li>'; }


if($row2['patio'] == '1') { echo '
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p>Patio</p>
                                    </li>'; }

                                  echo '</ul>
                              </div>
                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">';

if($row2['terraza'] == '1') { echo '
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p>Terraza</p>
                                    </li>'; }

if($row2['piscina'] == '1') { echo '
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p>Piscina</p>
                                    </li>'; }
                       
                       echo ' </ul>
                              </div>
                           </div>
                           <div class="sc_property_wrap">
                              <div class="sc_property sc_property_style_property-2">
                                 <div class="sc_property_item">
                                    <div class="ps_single_info">
                                       <div class="property_price_box">
                                          <span class="property_price_box_sign">'.$simbolo_moneda.'$</span><span class="property_price_box_price">'.number_format($precio).'</span>
                                       </div>
                                       <div class="sc_property_info_list">
                                          <span class="icon-area_2">'.$row2['metraje'].' m²</span>
                                          <span class="icon-bed">'.$row2['cantidad_habitacion'].'</span>
                                          <span class="icon-bath">'.$row2['bano'].'</span>
<span class="park">'.$row2['parqueo'].'</span>
                                          
                                       </div>
                                       <div class="cL"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="column-1_2">
                           <figure class="sc_image ">
                              <a href="detalle.php?nombre='.url_amigable($row2['nombre_propiedad']).'&id='.$row2['propiedades_id'].'"><img src="images/propiedades/'.$imagen_thumb.'" alt="'.$row2['nombre_propiedad'].'" /></a>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>';








            }



     ?>



               <div class="sc_section overflow_hidden bg_color_1">
                  <div class="content_wrap margin_top_large margin_bottom_medium">
                     <h4 class="sc_title margin_top_null margin_bottom_medium">propiedades destacadas</h4>
                     <div class="sc_property_wrap">
                        <div class="sc_property sc_property_style_property-1">
                           <div class="sc_columns columns_wrap">

<?php

            $query3 = "SELECT * FROM propiedades where publicado ='1' ORDER BY rand() LIMIT 3";



            $resultado3 = mysql_query($query3);



            while ($row3 = mysql_fetch_array($resultado3)){




if($row3['moneda'] == 'us')
{
   $simbolo_moneda = 'US';
   $precio = $row3['precio_us'];
}

if($row3['moneda'] == 'rd')
{
   $precio = $row3['precio_rd'];
   $simbolo_moneda = 'RD';
}

if($row3['moneda'] == 'eu')
{
   $precio = $row3['precio_eu'];
   $simbolo_moneda = 'EUR';
}



$imagen_thumb = str_replace('.jpg', '-thumb.jpg', $row3['imagen']);



echo
            '<div class="column-1_3 column_padding_bottom">
                                 <div class="sc_property_item">
                                    <div class="sc_property_image">
                                       <a href="detalle.php?nombre='.url_amigable($row3['nombre_propiedad']).'&id='.$row3['propiedades_id'].'">
                                          <div class="property_price_box"><span class="property_price_box_sign">'.$simbolo_moneda.'$</span><span class="property_price_box_price">'.number_format($precio).'</span></div>
                                          <img alt="'.$row3['nombre_propiedad'].'" src="images/propiedades/'.$imagen_thumb.'" width="770" height="460">
                                       </a>
                                    </div>
                                    <div class="sc_property_info">
                                       <div class="sc_property_description">'.$row3['tipo'].' en '.$row3['tipo_compra'].'</div>
                                       <div>
                                          <div class="sc_property_icon">
                                             <span class="icon-location"></span>
                                          </div>
                                          <div class="sc_property_title">
                                             <div class="sc_property_title_address_1">
                                                <a href="detalle.php?nombre='.url_amigable($row3['nombre_propiedad']).'&id='.$row3['propiedades_id'].'">'.$row3['nombre_propiedad'].'</a> 
                                             </div>
                                             <div class="sc_property_title_address_2">'.$row3['ubicacion'].'</div>
                                          </div>
                                          <div class="cL"></div>
                                       </div>
                                    </div>
                                    <div class="sc_property_info_list">
                                       <span class="icon-building113">'.$row3['metraje'].' m²</span><span class="icon-bed">'.$row3['cantidad_habitacion'].'</span><span class="icon-bath">'.$row3['bano'].'
                                   </span><span class="park">'.$row3['parqueo'].'</span> </div>
                                 </div>
                              </div>';






            }



     ?>

<!--

                              <div class="column-1_3 column_padding_bottom">
                                 <div class="sc_property_item">
                                    <div class="sc_property_image">
                                       <a href="single-post.html">
                                          <div class="property_price_box"><span class="property_price_box_sign">RD$</span><span class="property_price_box_price">1,249,000</span></div>
                                          <img alt="" src="images/770x460_2.jpg">
                                       </a>
                                    </div>
                                    <div class="sc_property_info">
                                       <div class="sc_property_description">Casa en Venta</div>
                                       <div>
                                          <div class="sc_property_icon">
                                             <span class="icon-location"></span>
                                          </div>
                                          <div class="sc_property_title">
                                             <div class="sc_property_title_address_1">
                                                <a href="single-post.html">87 Mishaum Point Rd</a> 
                                             </div>
                                             <div class="sc_property_title_address_2">Duarte, La Romana</div>
                                          </div>
                                          <div class="cL"></div>
                                       </div>
                                    </div>
                                    <div class="sc_property_info_list">
                                       <span class="icon-building113">1,286 m²</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">2</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="column-1_3 column_padding_bottom">
                                 <div class="sc_property_item">
                                    <div class="sc_property_image">
                                       <a href="single-post.html">
                                          <div class="property_price_box"><span class="property_price_box_sign">RD$</span><span class="property_price_box_price">2,189,000</span></div>
                                          <img alt="" src="images/770x460_2.jpg">
                                       </a>
                                    </div>
                                    <div class="sc_property_info">
                                       <div class="sc_property_description">Apartamento en Venta</div>
                                       <div>
                                          <div class="sc_property_icon">
                                             <span class="icon-location"></span>
                                          </div>
                                          <div class="sc_property_title">
                                             <div class="sc_property_title_address_1">
                                                <a href="single-post.html">9615 Shore Rd APT BA</a> 
                                             </div>
                                             <div class="sc_property_title_address_2">Los Prados, Santo Domingo</div>
                                          </div>
                                          <div class="cL"></div>
                                       </div>
                                    </div>
                                    <div class="sc_property_info_list">
                                       <span class="icon-building113">1,286 m²</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">3</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="column-1_3 column_padding_bottom">
                                 <div class="sc_property_item">
                                    <div class="sc_property_image">
                                       <a href="single-post.html">
                                          <div class="property_price_box"><span class="property_price_box_sign">RD$</span><span class="property_price_box_price">3,449</span><span class="property_price_box_per">/Mes</span></div>
                                          <img alt="" src="images/770x460_2.jpg">
                                       </a>
                                    </div>
                                    <div class="sc_property_info">
                                       <div class="sc_property_description">Casa en Alquiler</div>
                                       <div>
                                          <div class="sc_property_icon">
                                             <span class="icon-location"></span>
                                          </div>
                                          <div class="sc_property_title">
                                             <div class="sc_property_title_address_1">
                                                <a href="single-post.html">80646 Via Pessaro</a> 
                                             </div>
                                             <div class="sc_property_title_address_2">La Quinta, Santiago</div>
                                          </div>
                                          <div class="cL"></div>
                                       </div>
                                    </div>
                                    <div class="sc_property_info_list">
                                       <span class="icon-building113">886 m²</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">2</span>
                                    </div>
                                 </div>
                              </div>
                           -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sc_parallax" data-vc-parallax="1.5" data-vc-parallax-image="images/mapa.jpg">
                  <div class="content_wrap">
                     <div class="sc_section scheme_dark">
                        <div class="sc_section_inner">
                           <div class="sc_services_wrap">
                              <div class="sc_services sc_services_style_services-1">
                                 <div class="sc_columns columns_wrap">
                                    <div class="column-1_4 column_padding_bottom">
                                       <div class="sc_services_item">
                                          <a href="#"><span class="sc_icon icon-house263"></span></a>
                                          <div class="sc_services_item_content">
                                             <h4 class="sc_services_item_title"><a href="#">Mejor lista de Propiedades</a></h4>
                                             <div class="sc_services_item_description">
                                                <p>Proveemos al consumidor la mejor lista de propiedades de Republica Dominicana.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column-1_4 column_padding_bottom">
                                       <div class="sc_services_item">
                                          <a href="#"><span class="sc_icon icon-thumbs4"></span></a>
                                          <div class="sc_services_item_content">
                                             <h4 class="sc_services_item_title"><a href="#">Mejores precios del Mercado</a></h4>
                                             <div class="sc_services_item_description">
                                                <p>Mejores precios y precios actualizados.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column-1_4 column_padding_bottom">
                                       <div class="sc_services_item">
                                          <a href="#"><span class="sc_icon icon-badges3"></span></a>
                                          <div class="sc_services_item_content">
                                             <h4 class="sc_services_item_title"><a href="#">Garantia en el servicio</a></h4>
                                             <div class="sc_services_item_description">
                                                <p>Le garantizamos una propiedad acorde a su necesidad.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column-1_4 column_padding_bottom">
                                       <div class="sc_services_item">
                                          <a href="#"><span class="sc_icon icon-line-graphic6"></span></a>
                                          <div class="sc_services_item_content">
                                             <h4 class="sc_services_item_title"><a href="#">Excelentes agentes</a></h4>
                                             <div class="sc_services_item_description">
                                                <p>Nuestros agentes le ofreceran un trato personalizado.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--
               <div class="sc_section mobile-box back_image_1">
                  <div class="content_wrap">
                     <div class="bgtext1">
                        <p>MOBILE</p>
                     </div>
                     <div class="columns_wrap sc_columns">
                        <div class="column-1_2 sc_column_item">
                           <h1 class="sc_title">Search Best Deals <b>on Go</b></h1>
                           <div class="sc_section margin_bottom_medium section_style_1">
                              <div class="sc_section_inner">
                                 <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                              </div>
                           </div>
                           <div class="sc_section">
                              <div class="sc_section_inner">
                                 <figure class="sc_image alignleft margin_bottom_small">
                                    <a href="#"><img src="images/img_b1.png" alt="" /></a>
                                 </figure>
                                 <figure class="sc_image alignleft margin_bottom_large">
                                    <a href="#"><img src="images/img_b2.png" alt="" /></a>
                                 </figure>
                              </div>
                           </div>
                        </div>
                        <div class="column-1_2 sc_column_item">
                           <figure class="sc_image customImgHome1"><img src="images/img_mobile.png" alt="" /></figure>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="sc_section back_image_2">
                  <div class="sc_testimonials sc_testimonials_style_testimonials-2 sc_slider_swiper sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols scheme_dark" data-interval="7529" data-slides-min-width="250">
                     <div class="slides swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="sc_testimonial_item">
                              <div class="sc_testimonial_content">
                                 <p>Thank your team for your hard work, advice, honesty and commitment to enable us to sell my mothers house.</p>
                              </div>
                              <div class="sc_testimonial_author">
                                 <a href="#" class="sc_testimonial_author_name">Irine Gosh</a>
                                 <br><span class="sc_testimonial_author_position">22 years</span>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="sc_testimonial_item">
                              <div class="sc_testimonial_content">
                                 <p>Thank you so much for your good wishes and for your not insignificant part in our move. You are stars!</p>
                              </div>
                              <div class="sc_testimonial_author">
                                 <span class="sc_testimonial_author_name">Emma Bennett</span>
                                 <br><span class="sc_testimonial_author_position">40 years</span>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div  class="sc_testimonial_item">
                              <div class="sc_testimonial_content">
                                 <p>You were superb from the start! We made the best decision. We wish the company well for the future.</p>
                              </div>
                              <div class="sc_testimonial_author">
                                 <a href="#" class="sc_testimonial_author_name">Logan Hughes</a>
                                 <br><span class="sc_testimonial_author_position">31 years</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sc_slider_controls_wrap">
                        <a class="sc_slider_prev" href="#"></a>
                        <a class="sc_slider_next" href="#"></a>
                     </div>
                     <div class="sc_slider_pagination_wrap"></div>
                  </div>
               </div>
            </div>
         -->
         <!--
            <div class="contacts_emailer_wrap">
               <div class="content_wrap">
                  <div class="sc_emailer">
                     <div class="sc_emailer_title">REGISTRATE PARA NOVEDADES</div>
                     <div class="sc_emailer_content">
                        <form class="sc_emailer_form" method="post" action="suscripcion.php">
                           <input type="text" class="sc_emailer_input" name="email" value="" placeholder="Porfavor, entra tu dirección de correo electronico.">
                           <button class="sc_button sc_button_box sc_button_style_style3">Enviar</button>
                         
                        </form>
                     </div>
                     <div class="cL"></div>
                  </div>
               </div>
            </div> -->

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
                              <div class="post_thumb">
                                 <img alt="" src="images/50x50.jpg">
                              </div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">Making the Most of Your Small Space with Furniture</a></div>
                                 <div class="post_info">
                                    <span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> 
                                    <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
                                 </div>
                              </div>
                           </article>
                           <article class="post_item">
                              <div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">4 Ways to Decorate Your First Apartment on a Budget</a></div>
                                 <div class="post_info">
                                    <span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> 
                                    <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
                                 </div>
                              </div>
                           </article>
                           <article class="post_item">
                              <div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
                              <div class="post_content">
                                 <div class="post_title"><a href="single-post.html">How to Infuse Your Space with Natural Light</a></div>
                                 <div class="post_info">
                                    <span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> 
                                    <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
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
                           <h5>Nosotros</h5>
                           Somos el principal mercado de bienes raíces y alquiler dedicado a potenciar a los consumidores con datos, inspiración y conocimiento alrededor del lugar que llaman hogar, y conectarlos con los mejores profesionales locales que pueden ayudar.
                        </div>
                        <div class="column-1_4">
                           <h5>siguenos</h5>
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
                        <li class="menu-item"><a href="#">Politicas de uso</a></li>
                        <li class="menu-item"><a href="#">Politicas de Privacidad</a></li>
                        <li class="menu-item"><a href="#">Publicidad</a></li>
                        <li class="menu-item"><a href="#">Contactanos</a></li>
                     </ul>
                     <div class="copyright_text">TRIALTY © 2017 All Rights Reserved</div>
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
      <script type='text/javascript' src='js/vendor/essgrid/lightbox.js'></script>
      <script type='text/javascript' src='js/vendor/essgrid/jquery.themepunch.tools.min.js'></script>
      <script type='text/javascript' src='js/vendor/revslider/jquery.themepunch.revolution.min.js'></script>
      <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
      <script type='text/javascript' src='js/vendor/ui/jquery-ui.min.js'></script>
      <script type="text/javascript" src="js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="js/vendor/revslider/revolution.extension.navigation.min.js"></script>
      <script type='text/javascript' src='js/vendor/superfish.js'></script>
      <script type='text/javascript' src='js/custom/_utils.js'></script>
      <script type='text/javascript' src='js/custom/_init.js'></script>
      <script type='text/javascript' src='js/custom/_shortcodes.js'></script>
      <script type='text/javascript' src='js/vendor/parallax.js'></script>
      <script type='text/javascript' src='js/vendor/skrollr.min.js'></script>
      <script type='text/javascript' src='js/vendor/swiper/swiper.min.js'></script>
      
   </body>
</html>