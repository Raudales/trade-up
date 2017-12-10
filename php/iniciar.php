<?php
    require "connection.php";
    if(isset($_POST['correo'])){
        $correo = $_POST['correo'];
        $pass = $_POST['password'];
        $password = md5($pass);

        if(is_null($user)){
            echo "error";
        }
        $mysqli = connect();
        if ($mysqli === false){
            die("ERROR: No se establecio la conexion. ". mysqli_connect_error());
        } 

        $mysqli->query("SET NAMES 'utf8'");

        $mysqli->real_query("SELECT nombre, ap_pat, email, pass FROM usuarios WHERE email = '$correo'");

        if ($resultado = $mysqli->use_result()) {

            while ($fila = $resultado->fetch_row()) {

                if ($fila[2] == $correo && $fila[3] == $pass) {

                    session_start();

                    $user = $fila[0]." ".$fila[1];
                    $_SESSION['user'] = $user;
                    $_SESSION['email'] = $fila[2];
                    
                    header("location: ../index.php");

                }            
                else {
                    echo "<script>alert(\"Usuario y/o contraseña incorrecto (s)\");</script>";
                    header("location: ../login.php");
                }

            }   

            $resultado->close();

        }
    }
    else {
        echo ":C";
    }