<?php
include("controlsesion.php");
//conexion a la base de datos
require('../conexion/db.php');
$consulta = "SELECT * FROM editor WHERE id = 1";
$resultado= @mysql_query($consulta) or die(mysql_error());
$datos = mysql_fetch_assoc($resultado);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bravo Admin</title>
<link href="tinymce_4.0.2/tinymce/js/tinymce/skins/lightgray/content.min.css" rel="stylesheet" type="text/css">
<script src="tinymce_4.0.2/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
        tinymce.init({
			language : 'es',
			selector: "textarea.text",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak table",
         "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking emoticons textcolor",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo preview | fontselect | fontsizeselect | forecolor backcolor emoticons | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | media fullpage", 
    fontsize_formats: "9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 20pt 22pt 24pt",

	font_formats: "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats",
 }); 		
</script>


</head>

<body>
<H2 style="color:red;">EDICION CONOCENOS</H2>
<form method="post" action="actualizar_editor.php?id=1" style="text-align:right;">
<textarea class=" text " name="text" cols="50" rows="15"><?php echo @$datos['text']; ?></textarea>
 <button type="submit" name="subir" style="margin-top:20px; margin-right:30px; padding:15px 30px; background-color:orange; border:none; color:white; font-weight:bold;" class="btn btn-primary">Actualizar</button>
 </form>
</body>
</html>
