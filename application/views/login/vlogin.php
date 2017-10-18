<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/icono.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style type="text/css">
		body {
			background: #1e88e5;
		}
		#centrado {
			margin-top: 5%;
			margin-left: 33%;

		}
		#logo {
			width: 50% auto;
			height: 120px;
			padding-left: 150px;
			padding-top: 20px;
		}
		#alt8 {
			height: 220px;

		}
		#altoimagen {
			height: 200px;
		}
		.input-field input:focus+label {
			color: #2674db !important;
		}
		.row .input-field input:focus {
			border-bottom: 1px solid #2674db !important;
			box-shadow: 0 1px 0 0 #2674db !important
		}
		/* icon prefix focus color */
		.input-field .prefix.active {
			color: #2674db;
		}
		#centrar{
			margin-left: 30%;
		}
		#centrar2{
			margin-left: 31%;
			margin-bottom: 20px;
			padding-bottom: 20px;
		}
	</style>

</head>
<body>
	<div id="centrado">
		<div class="row">
			<div class="col s6">
				<div class="card hoverable">
					<div class="card-image">
						<img src="imagenes/Paisaje.jpg" id="altoimagen">
						<span class="card-title"><i id="logo" class="large material-icons">account_circle</i></span>
					</div>
					<div id="alt8" class="card-content">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Usuario</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">vpn_key</i>
								<input id="password" type="password" class="validate">
								<label for="password">Contraseña</label>
							</div>
						</div>
					</div>
					<div class="card-action">
						<a id="centrar" class="blue darken-4 waves-effect waves-light btn"><i class="material-icons">fingerprint</i> INGRESAR</a>
					</div>
					<a href="#" id="centrar2" class="blue-text darken-4-text">¿olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
	<!-- librerias de js -->
	<script src="js/jquery.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/icono.js"></script>
	<!-- ... -->
</body>

</html>
