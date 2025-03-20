<?php
session_start();

error_reporting(0);
if ($_SESSION["id"] > 0) { } else {
    header("Location: login.php");
}
?>

<html>

<head>
    <style>
        body {
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #backButton {
            text-decoration: none;
            border-radius: 8px;
            text-align: end;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            background: darkgrey;
            padding: 8px;
            display: inline-block;
        }

        #backButton:hover {
            background: #696969;
        }

        #cerrarButton {
            text-decoration: none;
            border-radius: 8px;
            text-align: end;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            background: red;
            padding: 8px;
        }

        #cerrarButton:hover {
            background: #800000;
        }

        #container {
            background: #66ff66;
            width: 100%;
            padding: 15px;
        }
        #topDiv {
            margin-bottom: 15px;
            width: 97%;
        }
        #navigationDiv {
            width: 100%;
            height: 300px;
        }
        #name {
            font-size: 22px;
            font-family: cursive;
            float: right;
        }
        #profilePic {
            max-width: 50px;
            border-radius: 60px;
            margin-left: 13px;
            float: right;
        }

    </style>
</head>

<body>
    <div id="container" name="container">
        <div id="topDiv">
            <img id="profilePic" src="archivos/<?php echo $_SESSION["pic"]; ?>.jpg">
            <a id="name" > Bienvenido <?php echo $_SESSION["nombre"]; ?></a>
        </div>

        <div id="navigationDiv">
            <a id="backButton" href="home.php" target="_PARENT">Inicio</a>
            <a id="backButton" href="tabla-mostrar-usuarios.php" target="_PARENT" >Administradores</a>
            <a id="cerrarButton" href="closeSession.php" target="_PARENT" >Salir</a>
        </div>
    </div>
</body>

</html>
