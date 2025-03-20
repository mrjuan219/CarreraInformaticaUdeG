<?php
session_start();

error_reporting(0);
if($_SESSION["id"] > 0) {
    }
else {
    header("Location: login.php");
    }
?>

<html>

<head>
    <title>Inicio</title>
</head>

<body>


    <iframe id="header" src="header.php" height="100" width="101.2%" frameBorder="0" scrolling="no" ></iframe>

    <center>
    <h1 style="color:black; font-size:150px; ">Bienvenido!</h1>
    </center>
</body>
<style>
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
        background: crimson;
        padding: 8px;
        display: inline-block;
    }

#cerrarButton:hover {
    background: #800000;
}
#header {
    margin-left: -8px;
    margin-top: -8px;
    box-shadow: 5px 2px 10px #888888;
    margin-bottom: 17px;
}
body {
    background-color:#b3ffe6;
}
</style>
</html>
