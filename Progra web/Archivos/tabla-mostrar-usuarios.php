<?php
session_start();
require "lista_administradores.php";

error_reporting(0);
if ($_SESSION["id"] > 0) {

} else {
    header("Location: login.php");
}
?>

<html>

<head>
    <title>Mostrar Administradores</title>

    <script src="resource/jquery-3.3.1.js"></script>
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
    <script>
        function eliminarRegistro(deleteId) {
            if (confirm("Desea eliminar al usuario con ID: " + deleteId)) {
                console.log(deleteId);
                $.ajax({
                    type: "post",
                    url: "eliminar_usuario.php",
                    data: {
                        id: deleteId
                    },

                    success: function() {
                        $('#' + deleteId).hide();
                        myFunction("Usuario con ID: "+deleteId+" eliminado con exito");
                        ("Usuario: " + deleteId + " Eliminado.");
                    }
                })
            }
            else {
                myFunction("Eliminacion de usuario cancelada");
            }
        }
    </script>

</head>

<body>

    <iframe id="header" src="header.php" height="100" width="101.2%" frameBorder="0" scrolling="no"></iframe>

    <br>
    <div id="alta-back">
        <a class="backButton" href="home.php">Regresar</a>
    </div>
    <br>

    <div id="tabla-admins">

        <table>
            <tr>
                <td colspan="7" style="text-align: center; background-color:#4d94ff; color:white;"><br> Administradores <br><br></td>
            </tr>

            <tr>
                <td><a>Foto</a></td>
                <td><a>ID</a></td>
                <td><a>Nombre</a></td>
                <td><a>Correo</a></td>
                <td><a>Rol</a></td>
                <td>

                </td>
            </tr>

            <?php generarRows(); ?>
            <div id="snackbar" name="snackbar"></div>

        </table>
    </div>
    <br><br>
     <center>
       <a class="backButton" href="Formulario.php" id="alta">Registrar nuevo Administrador</a>
     </center>

    <style>
        #header {
            margin-left: -8px;
            margin-top: -8px;
            box-shadow: 5px 2px 10px #888888;
            margin-bottom: 17px;
        }

        body {
            background: #b3ffe6;
            font-family: Arial, Helvetica, sans-serif;
        }

        .backButton {
            text-decoration: none;
            border-radius: 8px;
            text-align: end;
            padding: 8px;
            background: #ffb84d;
            color: white;
            font-size: 30 px;
            margin-inline-start: 10px;
        }

        .backButton:hover {
            background: orange;
            color: white;
        }

        #alta {
            margin-right: 10px;
            margin-top: -8px;
            background: #4CAF50;
        }

        #alta:hover {
            background: rgb(49, 114, 51);
        }

        .profile-pic {
            width: 100%;
            max-width: 100px;
        }

        table {
            border: solid 3px gray;
            background: white;
            border-radius: 5px;
        }

        td {
            border-radius: 3px;
            padding-left: 10px;
            padding-right: 10px;
            border: solid 1px gray;
        }

        .row {
            height: 110px;
        }

        #alta-back {
            width: 100%;
            margin-right: 50px;
        }

        table {
            margin: auto;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            border-radius: 6px;
            padding: 2px;
            padding-left: 6px;
            padding-right: 6px;
            background: darkgrey;
            color: white;
        }

        .button:hover {
            background: rgb(99, 99, 99);
            color: white;
        }

        .eliminarButton {
            background: #e00909;
        }

        .eliminarButton:hover {
            background: #910707;
        }

        .editarButton {
            margin-bottom: 3px;
        }
    </style>
</body>

</html>
