
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>administradores</title>


  </head>
<body style="background-color:#ccf5ff;">
<div class="container">
<div class="navbar">
		<br>
	  <div>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">

		</form>
		<ul class="nav pull-right">
		<p>Bienvenido <?php echo $_SESSION['user'];?></p>
			  <p><a href="desconectar.php"> Salir </a></p>
		</ul>
	  </div>

</div>
<div class="row">
	<div class="span12">
		<div class="caption">
			<center>
		<h2>Administradores registrados</h2>
		<div class="row-fluid">

			<?php
				require("connect_db.php");
				$sql=("SELECT * FROM login");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='2';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Administradores</td>";
						echo "<td>Contraseña</td>";
						echo "<td>Imagen</td>";
						echo "<td>Administrador id</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
						echo "<td>detalles</td>";
					echo "</tr>";
			?>
</center>
			<?php
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'>Editar</a></td>";
						  echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'>borrar</a></td>";
							echo "<td><a href='detalles.php?=$arreglo[0]'>Detalles</a </td>";

					echo "</tr>";
				}
				echo "</table>";
					extract($_GET);
					if(@$idborrar==2){
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}
			?>
			<br>
            <button type="button" name="button"> <a href='addadm.php'>Añadir administradores</a> </button>
		</div>
		<br/>
		</div>
	</div>
</div>
	</style>
  </body>
</html>
