<?php

require('config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());
          }


        mysql_select_db($dbbase, $con);


@$id = $_GET['id'];


$query_listado = "SELECT * FROM propiedades WHERE propiedades_id = '$id'";

$listado = mysql_query($query_listado, $con) or die(mysql_error());
$rsEmp = mysql_fetch_assoc($listado);


$provincia_res = $rsEmp['provincia'];

$idusuario = $rsEmp['usuario'];

$query_listado2 = "SELECT * FROM lista_provincias WHERE id = '$provincia_res'";

$listado2 = mysql_query($query_listado2, $con) or die(mysql_error());
$rsEmp2 = mysql_fetch_assoc($listado2);

//echo $rsEmp2['opcion'];


$sectores_res = $rsEmp2['id'];

$query_listado3 = "SELECT * FROM lista_sectores WHERE relacion = '$sectores_res'";

$listado3 = mysql_query($query_listado3, $con) or die(mysql_error());
$rsEmp3 = mysql_fetch_assoc($listado3);


$query_listado4 = "SELECT * FROM usuarios WHERE id = '$idusuario'";

$listado4 = mysql_query($query_listado4, $con) or die(mysql_error());
$rsEmp4 = mysql_fetch_assoc($listado4);


?>


<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
   <!--   <link rel="icon" type="image/x-icon" href="images/favicon.png" /> -->
      <title><?php echo $rsEmp['nombre_propiedad'] ?> - Trialty</title>
      <meta  name="description" content="<?php echo substr($rsEmp['descripcion'], 0, 100); ?>" />

     
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
      <link rel='stylesheet' href='js/vendor/booked/booked.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/instagram-widget.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' href='js/vendor/magnific-popup/magnific-popup.css' type='text/css' media='all' />
      <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />


<!-- ESTA ES LA GALERIA -->
<!-- Syntax Highlighter -->
  <link href="galeria/demo/css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="galeria/demo/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
 <!-- <link rel="stylesheet" href="galeria/demo/css/demo.css" type="text/css" media="screen" /> -->
  <link rel="stylesheet" href="galeria/flexslider.css" type="text/css" media="screen" />

  <!-- Modernizr -->
  <script src="galeria/demo/js/modernizr.js"></script>

  <style>
   #flexoo .flexslider {
      margin-bottom: 10px;
    }

   #flexoo .flex-control-nav {
      position: relative;
      bottom: auto;
    }

    #flexoo .custom-navigation {
      display: table;
      width: 100%;
      table-layout: fixed;
    }

   #flexoo .custom-navigation > * {
      display: table-cell;
    }

   #flexoo .custom-navigation > a {
      width: 50px;
    }

   #flexoo .custom-navigation .flex-next {
      text-align: right;
    }
  </style>



<!-- ESTA ES LA GALERIA -->



   </head>
   <body class="single-post body_filled body_style_wide responsive_menu scheme_original top_panel_show top_panel_above sidebar_show sidebar_right">
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
                                 <li class="menu-item menu-item-has-children current-menu-parent">
                                    <a href="#">Listing</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="listing.html">All property</a></li>
                                       <li class="menu-item current-menu-item"><a href="single-property.html">Single property</a></li>
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
                  <div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
                     <div class="top_panel_title_inner top_panel_inner_style_1 breadcrumbs_present_inner">
                        <div class="content_wrap">
                           <h1 class="page_title"><?php echo $rsEmp['nombre_propiedad']; ?></h1>
                           <div class="breadcrumbs">
                              <a class="breadcrumbs_item home" href="index.html">Inicio</a>
                              <span class="breadcrumbs_delimiter"></span><a class="breadcrumbs_item all" href="propiedades.php">Todas las propiedades</a>
                              <span class="breadcrumbs_delimiter"></span>
                              <span class="breadcrumbs_item current"><?php echo $rsEmp['nombre_propiedad']; ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <div class="page_content_wrap">
               <div class="content_wrap">
                  <div class="content">
                     <section class="post_featured">
                        <div class="post_thumb">
                          <!--    <a class="hover_icon hover_icon_view" href="images/propiedades/<?php echo $rsEmp['imagen']; ?>" title="<?php echo $rsEmp['nombre_propiedad']; ?>">                  
                           <span class="ps_single_status">En <?php echo $rsEmp['tipo_compra']; ?></span>
                        <img alt="" src="images/propiedades/<?php //echo $rsEmp['imagen']; ?>"></a> -->




 <!-- ESTE ES EL SLIDE -->

<!--
<div id="container" class="cf">


  <div id="main" role="main">

      <section class="slider"> -->
         <div id="flexoo">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/propiedades/<?php echo $rsEmp['imagen']; ?>" />
            </li>

<?php

$query_listado2 = "SELECT * FROM image WHERE id_book = '$id'";
//$listado2 = mysql_query($query_listado2, $con) or die(mysql_error());



            $resultado2 = mysql_query($query_listado2, $con) or die(mysql_error());

   if (mysql_num_rows($listado2) > 0)
{

            while ($row = mysql_fetch_array($resultado2)){

echo '<li><img src="images/propiedades/'.$id.'/'.$row['src'].'" />
            </li>';


            }

}
  



?>
         <!--   <li>
              <img src="galeria/demo/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="galeria/demo/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="galeria/demo/images/kitchen_adventurer_caramel.jpg" />
            </li> -->
          </ul>
        </div>
    <div class="custom-navigation">
          <a href="#" class="flex-prev">Ant..</a>
          <div class="custom-controls-container"></div>
          <a href="#" class="flex-next">Sig..</a>
        </div> 

     </div>
     <!-- </section> 

      <aside>
        <div class="cf">
          <h3>Basic Slider</h3>
          <ul class="toggle cf">
            <li class="js"><a href="#view-js">JS</a></li>
            <li class="html"><a href="#view-html">HTML</a></li>
          </ul>
        </div>
        <div id="view-js" class="code">
          <pre class="brush: js; toolbar: false; gutter: false;">
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                customDirectionNav: $(".custom-navigation a")
              });
            });
          </pre>
        </div>
        <div id="view-html" class="code">
          <pre class="brush: xml; toolbar: false; gutter: false;">
         
            &lt;div class="flexslider">
              &lt;ul class="slides">
                &lt;li>
                  &lt;img src="slide1.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide2.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide3.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide4.jpg" />
                &lt;/li>
              &lt;/ul>
            &lt;/div>
            &lt;div class="custom-navigation">
              &lt;a href="#" class="flex-prev">Prev&lt;/a>
              &lt;div class="custom-controls-container">&lt;/div>
              &lt;a href="#" class="flex-next">Next&lt;/a>
            &lt;/div>
          </pre>
        </div>
      </aside>
    </div>

  </div>

  -->

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="galeria/demo/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="galeria/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: $(".custom-controls-container"),
        customDirectionNav: $(".custom-navigation a"),
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="galeria/demo/js/shCore.js"></script>
  <script type="text/javascript" src="galeria/demo/js/shBrushXml.js"></script>
  <script type="text/javascript" src="galeria/demo/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="galeria/demo/js/jquery.easing.js"></script>
  <script src="galeria/demo/js/jquery.mousewheel.js"></script>
  <script defer src="galeria/demo/js/demo.js"></script>



 <!-- ESTE ES EL SLIDE -->














</div>

                     </section>




                     <section class="post_content">
                        <div class="post_info">
                           <span class="post_info_item"><a class="property_group_link" href="#">Propiedad En <?php echo $rsEmp['tipo_compra']; ?></a>, 
                           <a class="property_group_link" href="propiedades.php">Otras Propiedades</a></span>
                          <!-- <span class="post_info_item">Publicada el <a href="#" class="post_info_date date updated">Diciembre 5, 2016</a></span>
                           <span class="post_info_item post_info_counters">
                           <a class="post_counters_item" href="#"><span>0</span> Comentarios</a>
                           </span> -->
                        </div>
                        <h3 class="post_title"><?php echo utf8_encode($rsEmp['nombre_propiedad']); ?></h3>
                        <div class="ps_single_info">
                           <div class="ps_single_info_descr">
                             <h4> Codigo Propiedad: <?php echo $rsEmp['propiedades_id']; ?> </h2>                            
                             <b> Provincia:</b> <?php echo $rsEmp2['opcion']; ?> <br>
                             <b> Sector:</b> <?php echo $rsEmp3['opcion']; ?><br>
                              <b> Vendedor:</b> <?php echo $rsEmp4['nombre'].''.$rsEmp4['apellido']; ?> <a href="contacto.php?vendedor=<?php echo $rsEmp4['id']; ?>">Contactar vendedor</a>
                             <?php if($rsEmp4['imagen'] != '')
{
                          ?>    <br><img src="images/usuarios/<?php echo $rsEmp4['imagen']; ?>" width="120" /> <?php } ?>


                           </div>
                           <div class="property_price_box"><span class="property_price_box_sign"><?php echo $rsEmp['moneda']; ?>$</span><span class="property_price_box_price"><?php echo number_format($rsEmp['precio_rd']); ?></span></div>
                           <div class="sc_property_info_list">
                              <span class="icon-area_2"><?php echo $rsEmp['metraje']; ?> m²</span><!--<span class="icon-floor_plan">8</span>--><span class="icon-bed"><?php echo $rsEmp['cantidad_habitacion']; ?></span>
                              <span class="icon-bath"><?php echo $rsEmp['bano']; ?></span><span class="park"><?php echo $rsEmp['parqueo']; ?></span><!--<span class="icon-crane">2001</span> -->
                           </div>
                           <div class="cL"></div>
                        </div>
                        <div class="sc_section">
                           <p><?php echo utf8_encode($rsEmp['descripcion']); ?>.</p>
                           

                           <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_medium margin_bottom_medium"></div>
                           <h4 class="sc_title">Detalles Adicionales</h4>
                           <div class="columns_wrap sc_columns">

                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">
                                  <?php  if($rsEmp['metraje'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Metraje:</b> <?php echo $rsEmp['metraje']; ?> m²</p>
                                    </li>
                                 
                               <?php  } 
                                if($rsEmp['bano'] >= '1')
                                  { ?>

                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Baños:</b> <?php echo $rsEmp['bano']; ?></p>
                                    </li>
                                    <?php } ?>
                                 </ul>
                              </div>

                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">

                                    <?php  if($rsEmp['parqueo'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Parqueos:</b> <?php echo $rsEmp['parqueo']; ?></p>
                                    </li>
                                     <?php  } 
                                if($rsEmp['cantidad_habitacion'] >= '1')
                                  { ?>
                                     <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Cantidad de habitaciones:</b> <?php echo $rsEmp['cantidad_habitacion']; ?></p>
                                    </li>
                                  <?php  } ?>

                                 </ul>
                              </div>


                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">
                                     <?php  if($rsEmp['jardin'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Jardin:</b> Si</p>
                                    </li>
                                       <?php  } 
                                if($rsEmp['patio'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Patio:</b> Si</p>
                                    </li>
                                     <?php  }  ?>
                                 </ul>
                              </div>


                              <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">
                                     <?php  if($rsEmp['piso'] >= '1')
                                  { ?>

                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Piso:</b> <?php echo $rsEmp['piso']; ?></p>
                                    </li>
                                     <?php  } 
                                if($rsEmp['nivel'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Nivel:</b> <?php echo $rsEmp['nivel']; ?></p>
                                    </li>
                                     <?php  }  ?>
                                 </ul>
                              </div>

                                    <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">
                                     <?php if($rsEmp['balcon'] >= '1')
                                  { ?>

                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Balcon:</b> Si</p>
                                    </li>
                                     <?php  } 
                                if($rsEmp['terraza'] >= '1')
                                  { ?>
                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Terraza:</b> Si</p>
                                    </li>
                                     <?php  }  ?>
                                 </ul>
                              </div>

                                    <div class="column-1_2 sc_column_item">
                                 <ul class="sc_list sc_list_style_iconed color_1">
                                     <?php  if($rsEmp['piscina'] >= '1')
                                  { ?>

                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Piscina:</b> Si</p>
                                    </li>
                                     <?php }   if($rsEmp['gym'] >= '1')
                                  { ?>

                                    <li class="sc_list_item">
                                       <span class="sc_list_icon icon-stop color_2"></span>
                                       <p><b>Gymnasio:</b> Si</p>
                                    </li>
                                     <?php  }   ?>


                                 </ul>
                              </div>

                           </div>

                           <!--
                           <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_medium margin_bottom_medium"></div>
                           <h4 class="sc_title">Detalles Adicionales</h4>
                           <div class="property_text_1">
                              <p>

<b>Cantidad de habitaciones:</b> <?php /* echo $rsEmp['cantidad_habitacion']; ?><br />
<b>Baños:</b> <?php echo $rsEmp['bano']; ?><br />
<b>Parqueos:</b> <?php echo $rsEmp['parqueo']; ?><br />
<b>Metraje:</b> <?php echo $rsEmp['metraje']; ?> <br />


<b>Jardin:</b> <?php echo $rsEmp['jardin']; ?><br />
<b>Patio:</b> <?php echo $rsEmp['patio']; ?><br />
<b>Piso:</b> <?php echo $rsEmp['piso']; ?><br />
<b>Nivel:</b> <?php echo $rsEmp['nivel']; */ ?><br />
</p>
                           </div> 
-->

                           <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_medium margin_bottom_medium"></div>
                           <!--
                           <h4 class="sc_title">Contacts Us</h4>
                           <div  class="sc_team_wrap">
                              <div class="sc_team sc_team_style_team-2">
                                 <div class="sc_columns columns_wrap">
                                    <div class="column-1_2 column_padding_bottom">
                                       <div  class="sc_team_item columns_wrap">
                                          <div class="sc_team_item_avatar">
                                             <img alt="" src="images/370x370.jpg"> 
                                          </div>
                                          <div class="sc_team_item_info">
                                             <div class="sc_team_item_title"><a href="single-team.html">Sarah Doe</a></div>
                                             <div class="sc_team_item_position">Agent</div>
                                             <div class="sc_socials sc_socials_type_icons sc_socials_size_tiny">
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-facebook"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-twitter"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-instagramm"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-linkedin"></span></a></div>
                                             </div>
                                          </div>
                                          <div class="cL"></div>
                                          <div class="sc_team_item_phone"><span class="icon-mobile29"></span>800 123 45 67</div>
                                          <div class="sc_team_item_email"><span class="icon-message106"></span>email@company.com</div>
                                       </div>
                                    </div>
                                    <div class="column-1_2 column_padding_bottom">
                                       <div class="sc_team_item even columns_wrap">
                                          <div class="sc_team_item_avatar">
                                             <img alt="" src="images/370x370.jpg"> 
                                          </div>
                                          <div class="sc_team_item_info">
                                             <div class="sc_team_item_title"><a href="single-team.html">Sebastian Jones</a></div>
                                             <div class="sc_team_item_position">Sales manager</div>
                                             <div class="sc_socials sc_socials_type_icons sc_socials_size_tiny">
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-facebook"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-twitter"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-instagramm"></span></a></div>
                                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-linkedin"></span></a></div>
                                             </div>
                                          </div>
                                          <div class="cL"></div>
                                          <div class="sc_team_item_phone"><span class="icon-mobile29"></span>800 123 45 67</div>
                                          <div class="sc_team_item_email"><span class="icon-message106"></span>email@company.com</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_medium margin_bottom_medium"></div>
                           <h4 class="sc_title">Property Map</h4>
                           <div id="sc_googlemap_1126664593" class="sc_googlemap" data-zoom="18" data-style="default">
                              <div class="sc_googlemap_marker" data-title="" data-description="" data-latlng="" data-address="121 King Street, NY, USA" data-point="images/logo-map.png"></div>
                           </div>
                        </div>
                     -->
                     </section>
                  </div>
                  <div class="sidebar widget_area scheme_original">
                     <div class="sidebar_inner widget_area_inner">
                        <!--
                        <aside class="widget widget_search">
                           <form method="get" class="search_form" action="#">
                              <input type="text" class="search_field" placeholder="Buscar" value="" name="s" title="Search for:" /><button type="submit" class="search_button icon-search"></button>
                           </form>
                        </aside> -->
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
                        <aside class="widget widget_recent_posts">
<?php

            $query6 = "SELECT * FROM slideshowp where posicion = '2' AND publicado ='1' ORDER BY rand() LIMIT 1";

            $resultado6 = mysql_query($query6, $con);

            $row6 = mysql_fetch_assoc($resultado6);
                      
                       echo '<a href="'.$row6['url'].'"><img width="100%" style="margin-top:20px; margin-bottom:20px;" src="images/slideshowp/'.$row6['imagen'].'"/></a>';



     ?>

                          <!--  <img src="images/publicidad.jpg"> -->
                           <!--<h5 class="widget_title">Recent posts</h5>
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
                        -->
                        </aside>
                        <!--
                        <aside class="widget widget_archive">
                           <h5 class="widget_title">Archives</h5>
                           <ul>
                              <li><a href='#'>March 2016</a>&nbsp;(3)</li>
                              <li><a href='#'>February 2016</a>&nbsp;(104)</li>
                              <li><a href='#'>December 2015</a>&nbsp;(3)</li>
                              <li><a href='#'>November 2015</a>&nbsp;(2)</li>
                              <li><a href='#'>September 2015</a>&nbsp;(1)</li>
                              <li><a href='#'>August 2015</a>&nbsp;(1)</li>
                              <li><a href='#'>July 2015</a>&nbsp;(1)</li>
                           </ul>
                        </aside>
                        <aside class="widget widget_calendar">
                           <div class="calendar_wrap">
                              <table>
                                 <thead>
                                    <tr>
                                       <th class="month_prev">
                                          <a href="#"></a>
                                       </th>
                                       <th class="month_cur" colspan="5">August <span>2016</span></th>
                                       <th class="month_next">&nbsp;</th>
                                    </tr>
                                    <tr>
                                       <th class="weekday" scope="col" title="Monday">M</th>
                                       <th class="weekday" scope="col" title="Tuesday">T</th>
                                       <th class="weekday" scope="col" title="Wednesday">W</th>
                                       <th class="weekday" scope="col" title="Thursday">T</th>
                                       <th class="weekday" scope="col" title="Friday">F</th>
                                       <th class="weekday" scope="col" title="Saturday">S</th>
                                       <th class="weekday" scope="col" title="Sunday">S</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="day"><span class="day_wrap">1</span></td>
                                       <td class="day"><span class="day_wrap">2</span></td>
                                       <td class="day"><span class="day_wrap">3</span></td>
                                       <td class="day"><span class="day_wrap">4</span></td>
                                       <td class="day"><span class="day_wrap">5</span></td>
                                       <td class="day"><span class="day_wrap">6</span></td>
                                       <td class="day"><span class="day_wrap">7</span></td>
                                    </tr>
                                    <tr>
                                       <td class="day"><span class="day_wrap">8</span></td>
                                       <td class="day"><span class="day_wrap">9</span></td>
                                       <td class="day"><span class="day_wrap">10</span></td>
                                       <td class="day"><span class="day_wrap">11</span></td>
                                       <td class="day"><span class="day_wrap">12</span></td>
                                       <td class="day"><span class="day_wrap">13</span></td>
                                       <td class="day"><span class="day_wrap">14</span></td>
                                    </tr>
                                    <tr>
                                       <td class="day"><span class="day_wrap">15</span></td>
                                       <td class="day"><span class="day_wrap">16</span></td>
                                       <td class="day"><span class="day_wrap">17</span></td>
                                       <td class="day"><span class="day_wrap">18</span></td>
                                       <td class="day"><span class="day_wrap">19</span></td>
                                       <td class="day"><span class="day_wrap">20</span></td>
                                       <td class="day"><span class="day_wrap">21</span></td>
                                    </tr>
                                    <tr>
                                       <td class="day"><span class="day_wrap">22</span></td>
                                       <td class="day"><span class="day_wrap">23</span></td>
                                       <td class="day"><span class="day_wrap">24</span></td>
                                       <td class="day"><span class="day_wrap">25</span></td>
                                       <td class="day"><span class="day_wrap">26</span></td>
                                       <td class="day"><span class="day_wrap">27</span></td>
                                       <td class="day"><span class="day_wrap">28</span></td>
                                    </tr>
                                    <tr>
                                       <td class="day"><span class="day_wrap">29</span></td>
                                       <td class="day"><span class="day_wrap">30</span></td>
                                       <td class="today"><span class="day_wrap">31</span></td>
                                       <td class="pad" colspan="4"><span class="day_wrap">&nbsp;</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </aside>
                        <aside class="widget widget_tag_cloud">
                           <h5 class="widget_title">Tags</h5>
                           <div class="tagcloud"><a href='#'>Attic</a>
                              <a href='#'>Basement</a>
                              <a href='#'>Bedroom</a>
                              <a href='#'>Commute</a>
                              <a href='#'>Driveway</a>
                              <a href='#'>Features</a>
                              <a href='#'>Garage</a>
                              <a href='#'>Kitchen</a>
                              <a href='#'>Living room</a>
                              <a href='#'>Popular</a>
                              <a href='#'>Premium</a>
                              <a href='#'>Studio</a>
                           </div>
                        </aside>
                        <aside class="widget null-instagram-feed">
                           <h5 class="widget_title">Instagram</h5>
                           <ul class="instagram-pics instagram-size-small">
                              <li class="">
                                 <a href="http://instagram.com/p/BB-XKPZlTX4" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                              <li class="">
                                 <a href="http://instagram.com/p/BB-XI-LlTX2" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                              <li class="">
                                 <a href="http://instagram.com/p/BB-XHHmlTXx" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                              <li class="">
                                 <a href="http://instagram.com/p/BB-XFf1lTXu" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                              <li class="">
                                 <a href="http://instagram.com/p/BB-XAdNFTXf" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                              <li class="">
                                 <a href="http://instagram.com/p/BB-W9ctFTXY" target="_blank" class=""><img src="images/320x320.jpg" alt="Instagram Image" title="Instagram Image" class="" /></a>
                              </li>
                           </ul>
                        </aside>
                     -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="custom_shortcode_box">
               <div class="content_wrap">
                  <h4 class="sc_title">Otras Propiedades</h4>
                  <div class="sc_property_wrap">
                     <div class="sc_property sc_property_style_property-1 " data-interval="5446" data-slides-per-view="3">
                        <div class="sc_columns columns_wrap">
                          
<?php

$query_listado3 = "SELECT * FROM propiedades WHERE propiedades_id != '$id' order by rand() LIMIT 3";
//$listado2 = mysql_query($query_listado2, $con) or die(mysql_error());



            $resultado3 = mysql_query($query_listado3, $con) or die(mysql_error());

   if (mysql_num_rows($listado3) > 0)
{





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

echo '<div class="column-1_3 column_padding_bottom">
                              <div class="sc_property_item">
                                 <div class="sc_property_image">
                                    <a href="detalle.php?nombre='.url_amigable($row3['nombre_propiedad']).'&id='.$row3['propiedades_id'].'">
                                       <div class="property_price_box"><span class="property_price_box_sign">'.$simbolo_moneda.'$</span><span class="property_price_box_price">'.number_format($precio).'</span></div>
                                       <img alt="" src="images/propiedades/'.$imagen_thumb.'">
                                    </a>
                                 </div>

                                 <div class="sc_property_info">
                                    <div class="sc_property_description">'.str_replace("_"," ",$row3['tipo']).' en '.str_replace("_"," ",$row3['tipo_compra']).'</div>
                                    <div>
                                       <div class="sc_property_icon">
                                          <span class="icon-location"></span>
                                       </div>
                                       <div class="sc_property_title">
                                          <div class="sc_property_title_address_1">
                                             <a href="detalle.php?nombre='.url_amigable($row3['nombre_propiedad']).'&id='.$row3['propiedades_id'].'">'.$row3['nombre_propiedad'].'</a> 
                                          </div>
                                         
                                       </div>
                                       <div class="cL"></div>
                                    </div>
                                 </div>
                                 <div class="sc_property_info_list">
                                    <span class="icon-building113">'.$row3['metraje'].' m²</span><span class="icon-bed">'.$row3['cantidad_habitacion'].'</span><span class="icon-bath">'.$row3['bano'].'</span>
                                 </div>
                              </div>
                           </div>';


            }

}
  



?>   <!--


                           <div class="column-1_3 column_padding_bottom">
                              <div class="sc_property_item">
                                 <div class="sc_property_image">
                                    <a href="single-post.html">
                                       <div class="property_price_box"><span class="property_price_box_sign">RD$</span><span class="property_price_box_price">3,449</span><span class="property_price_box_per">/year</span></div>
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
                                          <div class="sc_property_title_address_2">La Quinta, CA 32453</div>
                                       </div>
                                       <div class="cL"></div>
                                    </div>
                                 </div>
                                 <div class="sc_property_info_list">
                                    <span class="icon-building113">886 m²</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">2</span>
                                 </div>
                              </div>
                           </div>


                           <div class="column-1_3 column_padding_bottom">
                              <div class="sc_property_item">
                                 <div class="sc_property_image">
                                    <a href="single-post.html">
                                       <div class="property_price_box"><span class="property_price_box_sign">RD$</span><span class="property_price_box_price">1,249,000</span></div>
                                       <img alt="" src="images/770x460_2.jpg">
                                    </a>
                                 </div>


                                 <div class="sc_property_info">
                                    <div class="sc_property_description">Casa En Venta</div>
                                    <div>
                                       <div class="sc_property_icon">
                                          <span class="icon-location"></span>
                                       </div>
                                       <div class="sc_property_title">
                                          <div class="sc_property_title_address_1">
                                             <a href="single-post.html">87 Mishaum Point Rd</a> 
                                          </div>
                                          <div class="sc_property_title_address_2">Dartmouth, MA 02748</div>
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
                                          <div class="sc_property_title_address_2">Brooklyn, Republica Dominicana 11209</div>
                                       </div>
                                       <div class="cL"></div>
                                    </div>
                                 </div>
                                 <div class="sc_property_info_list">
                                    <span class="icon-building113">1,286 m²</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">3</span>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--
            <div class="contacts_emailer_wrap">
               <div class="content_wrap">
                  <div class="sc_emailer">
                     <div class="sc_emailer_title">Registrate para actualizaciones</div>
                     <div class="sc_emailer_content">
                        <form class="sc_emailer_form">
                           <input type="text" class="sc_emailer_input" name="email" value="" placeholder="Porfavor, entra tu correo electronico.">
                           <a href="#" class="sc_emailer_button sc_button sc_button_box sc_button_style_style3" title="Submit">suscribete</a>
                        </form>
                     </div>
                     <div class="cL"></div>
                  </div>
               </div>
            </div> -->
            <?php include('footer.php'); ?>
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
      <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
      <script type='text/javascript' src='js/custom/_googlemap.js'></script>
   </body>
</html>