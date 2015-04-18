<?php
	include_once 'header.php';

	$conexion = new ConexionMySQL(__SERVER_NAME__,__USER_NAME__,__PASS__,__DB_NAME__);
	//print_r($conexion->mysqli);
?>
	<style type="text/css">
		.sidebar{
			position: fixed;
			/*display:  none;*/
			background: #009688;
			height: 100%;
			overflow: auto;
		}
		.no-margin{
			margin: 0px;
		}
		@media screen and (max-width: 768px) {
			.sidebar{
				display:none;
			}
		}

	</style>	
	<header class="row no-margin">
		<div class="pull-right text-center">
			<div class="col-xs-12">
				<a href="" data-target="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                <img src="http://lorempixel.com/g/120/120" class="img-responsive shadow-z-2">
	            </a>
	            <ul class="dropdown-menu">
	                <li>Mis estadísticas</li>
	                <li><a href="#">Por lugar</a></li>
	                <li><a href="#">Por Fechas</a></li>
	                <li class="divider"></li>
	                <li>Otras estadísticas</li>
	                <li class="divider"></li>
	                <li>Configuración</li>
	                <li class="divider"></li>
	                <li>Salir</li>
	            </ul>
           	</div>
		</div>
	</header>
	<div class="row no-margin">
		<h1 class="text-center">Último recorrido</h1>
		<div class="sidebar col-sm-3 col-md-2 shadow-z-2">
			
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
			<p class="text-center">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ex nihil ullam labore. Eius recusandae aliquid ex ipsa doloremque, atque laborum veniam assumenda fugiat quae, laudantium. Itaque sint voluptate praesentium!
			</p>
		</div>
	</div>
<?php
	include_once 'footer.php';
?>