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
                    <li class="nav-menu activo"><a href="#"><i class="material-icons left">dashboard</i>Productos</a></li>
                    <li class="nav-menu"><a href="contacto.php"><i class="material-icons left">phone</i>Contacto</a></li>
                    <li class="nav-menu" id="side-bar" data-activates="slide-out"><a href="#"><i class="material-icons left">assignment_ind</i>Iniciar sesión</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="assets/img/back-profile.jpg">
                </div>
                <a href="#!user"><img class="circle" src="assets/img/male.png"></a>
                <a href="#!name"><span class="white-text name">Daniel Díaz Raudales</span></a>
                <a href="#!email"><span class="white-text email">dan.raudales.26@gmail.com</span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="index.php"><i class="material-icons left">home</i>Inicio</a></li><hr>
        <li class="activo"><a class="waves-effect" href="#"><i class="material-icons left">dashboard</i>Productos</a></li><hr>
        <li><a class="waves-effect" href="contacto.php"><i class="material-icons left">phone</i>Contacto</a></li><hr>
        <li><a class="waves-effect" href="#!"><i class="material-icons">mode_edit</i>Editar perfil</a></li><hr>        
        <li><a class="waves-effect" href="#!"><i class="material-icons">local_offer</i>Mis productos</a></li><hr>        
        <li><a class="waves-effect" href="#!"><i class="material-icons">local_grocery_store</i>Carrito de compras</a></li><hr>
        <li><a class="waves-effect" href="#!"><i class="material-icons">markunread_mailbox</i>Mis mensajes</a></li><hr>
        <li><a class="waves-effect" href="#!"><i class="material-icons">person_outline</i>Cerrar sesión</a></li><hr>
    </ul>

    <!--Body-->
    <div class="contenedor z-depth-1">
        <div class="contenedor2">
            <!-- New products-->
            <br>
            <h3 class="center">Nuestros productos</h3><br>
            <div class="divider"></div>

            <?php
                require 'php/connection.php';
                $i = 0;
                $products = array ();
                $mysqli = connect();
                if ($mysqli === false){
                    die("ERROR: No se establecio la conexion. ". mysqli_connect_error());
                } 
                $mysqli->real_query("SELECT * FROM productos");        
                $resultado = $mysqli->use_result();
                while ($fila = $resultado->fetch_assoc()) {
                    $products[$i][0] = $fila['id'];
                    $products[$i][1] = $fila['producto'];
                    $products[$i][2] = $fila['precio'];
                    $products[$i][3] = $fila['descrip'];
                    $products[$i][4] = $fila['img'];
                    $i++;
                }
                $i = 0;
                $counter=0;
                $size = count($products);
                while($i<$size){
                    echo "<div class=\"row\" style=\"margin-top: 15px\">";
                    for ($j=0;$j<3;$j++){
                        echo "<div class=\"col s12 m4\">";
                        echo "   <div class=\"card\">";
                        echo "        <div class=\"card-image waves-effect waves-block waves-light\">";
                        echo "            <img class=\"activator\" src=\"assets/product/".$products[$counter][4]."\">";
                        echo "        </div>";
                        echo "        <div class=\"card-content\">";
                        echo "            <span class=\"card-title activator grey-text text-darken-4\">".$products[$counter][1]."<i class=\"material-icons right\">more_vert</i></span>";
                        echo "            <p><a href=\"#\" class=\"add-item\" precio=\"".$products[$counter][2]."\" item=\"".$products[$counter][1]."\">Añadir al carrito</a></p>";
                        echo "            <p>$ ".$products[$counter][2]."</p>";
                        echo "        </div>";
                        echo "        <div class=\"card-reveal\">";
                        echo "            <span class=\"card-title grey-text text-darken-4\">".$products[$counter][1]."<i class=\"material-icons right\">close</i></span>";
                        echo "            <p>".$products[$counter][3]."</p>";
                        echo "        </div>";
                        echo "    </div>";
                        echo "</div>";
                        $counter++;
                    }
                    echo "</div>";
                    $i = $i+3;
                }
            ?>


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