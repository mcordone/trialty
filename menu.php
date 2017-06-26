<?php


function url_amigable($cadena)
{
    $separador = "-";
    $cadena = str_replace($separador, "", $cadena);
    $cadena = strtolower($cadena);
    $cadena = strtr($cadena, "áéíóúÁñÑ", "aeiouAnN");
    $cadena = trim(ereg_replace("[^ A-Za-z0-9]", "", $cadena));
    $cadena = ereg_replace("[ \t\n\r]+", $separador, $cadena);
    return $cadena;


}


$query_general = "SELECT * FROM configuracion where id ='1'";


$resultado_general = mysql_query($query_general);


while ($row_general = mysql_fetch_array($resultado_general)) {

    $facebook = $row_general['facebook'];
    $twitter = $row_general['twitter'];
    $instagram = $row_general['instagram'];
    $pinterest = $row_general['pinterest'];
    $google = $row_general['google'];
    $youtube = $row_general['youtube'];
    $linkedin = $row_general['linkedin'];

    $texto_busqueda = $row_general['texto_busqueda'];
    $texto_contacto = $row_general['texto_contacto'];
    $texto_publicidad = $row_general['texto_publicidad'];


    $personal = $row_general['personal'];
    $business = $row_general['business'];
    $premium = $row_general['premium'];

    $precio_personal = $row_general['precio_personal'];
    $precio_business = $row_general['precio_business'];
    $precio_premium = $row_general['precio_premium'];


    $telefono = $row_general['telefono'];
    $direccion = $row_general['direccion'];
    $contacto = $row_general['contacto'];


    echo '
      <header class="top_panel_wrap top_panel_style_1 scheme_original">
               <div class="header-bg">
                  <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_over">
                     <div class="content_wrap clearfix">
                        <div class="top_panel_logo">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo_trialty2.png" class="logo_main" alt=""></a>
                           </div>
                        </div>
                        <div class="top_panel_contacts">
                           <div class="top_panel_contacts_left">
                             <!-- <div class="contact_phone">' . $row_general['direccion'] . '</div> -->
                              <div class="contact_email">' . $row_general['contacto'] . '</div>
                           </div>
                           <div class="top_panel_contacts_right">Contactenos: <strong>' . $row_general['telefono'] . '</strong></div>
                           <div class="cL"></div>
                        </div>
';}


?>


<div class="top_panel_menu">
    <a href="#" class="menu_main_responsive_button icon-down">Selecciona el menu</a>
    <nav class="menu_main_nav_area">
        <ul id="menu_main" class="menu_main_nav">
            <li class="menu-item">
                <a href="index.php">Inicio</a>
                <!--
                <ul class="sub-menu">
                   <li class="menu-item current-menu-item"><a href="index.html">Home 1</a></li>
                   <li class="menu-item"><a href="home2.html">Home 2</a></li>
                   <li class="menu-item"><a href="home3.html">Home 3</a></li>
                </ul>
             -->
            </li>
            <li class="menu-item">
                <a href="nosotros.php">Nosotros</a>
                <!--
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
             -->
            </li>
            <li class="menu-item">
                <a href="propiedades.php">Propiedades</a>
                <!-- <ul class="sub-menu">
                    <li class="menu-item"><a href="about.html">About</a></li>
                    <li class="menu-item menu-item-has-children">
                       <a href="#">Team</a>
                       <ul class="sub-menu">
                          <li class="menu-item"><a href="team.html">Our agents</a></li>
                          <li class="menu-item"><a href="single-team.html">Agent&#8217;s profile</a></li>
                       </ul> -->
            </li>
            <li class="menu-item">
                <a href="publica.php">Publica tus Propiedades</a>
                <!--    <ul class="sub-menu">
                       <li class="menu-item"><a href="services.html">Our Services</a></li>
                       <li class="menu-item"><a href="single-service.html">Service Single Page</a></li>
                    </ul>
                 </li>
                 <li class="menu-item"><a href="pricing.html">Pricing</a></li>
              </ul>
           </li>  -->
                <!--   <li class="menu-item">
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
              -->
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
</div>
<div class="cL"></div>
        