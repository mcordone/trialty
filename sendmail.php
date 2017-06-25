<?php
            require('config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());
          }


        mysql_select_db($dbbase, $con);


            $query5 = "SELECT * FROM configuracion where id ='1'";

            $resultado5 = mysql_query($query5);

            $row5 = mysql_fetch_assoc($resultado5);

            $contacto = $row5['contacto'];

          //  echo $contacto." contacto<br>";

if($_POST['vendedor'] != '')
{

 // echo $_POST['vendedor'];

        $idusuario = $_POST['vendedor'];
          $query4 = "SELECT * FROM usuarios where id  = '$idusuario'";

            $resultado4 = mysql_query($query4);

            $row4 = mysql_fetch_assoc($resultado4);

            $correo_usuario = $row4['correo'];

          //   echo $correo_usuario." correo_usuario<br>";

}






?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <link rel="icon" type="image/x-icon" href="images/favicon.png" />
      <title>Mensaje enviado - Trialty</title>
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CMontserrat%3A700%2C400&amp;subset=cyrillic%2Ccyrillic-ext%2Clatin%2Cgreek-ext%2Cgreek%2Clatin-ext%2Cvietnamese&amp;ver=1.6.11" type="text/css" media="all">
	  <link rel='stylesheet' href='js/vendor/booked/font-awesome.min.css' type='text/css' media='all' />
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
      <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
   </head>
   <body class="body_style_wide responsive_menu scheme_original top_panel_show top_panel_above sidebar_hide">
      <div class="body_wrap">
         <div class="page_wrap">
             <?php include('menu.php'); ?>
                     </div>
                  </div>
                  <div class="top_panel_title top_panel_style_1  title_present scheme_original">
                     <div class="top_panel_title_inner top_panel_inner_style_1 breadcrumbs_present_inner">
                        <div class="content_wrap">
                           <h1 class="page_title">Mensaje enviado</h1>
                           <div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.php">Inicio</a>
                              <span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Mensaje enviado</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
      
            <div class="page_content_wrap">
               <div class="content_wrap">
                  <div class="content">
                     <article class="post_item post_item_404">
                        <div class="post_content">
                           <h1 class="page_title">Gracias</h1>
                           <h2 class="page_subtitle">Su correo ha sido enviado</h2>
                           <p class="page_description">

<?php 


      


if(@$_POST['username'] != "" && @$_POST['subject'] != "" && @$_POST['email'] != "")
 
{
 
$nombre = $_POST['username'];
$telefono = $_POST['subject'];
$correo = $_POST['email'];
$comentario = $_POST['message']; 



if($_GET['tema'] == 'busqueda'){ $user_subject = stripslashes(strip_tags(trim('El cliente no encuentra la propiedad'))); } 
if($_GET['tema'] == 'contacto' || $_GET['tema'] == ''){ $user_subject = stripslashes(strip_tags(trim('Seccion contacto'))); }
if($_GET['tema'] == 'publicidad'){ $user_subject = stripslashes(strip_tags(trim('Solicitud de publicidad'))); }




 echo "Muchas Gracias <b>$nombre</b>! Uno de nuestros representantes le estará contactando a su correo a la mayor brevedad...";
 
 
 

$name = $nombre;
$mail = "naybe10@gmail.com";
//$mail = $contacto;
$titulo = "Contacto desde Web Trialty";
$asunto = $user_subject;


$header = 'From: ' .$titulo."<".$mail."> \r\n";
//$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "El nombre del contacto es " . $name . " \r\n";
$mensaje .= "Su correo: " . $correo . " \r\n";
$mensaje .= "Su telefono: " . $telefono . " \r\n";
$mensaje .= "Comentario: " . $comentario . " \r\n";




$mensaje .= "Este mensaje fue enviado el... " . date('d/m/Y', time());

//$para  = 'naybe10@gmail.com'; // atención a la coma

if($_POST['vendedor'] != '')
{
$para  = $contacto; // atención a la coma
}
else
{
$para  = $contacto.",".$correo_usuario; // atención a la coma

}

mail($para, $asunto, utf8_decode($mensaje), $header);
 
 
 
}






?>

 <a href="index.php">Nuestra pagina principal</a>. 
                           </p>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
             <?php  include ('footer.php'); ?>

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
   </body>
</html>