<?php
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="assets/img/tradeUp.png">
    <!--Styles-->
    <link rel="stylesheet" href="css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Trade Up</title>
</head>
<body>
    <!--Navbar-->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper grey darken-3 z-depth-2">
                <img src="assets/img/tradeUp.png" style="max-width: 55px; margin-top: 12px;">
                <a href="" class="brand-logo" style="margin-left: 10px">Trade Up</a>
                <a href="" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="nav-menu"><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
                    <li class="nav-menu"><a href="productos.php"><i class="material-icons left">dashboard</i>Productos</a></li>
                    <li class="nav-menu"><a href="contacto.php"><i class="material-icons left">phone</i>Contacto</a></li>
                    <li class="nav-menu activo"><a href="login.php"><i class="material-icons left">assignment_ind</i>Iniciar sesión</a></li><hr>
                </ul>
            </div>
        </nav>
    </div>
    
    <ul id="slide-out" class="side-nav">
        <br><li><a class="waves-effect" href="index.php"><i class="material-icons left">home</i>Inicio</a></li><hr>
        <li><a class="waves-effect" href="#"><i class="material-icons left">dashboard</i>Productos</a></li><hr>
        <li><a class="waves-effect" href="contacto.php"><i class="material-icons left">phone</i>Contacto</a></li><hr>
        <li class="activo"><a href="login.php"><i class="material-icons left">assignment_ind</i>Iniciar sesión</a></li><hr>
    </ul>

    <!--Body-->
    <div class="contenedor z-depth-1">
        <div class="carousel carousel-slider" data-indicators="true">
            <a class="carousel-item" href="#one!"><img src="assets/img/1.png"></a>
            <a class="carousel-item" href="#two!"><img src="assets/img/2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="assets/img/3.png"></a>
            <a class="carousel-item" href="#four!"><img src="assets/img/3.jpg"></a>
        </div>

            <div class="contenedor2">
                <div class="row" style="margin-top: 15px">
                <ul class="tabs">
                    <li class="tab col s6 m6"><a class="active" href="#iniciar">Iniciar sesión</a></li>
                    <li class="tab col s6 m6"><a href="#registrarme">Registrarme</a></li>
                </ul>
                <div id="iniciar" class="col s12 m12"><br>
                    <h4>Inicia sesión</h4>
                    <div class="divider"></div>
                    <form method="post" class="col s12 m12 l12" action="php/iniciar.php">
                        <div class="row"><br>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">mail</i>
                                <input id="correo" name="correo" type="email" class="validate" required="true">
                                <label for="correo">Correo electronico</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" class="validate" required="true">
                                <label for="password">Contraseña</label>
                            </div>
                            <button class="btn center" type="submit">Iniciar sesión</button><br><br><br>
                        </div>
                    </form>
                </div>
                <div id="registrarme" class="col s12 m12"><br>
                <h4>Registrate</h4>
                <div class="divider"></div>
                <form method="post" class="col s12 m12 l12" action="../php/registro.php">
                        <div class="row"><br>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nombre" name="nombre" type="text" class="validate" required="true">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="ap_pat" name="ap_pat" type="text" class="validate" required="true">
                                <label for="ap_pat">Apellido paterno</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" name="email" type="email" class="validate" required="true">
                                <label for="email">Correo elétronico</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">wc</i>
                                <select name="sexo">
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">lock</i>
                                <input id="pass" name="pass" type="password" class="validate" required="true">
                                <label for="pass">Contraseña</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">lock</i>
                                <input id="pass2" name="pass2" type="password" class="validate" required="true">
                                <label for="pass2">Confirmar contraseña</label>
                            </div>
                        </div>
                        <button class="btn center" type="submit">Registrarme</button><br><br><br>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer -->
        <footer class="page-footer grey darken-3 z-depth-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Trade Up</h5>
                        <p class="grey-text text-lighten-4"></p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">Trade Up © 2017 Copyright</div>
            </div>
        </footer>
    </div>

    
    <script type="Text/javascript" src="js/minicart.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){            
            $('.carousel.carousel-slider').carousel({fullWidth: true});
            $('ul.tabs').tabs();
            $("#side-bar").sideNav({});
            $(".button-collapse").sideNav({
                draggable: true
            });
            $('select').material_select();
        });
    </script> 
</body>
</html>