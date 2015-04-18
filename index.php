<?php
	include_once 'header.php';

	$conexion = new ConexionMySQL(__SERVER_NAME__,__USER_NAME__,__PASS__,__DB_NAME__);
	//print_r($conexion->mysqli);
?>
	<style type="text/css">
		.form-control-wrapper{
			margin: 25px 0px;
		}
		.container{
			margin: 45px auto;
		}
	</style>
	<div class="container"><!--Inicio .container-->
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
	</div><!--Fin .container-->
<?php
	include_once 'footer.php';
?>