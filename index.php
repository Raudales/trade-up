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
    <ul id="slide-out" class="side-nav">
        <?php
            session_start();
            if(isset($_SESSION['user'])){
        ?>
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="assets/img/back-profile.jpg">
                    </div>
                    <a href="#!user"><img class="circle" src="assets/img/<?php echo $_SESSION['img']; ?>"></a>
                    <a href="#!name"><span class="white-text name"><?php echo $_SESSION['user']; ?></span></a>
                    <a href="#!email"><span class="white-text email"><?php echo $_SESSION['email']; ?></span></a>
                </div>
            </li>
        <?php
            }
        ?>
            <br><li class="activo"><a class="waves-effect" href="index.php"><i class="material-icons left">home</i>Inicio</a></li><hr>
            <li><a class="waves-effect" href="productos.php"><i class="material-icons left">dashboard</i>Productos</a></li><hr>
            <?php 
                if(isset($_SESSION['user'])){}
                else{
                    echo "<li class=\"nav-menu\"><a href=\"login.php\"><i class=\"material-icons left\">assignment_ind</i>Iniciar sesión</a></li><hr>";
                }
            ?>
        <?php
            if(isset($_SESSION['user'])){
        ?>
            <li><a class="waves-effect" href="php/logout.php"><i class="material-icons">person_outline</i>Cerrar sesión</a></li><hr>
        <?php
            }
        ?>
    </ul>
    
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper grey darken-3 z-depth-2">
                <img src="assets/img/tradeUp.png" style="max-width: 55px; margin-top: 10px;margin-left:8px;">
                <a href="" class="brand-logo" style="margin-left: 10px">Trade Up</a>
                <a href="" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="nav-menu activo"><a href="#"><i class="material-icons left">home</i>Inicio</a></li>
                    <li class="nav-menu"><a href="productos.php"><i class="material-icons left">dashboard</i>Productos</a></li>
                    <?php 
                        if(isset($_SESSION['user'])){
                            echo "<li class=\"nav-menu\"><a href=\"php/logout.php\"><i class=\"material-icons left\">person_outline</i>Cerrar sesión</a></li><hr>";
                        }
                        else{
                            echo "<li class=\"nav-menu\"><a href=\"login.php\"><i class=\"material-icons left\">assignment_ind</i>Iniciar sesión</a></li><hr>";
                        }
                    ?>
                    </a></li><hr>
                </ul>
            </div>
        </nav>
    </div>

    <!--Body-->
    <div class="contenedor z-depth-1">
        <div class="carousel carousel-slider" data-indicators="true">
            <a class="carousel-item" href="#one!"><img src="assets/img/1.png"></a>
            <a class="carousel-item" href="#two!"><img src="assets/img/2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="assets/img/3.png"></a>
            <a class="carousel-item" href="#four!"><img src="assets/img/3.jpg"></a>
        </div>
        <div class="contenedor2">
            <!-- New products-->
            <h4 class="center">Nuevos productos</h4>
            <div class="divider"></div>
            <div class="row" style="margin-top: 15px">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/product/3.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Motorola G5 plus<i class="material-icons right">more_vert</i></span>
                            <p><a href="#" class="add-item" precio="5499" item="Moto G5 Plus">Añadir al carrito</a></p>
                            <p>$ 5,499</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Moto G5 Plus<i class="material-icons right">close</i></span>
                            <p>Pantalla 5.2", 1080 x 1920 pixels <br>
                               Procesador Snapdragon 625 2GHz <br>
                               2GB/3GB/4GB RAM <br>
                               32GB/64GB, microSD <br>
                               Cámara: 12 MP <br>
                               OS: Android 7.0 <br>
                               Perfil: 7.7 mm <br>
                               Peso: 155 g</p>
                            </div>
                        </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/product/1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Samsung J7<i class="material-icons right">more_vert</i></span>
                            <p><a href="#" class="add-item" precio="4999" item="Samsung J7">Añadir al carrito</a></p>
                            <p>$ 4,999</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Samsung J7<i class="material-icons right">close</i></span>
                            <p>Pantalla 5.2", 1080 x 1920 pixels <br>
                               Procesador Snapdragon 625 2GHz <br>
                               2GB/3GB/4GB RAM <br>
                               32GB/64GB, microSD <br>
                               Cámara: 12 MP <br>
                               OS: Android 7.0 <br>
                               Perfil: 7.7 mm <br>
                               Peso: 155 g</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/product/5.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Motorola G5 plus<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Añadir al carrito</a></p>
                            <p>$ 4,999</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Moto G5 Plus<i class="material-icons right">close</i></span>
                            <p>Pantalla 5.2", 1080 x 1920 pixels <br>
                               Procesador Snapdragon 625 2GHz <br>
                               2GB/3GB/4GB RAM <br>
                               32GB/64GB, microSD <br>
                               Cámara: 12 MP <br>
                               OS: Android 7.0 <br>
                               Perfil: 7.7 mm <br>
                               Peso: 155 g</p>
                            </div>
                        </div>
                    </div>
                </div>                
            <!-- About Trade Up -->
            <h4>¿Qué es Trade Up?</h4>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m4 l4"><br>
                    <img src="assets/img/trade.png" class="responsive-img">
                </div>
                <div class="col s12 m8 l8"><br>
                    <h5>Acerca de Trade Up</h5>
                    <p style="text-align: justify">
                        Es una tienda online que te permite el pago mediante <strong>PayPal</strong>, además de que una de sus caracteristicas 
                        principales es la posibilidad de navegar dentro de esta tienda en <strong>modo offline</strong>.
                        Esto es posible ya que el sitio se desarrollo con tecnologias nuevas, la tecnologia que permite esto
                        es un tipo de aplicaciones web denominadas <strong>Aplicaciones Web Progresivas</strong>.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
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
                        <h5 class="white-text"></h5>
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

    <script src="js/sw.js"></script>
    <script type="Text/javascript" src="js/minicart.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        paypal.minicart.render({
            strings: {
                button: 'Pagar',
                buttonAlt: 'Total',
                subTotal: 'Total',
                empty: 'No hay ningún producto'
            }
        });
        $(".add-item").click(function (e){
            e.stopPropagation();
            paypal.minicart.cart.add({
                business: 'dan.raudales.26@gmail.com',
                item_name: $(this).attr("item"),
                amount: $(this).attr("precio"),
                currency_code: 'MXN',
            })
        })
        $(document).ready(function(){            
            $("#side-bar").sideNav({});
            $(".button-collapse").sideNav({
                draggable: true
            });
            $('.carousel.carousel-slider').carousel({fullWidth: true});
        });
    </script> 
</body>
</html>