<?php
require_once('Conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Eliminar</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->
        

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="universidad.php">Universidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="carreras.php">Carreras</a></li>
                        <li class="nav-item active"><a class="nav-link" href="static.php">Registros</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Conocenos</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                        <li><a href="#"><i class="icon_bag_alt"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Ingresa el ID para Modificar la informacion del Registro o Usuario</h4>

                    <!--<ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
                        <li><a href="carreras.<?php  ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Carreras</a></li>
                        <li><a href="Licenciaturas e Ingenierias.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Licenciatura o Ingenierias</a></li>
                    </ul>-->
                </div>
            </div>
        </section>
        

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <h2 align="center">Selecione la tabla que desae modificar para eliminar un nuevo resultado<br>Una vez Eliminado un resultado no se podran recuperar los datos</h2>
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                                <div class="static_social">
                                    
                                </div>
                                                       
                                <div class="contact_form">
                                
                                <div class="main_title">
                                    
                                    
                                </div>
                                
                                <form class="contact_us_form row" action="eliminarReg.php".method="Get" id="from1" name="from1" novalidate="novalidate">

                                    <H3 align="center">Ingrese el ID de Registro<br></H3>
                                    <br>
                                    
<!--<label COLOR="navy" for="Celular">Celular: </label>
<input type="number" name="Celular" id="Celular"/>                             class="form-control"-->


                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text"  name="inden" placeholder="idRegistro"/>
                                    </div>
                                    
                                    
                                    <!--<div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                    </div>-->
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control" >Eliminar</button>
                                    </div>
                                    <!--================End Banner Area =================-->
        <section >
            <div >
                <h4 align="center">Lista de Registros en universidades</h4>
                <?php
                                //Enviamos la consulta a la base de datos seleccionada
                                $resultado=mysqli_query($conexion,'SELECT*FROM registro');
                                ?>
                                <table ALIGN=CENTER width="1300" border="5">

                                    <tr>
                                        
                                        <th scope="col">idRegistro&nbsp;</th>
                                        <th scope="col">Nombre &nbsp;</th>
                                        <th scope="col">Paterno &nbsp;</th>
                                        <th scope="col">Materno &nbsp;</th>
                                        <th scope="col">Instituto&nbsp;</th>
                                        <th scope="col">Universidad &nbsp;</th>
                                        <th scope="col">Carrera &nbsp;</th>
                                        
                                        
                                    </tr>
                                <?php
                                //Extraemos cada fila de la Matriz
                                while($fila=mysqli_fetch_array($resultado))
                                {
                                    echo "<tr align=\"center\">";
                                    echo "<tr>";
                                   
                                    echo "<td>".$fila['idRegistro']."</td>";
                                    echo "<td>".$fila['Nombre']."</td>";
                                    echo "<td>".$fila['Paterno']."</td>";
                                    echo "<td>".$fila['Materno']."</td>";
                                    echo "<td>".$fila['Instituto']."</td>";
                                    echo "<td>".$fila['idUniversidad']."</td>";
                                    echo "<td>".$fila['idCarreras']."</td>";
                                    echo"</tr>";
                                }
                                ?>
                                </table>
                
            </div>
        </section>
                                </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->
<!--================End Banner Area =================-->

        

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <!--<h3>Our Newsletter</h3>-->
                                </div>
                                <!--<p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>-->
                                <!--<ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>-->
                        </div>
                        <!--<div class="col-lg-3 col-md-6">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h3>Twitter Feed</h3>
                                </div>
                                <div class="tweets_feed"></div>
                            </aside>
                        </div>-->
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget categories_widget">
                                <div class="f_w_title">
                                    <h3>Link Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Inicio</a></li>
                                    <li><a href="universidad.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Universidades</a></li>
                                    <li><a href="carreras.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Carreras</a></li>                                    
                                    <li><a href="Licenciaturas e Ingenierias.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Licenciaturas e Ingenierias</a></li>
                                    <li><a href="static.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Registros</a></li>
                                    <li><a href="Desarrolladores.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Desarrolladores</a></li>
                                    <!--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>-->
                                </ul>
                                 <!--<ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                                </ul>-->
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contactanos</h3>
                                </div>
                                <a href="#">2228 230 313</a>
                                <a href="#">asael.luna99@gmail.com</a>
                                <a href="#">Valten12@outlook.com</a>
                                <a href="#">crgio_roman@hotmail.com</a>
                                <p>5 Poniente No.708 Colonia. Centro<br />Puebla, Pue.</p>
                                <h6>Cominicate con nosotros de: 8:00AM-8:00PM Lunes-Viernes</h6>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <!--<h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>-->
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <!--<a class="nav-link active" href="#">Disclaimer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Advertisement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
