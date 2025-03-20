<?php
session_start();
error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel=" stylesheet" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/toast.css">
	<script src="resource/jquery-3.3.1.js"></script>

	<script>
		function login() {
			var form = document.getElementById("myform");
			var fd = new FormData(form);
			var session;

			console.log("HERE");
			$.ajax({
				type: "POST",
				url: "validar_login.php",
				data: fd,
				cache: false,
				processData: false,
				contentType: false,
				success: function() {
					console.log("hola");
					location.reload();
				}
			})
		}
	</script>


	<script>
		function myFunction() {
			var x = document.getElementById("snackbar");
			x.className = "show";
			setTimeout(function() {
				x.className = x.className.replace("show", "");
			}, 3000);
		}
	</script>
</head>

<body style="background: #b3ffe6;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="loginBox">
						<h2>Inicio de Sesion</h2>
						<form id="myform" method="post">
							<div class="form-group">
								<input type="email" class="form-control input-lg" name="email" placeholder="Correo">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" name="password" placeholder="Contraseña">
							</div>
							<button onclick="login(); return false;" type="submit" class="btn btn-success btn-block">Login</button>
						</form>

					</div>
					<a id="brError" name="brError"></a>
					<a id="errorMessage" name="errorMessage"></a>
					<div id="snackbar" name="snackbar">Llene los campos vacios</div>
					
					<?php
					if ($_SESSION["id"] > 0 && $_SESSION['type']==1) {
						header("Location: home.php");
					} else if ($_SESSION["id"] > 0 && $_SESSION['type']==2)	{
						header("Location: clientes/home.php");
					} else if ($_SESSION["id"] == -1) {
						echo "<script>console.log('FFF'); myFunction();</script>";
						$_SESSION["id"] = -2;
					}
					?>
					<br><br><a href="Formulario.php">Registrar Administrador</a>
				</div>
			</div>
		</div>

	</div>
	<script>
                function myFunction(text) {

                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    $('#snackbar').html(text);
                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                }
	</script>
	<div id="snackbar" name="snackbar"></div>
	<?php
	if($_SESSION['created']==1)	{
		echo "<script>myFunction(\"Usuario creado con exito... Inicie sesion\");</script>";
	}
	?>

</body>
<style>
	#errorMessage {
		background: crimson;
		font-size: 17px;
		color: white;
		border-radius: 4px;
	}
</style>

</html>
