<?php
    require "connection.php";
    if(isset($_POST['correo'])){
        $correo = $_POST['correo'];
        $pass = $_POST['password'];
        $password = md5($pass);

        $mysqli = connect();
        if ($mysqli === false){
            die("ERROR: No se establecio la conexion. ". mysqli_connect_error());
        } 

        $mysqli->query("SET NAMES 'utf8'");

        $mysqli->real_query("SELECT nombre, ap_pat, img_perfil, email, pass FROM usuarios WHERE email = '$correo'");

        if ($resultado = $mysqli->use_result()) {

            while ($fila = $resultado->fetch_row()) {

                if ($fila[3] == $correo && $fila[4] == $password) {

                    session_start();

                    $user = $fila[0]." ".$fila[1];
                    $_SESSION['user'] = $user;
                    $_SESSION['email'] = $fila[3];
                    $_SESSION['img'] = $fila[2];
                    
                    header("location: ../index.php");

                }            
                else {
                    echo "<script>alert(\"Usuario y/o password incorrecto (s)\");</script>";
                    echo "<br>";
                    echo "<a href=\"../login.php\" class=\"btn center\">Volver</a>";
                }

            }   

            $resultado->close();

        }
    }
    else {
        echo ":C";
    }