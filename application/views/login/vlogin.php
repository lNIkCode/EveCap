
<body>
	<div id="centrado">
		<div class="row">
			<div class="col s5">
				<div class="card hoverable">
					<div class="card-image" id="altoimagen">
							<img id="logo1" src="imagen/EveCaplogo.png">
							<div class="pp">
									<p class="white-text">INICIO SESION</p>
							</div>

						</div>
						<form action="http://localhost:80/EveCap/clogin/ingresar" method="post">
					<div id="alt8" class="card-content">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon_prefix" type="text" class="validate" name="txtusuario">
								<label for="icon_prefix">Usuario</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">vpn_key</i>
								<input id="password" type="password" class="validate" name="txtpassword">
								<label for="password">Contraseña</label>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button id="centrar" class="btn azul darken-4 waves-effect waves-light" type="submit" name="action">INGRESAR
    				<i class="material-icons">fingerprint</i>
  					</button>
					</div>
					</form>
					<a href="#" id="centrar2" class="blue-text darken-4-text">¿olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
