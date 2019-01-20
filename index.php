<?php
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Login</title>
		<link href="./public/img/erp/.png" type="image/x-icon" rel="shortcut icon" />
		<link rel="STYLESHEET" type="text/css"  href="./public/css/fondo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<meta charset="UTF-8"><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.js"></script>
	</head>
	<body>
	<header>
		<div class="container green center-align ">
			<span class="white-text light-blue darken-4"><h4>Registro de cliente y empleados</h4></span>
		</div>
	</header><br>
		<div class="row">
			<div class="col s5">

			</div>
			<div class=" white-text col s2 grey darken-3 center-align" ><br>
				<div class="w3-container purple"><br>
					<span style="display:block;text-align:center;" >
						<i class="large material-icons center">people</i><br>
						<h6><b>Iniciar sesión</b></h6>
					</span><br>
				</div>
					<form class="" action="./controllers/controller_login.php" method="post">
						<p>
							<label class="white-text"><b>Usuario</b></label>
							<input class="w3-input w3-border " type="text" name="usuario" required autocomplete="off">
						</p>
						<p>
							<label class="white-text"><b>Password</b></label>
							<input class="w3-input w3-border" type="password" name="pas" required>
						</p>
					
						<p>
							<input type="hidden" name="entrar" value="entrar">
							<center>
								<button class="btn waves-effect purple" type="submit" name="action">Acceder <i class="material-icons right">lock_open</i></button>
							</center>
							
						</p>
					</form><br>
				</div>
		</div>
	<footer>
		<?php include"./templates/body/footer.php";?>
	</footer>
	</body>
</html>
