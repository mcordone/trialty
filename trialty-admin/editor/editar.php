<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Texto</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/comons.css" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
   tinyMCE.init({
      // General options
      mode : "textareas",
      theme : "advanced",
      plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

      // Theme options
      theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
      theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
      theme_advanced_toolbar_location : "top",
      theme_advanced_toolbar_align : "left",
      theme_advanced_statusbar_location : "bottom",
      theme_advanced_resizing : true,

      // Example content CSS (should be your site CSS)
      content_css : "css/content.css",

      // Drop lists for link/image/media/template dialogs
      template_external_list_url : "lists/template_list.js",
      external_link_list_url : "lists/link_list.js",
      external_image_list_url : "lists/image_list.js",
      media_external_list_url : "lists/media_list.js",

      // Style formats
      style_formats : [
         {title : 'Bold text', inline : 'b'},
         {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
         {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
         {title : 'Example 1', inline : 'span', classes : 'example1'},
         {title : 'Example 2', inline : 'span', classes : 'example2'},
         {title : 'Table styles'},
         {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
      ],

      // Replace values for the template plugin
      template_replace_values : {
         username : "Some User",
         staffid : "991234"
      }
   });
</script>
<!-- /TinyMCE -->
</head>
<body>
   <div id="layout">
       <div id="header">
           <div class="logo"><img src="img/logo_firma.jpg" width="180" height="57" /></div>
         </div>
        <div class="spacer"></div>
        <div id="contend">
            <div class="blocks">
               <div><h2 style="color: #666;">Gestor de contenido</h2></div>
                <div>
                   <form name="form1" method="post" action="insert.php">
                       <div><label for="author"><strong>Autor:</strong></label>&nbsp;&nbsp;<input type="text" name="author" id="author" /></div>
                        <div style="margin: 5px 0;">&nbsp;</div>
                        <div><label for="text"><strong>Contenido:</strong></label></div>
                        <div><textarea id="text" name="text" rows="10" cols="80"></textarea></div>
                        <div style="margin: 5px 0;">&nbsp;</div>
                        <div align="right" style="padding-right:20px;"><input type="submit" name="btn" id="btn" value="Guardar Cambios"></div>
                    </form>
                </div>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</body>
</html>