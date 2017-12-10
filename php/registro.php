<?php
    require "connection.php";
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $ap_pat = $_POST['ap_pat'];
        $sexo = $_POST['sexo'];
        if ($sexo == "H"){
            $img = "male.png";
        }
        else {
            $img = "female.png";
        }
        $correo = $_POST['email'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if ($pass == $pass2 ){

            $password = md5($pass);

            $mysqli = connect();

            if ($mysqli === false){
                die("ERROR: No se establecio la conexion. ". mysqli_connect_error());
            } 

            $mysqli->query("SET NAMES 'utf8'");

            $mysqli->real_query("INSERT INTO usuarios VALUES ('','$nombre','$ap_pat','$sexo','$img','$correo','$password')");

            header("location: ../login.php");
            
        }
        else {
            echo "<script>alert(\"Las contraseñas no coinciden\");</script>";
            header("location: ../login.php");
        }
    }
    else {
        echo ":C";
    }