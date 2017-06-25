

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Trialty Admin</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">


 <?php if (@$datatables == 1){ echo '
<!--<link rel="stylesheet" type="text/css" media="screen" href="datatables/css/bootstrap-combined.min.css">-->

    <style>
		
	.pagination-centered {
    text-align: center;
}

.pagination ul > li {
    display: inline;
}

.pagination {
    margin: 20px 0;
}
.pagination {
    border-radius: 4px;
    display: inline-block;
    margin: 20px 0;
    padding-left: 0;
}
	
	.pagination ul {
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    display: inline-block;
    margin-bottom: 0;
    margin-left: 0;
}
	
	.pagination ul > li:first-child > a, .pagination ul > li:first-child > span {
    border-bottom-left-radius: 4px;
    border-left-width: 1px;
    border-top-left-radius: 4px;
}
.pagination ul > .active > a, .pagination ul > .active > span {
    color: #999999;
    cursor: default;
}
.pagination ul > li > a:hover, .pagination ul > li > a:focus, .pagination ul > .active > a, .pagination ul > .active > span {
    background-color: #f5f5f5;
}
.pagination ul > li > a, .pagination ul > li > span {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-color: #dddddd;
    border-image: none;
    border-style: solid;
    border-width: 1px 1px 1px 0;
    float: left;
    line-height: 20px;
    padding: 4px 12px;
    text-decoration: none;
}
	
	
	
    /* Prettify */
    li.L0, li.L1, li.L2, li.L3,
    li.L5, li.L6, li.L7, li.L8 { 
        list-style-type: decimal !important ;
    }
    
       .paging li {
        padding-left: 0px;
    }
    
    .paging li a {
    	cursor: pointer ;
    }
    
    .paging li a:hover {
    	color: rgb(153, 153, 153);
	cursor: default;
    }
	th
	{
	background-color:#ef1b29;
	}
    </style>'; } ?> 
    
    <script language="JavaScript">
function aviso(url){
if (!confirm("<?php if ($seccion_admin == 'provincias') { ?>ALERTA!! Va a proceder a eliminar la provincia, si desea eliminarla de click en ACEPTAR\n de lo contrario de click en CANCELAR.<?php } 
if($seccion_admin == 'sectores') { ?>ALERTA!! Va a proceder a eliminar el sector, si desea eliminarlo de click en ACEPTAR\n de lo contrario de click en CANCELAR. <?php  }
if($seccion_admin == 'usuarios') { ?>ALERTA!! Va a proceder a eliminar el usuario, si desea eliminarlo de click en ACEPTAR\n de lo contrario de click en CANCELAR. <?php  }
if($seccion_admin == 'slideshow') { ?>ALERTA!! Va a proceder a eliminar el anuncio, si desea eliminarlo de click en ACEPTAR\n de lo contrario de click en CANCELAR. <?php  }


if($seccion_admin == 'propiedades') { ?>ALERTA!! Va a proceder a eliminar la propiedad completa y todas sus fotos, si desea eliminarla de click en ACEPTAR\n de lo contrario de click en CANCELAR. <?php }
if($seccion_admin == 'tiendas') { ?>ALERTA!! Va a proceder a eliminar el Supermercado y sus fotos, si desea eliminarlo de click en ACEPTAR\n de lo contrario de click en CANCELAR. <?php  }
?>
")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script>

<script type="text/javascript" src="select_dependientes.js"></script>
    
    
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1><img src="login/images/header.png" width="100" height="41" /></h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
   
      <div class="navbar-collapse collapse templatemo-sidebar" <?php if (@$tablero == 1){ echo 'style="width:100%;"'; } ?>>
      
<ul class="templatemo-sidebar-menu">
 
         <?php if (@$tablero != 1){ echo '<li><a href="tablero.php"><i class="fa fa-home"></i>Admin Panel</a></li>'; } ?> 
         
          <li class="active"><a href="propiedades.php"><i class="fa fa-cubes"></i>Propiedades</a></li> 
          
<?php if($_SESSION['tipo'] == "administrador")
{ ?>

           <li><a href="sectores.php"><i class="fa fa-cubes"></i>Sectores</a></li>
        <li><a href="provincias.php"><i class="fa fa-map-marker"></i>Provincias</a></li>


              <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Manejar Anuncios <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="slideshowp.php">Anuncios Cuadrados</a></li>
              <li><a href="slideshowg.php">Anuncio Grande Portada</a></li>

            </ul>
          </li>
          

           <li><a href="usuarios.php"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manejar Usuarios</a></li>
     <li><a href="form_configuracion.php"><i class="fa fa-cog"></i>Configuraci&oacute;n</a></li> 
        
   
          <?php
}
          ?>
       

  

      
          <li><a href="salir.php"><i class="fa fa-sign-out"></i>Salir</a></li> 
     
        </ul>
