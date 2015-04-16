<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
	<link href="bower_components/bootstrap-material-design/dist/css/roboto.min.css" rel="stylesheet">
	<link href="bower_components/bootstrap-material-design/dist/css/material.min.css" rel="stylesheet">
	<link href="bower_components/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet">

	<style type="text/css">
		.form-control-wrapper{
			margin: 25px 0px;
		}
		.container{
			margin: 45px auto;
		}
	</style>

	<title>Bici-i</title>
</head>
<body>
	<div class="container">
		<div class="col-md-7">
			<div class="well">
				<form class="form-horizontal">
					<h2 class="form-signin-heading">Regístrate</h2>
					<label for="inputEmail" class="sr-only">Correo electrónico</label>
					<input type="email" id="inputEmail" class="form-control floating-label" placeholder="Correo electrónico" required autofocus>
					<label for="inputPassword" class="sr-only">Contraseña</label>
					<input type="password" id="inputPassword" class="form-control floating-label" placeholder="Contraseña" required>
					<label for="inputPassword" class="sr-only">Repite Contraseña</label>
					<input type="password" id="inputPassword" class="form-control floating-label" placeholder="Repite Contraseña" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
				</form>
			</div>
		</div>
		<div class="col-md-5">
			<div class="well">
				<form class="form-horizontal">
					<h2 class="form-signin-heading">Inicia sesión</h2>
					<label for="inputEmail" class="sr-only">Correo electrónico</label>
					<input type="email" id="inputEmail" class="form-control floating-label" placeholder="Correo electrónico" required autofocus>
					<label for="inputPassword" class="sr-only">Contraseña</label>
					<input type="password" id="inputPassword" class="form-control floating-label" placeholder="Contraseña" required>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Recuérdame
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
				</form>
			</div>
		</div>
		<div
		  class="fb-like"
		  data-share="true"
		  data-width="450"
		  data-show-faces="true">
		</div>
	</div>	

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
	<script src="bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '934893883198675',
	      xfbml      : true,
	      version    : 'v2.3'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
	$(document).ready(function() {
		// This command is used to initialize some elements and make them work properly
		$.material.init();
	});
	</script>	
</body>
</html>