<?php
session_start();
if ($_SESSION){
header('Location: tablero.php');
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Administraci&oacute;n Trialty</title>
<link href="login/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Administraci&oacute;n Trialty"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<h1><img src="login/images/header.png" class="img-responsive" alt="" /></h1>
		<div class="app-cross">
        
        
			<div class="cross"><img src="images/cross.png" class="img-responsive" alt="" /></div>
			<h2>ACCESAR A TRIALTY</h2>
			<form action="confirmarusuario.php" method="POST">
				<input type="text" class="text" name="correo" value="Correo Electronico" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Correo Electronico';}" >
				<input type="password" value="Password" name="password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit"><input type="submit" onClick="myFunction()" value="Accesar" ></div>
				<div class="clear"></div>
				<!--<h3><a href="#">Olvidaste tu Password ?</a></h3>-->
                
			</form>
				<!--<div class="buttons">
					<a href="#" class="hvr-shutter-in-vertical">Sign in with Twitter</a>
				</div>
					<h4>New here ? <a href="#"> Accesar</a></h4>-->
			
		</div>

</body>
</html>