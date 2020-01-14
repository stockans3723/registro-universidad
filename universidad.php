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
        <title>Universidades</title>

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
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
<br>
<br>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item active"><a class="nav-link" href="universidad.php">Universidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="carreras.php">Carreras</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="static.php">Registros</a></li>
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

        <!--================Project Area =================-->
        <section class="project_area">
            <div class="container">
                <div class="project_inner">
                    <div class="center_title">
                        <h2>Nosotros nos encargaremos de brindarte la informacion para iniciar tu viaje</h2>
                        <p>Comienza tu camino</p>
                    </div>
                    <a class="tp_btn" href="Licenciaturas e Ingenierias.html">Buscar carreras</a>
                </div>
            </div>
        </section>
        <!--================End Project Area =================-->

        <!--================Creative Feature Area =================-->
        <!--<section class="creative_feature_area">
            <div class="container">
                <div class="c_feature_box">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="c_box_item">
                               <a href="#"><h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Confianza</h4></a>
                                <p>Nuestra pagina contiene contenido real y actual de cada una de las intituciones, ademasde tomar en cuenta tu opinion para mejorar </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-clock-o" aria-hidden="true"></i> Asesoramiento</h4></a>
                                <p>No estas solo nosotros podemos ayudarte, solo tienes que contactarnos y estaremos a tu disposicion </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-diamond" aria-hidden="true"></i> Calidad</h4></a>
                                <p>Cada una de nuestra opciones son reconocidos a nivel nacional, ademas de que brindan experiencia y conocimiento a cada uno de sus estuduantes</p>
                            </div>
                        </div>
                    </div>
                </div>-->
<!--Bloque uno Orientacion-->
                <div class="digital_feature p_100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d_feature_text">
                                <div class="main_title">
                                    <h2>La Universidad que buscas  <br />la encotraras aqui</h2>
                                </div>
                                <p>en nuestras opciones encontraras la oportunidad para sobresalir, destacar y mostrar de que estas hecho, con nuestra ayuda y tu dedicasion formaremos al profesionalista que llevas dentro.</p>
                                <?php
                                //Enviamos la consulta a la base de datos seleccionada
                                $resultado=mysqli_query($conexion,'SELECT*FROM universidades');
                                ?>
                                <table ALIGN=CENTER width="650" border="20" class="nav" >

                                    <tr>
                                        <th scope="col"> Id &nbsp;</th>
                                        <th scope="col">Universidad&nbsp;</th>
                                        <th scope="col">Tipo&nbsp;</th>
                                        <th scope="col">Modalidad&nbsp;</th>
                                        <th scope="col">Especialidad &nbsp;</th>
                                    </tr>
                                <?php
                                //Extraemos cada fila de la Matriz
                                while($fila=mysqli_fetch_array($resultado))
                                {
                                    echo "<tr align=\"center\">";
                                    echo "<tr>";
                                    echo "<td>".$fila['idUniversidades']."</td>";
                                    echo "<td>".$fila['NombreUni']."</td>";
                                    echo "<td>".$fila['Tipo']."</td>";
                                    echo "<td>".$fila['Modalidades']."</td>";
                                    echo "<td>".$fila['Especialidades']."</td>";
                                    echo"</tr>";
                                }
                                ?>
                                </table>
                                <p>Consulta las carreras disponibles para conocer mas</p>
                                <a aligh=center class="read_btn" href="#">Carreras</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d_feature_img">
                                <img src="img/feature-right.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Creative Feature Area =================-->

        <!--================Industries Area =================-->
        <section class="industries_area">
            <div class="left_indus">
                <div class="indus_img">
                    <img src="img/indus-laptop.png" alt="">
                </div>
            </div>
            <div class="right_indus">
                <div class="indus_text">
                    <div class="main_title">
                        <h2>Valoracion Universitaria</h2>
                        <p>Cada una de nuestras opciones brinda gran porcentaje de bienestar por parte de nuestra universidades por lo caul la valoracion de los estudiantes es muy importante, ademas de que puedes tomar en cualta la valoracion de cada una para elegir tu mejor opción .</p>
                    </div>
                    <div class="our_skill_inner">
                        <div class="single_skill">
                            <h3>Salud y Bienestar</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">90</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Licenciaturas</h3>
                            <div class="progress" data-value="95">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">95</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Ingenierias</h3>
                            <div class="progress" data-value="80">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">80</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Arte y cultura</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">90</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="read_btn" href="carreras.php">Carreras</a>
                    <br>
                </div>
            </div>
        </section>
        <!--================End Industries Area =================-->

        <!--================Our Service Area =================-->
        <section class="service_area">
            <div class="container">
                <div class="center_title">
                    <h2>Nuestros Servicios</h2>
                    <p>Te brindamos las herramientas e informacion para que comience un nuevo camino<br>ahora es tiempo de que analises y actues</p>
                </div>
                <div class="row service_item_inner">
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-ruler-pencil"></i>
                            <h4>Carreras</h4>
                            <p>Tenemos variedad de especialidades que se ajusten a tus necesidades ademas de cuatro universidades de donde elegir </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-desktop"></i>
                            <h4>Registros</h4>
                            <p>El proceso de registro es muy sencillo y como tal no perderas mucho tiempo</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-announcement"></i>
                            <h4>Comunicasiso</h4>
                            <p>Puedes contactarte con caulquiera de los especialitas disponibles y aclarar tus dudas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->

        <!--================Testimonials Area =================-->
       <!-- <section class="testimonials_area p_100">
            <div class="container">
                <div class="testimonials_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                            <div class="media-body">
                                <img src="img/dotted-icon.png" alt="">
                                <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                                <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                            <div class="media-body">
                                <img src="img/dotted-icon.png" alt="">
                                <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                                <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                            <div class="media-body">
                                <img src="img/dotted-icon.png" alt="">
                                <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                                <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================End Testimonials Area =================-->



        <!--================Latest News Area =================-->
    <!--    <section class="latest_news_area p_100">
            <div class="container">
                <div class="b_center_title">
                    <h2>Latest News</h2>
                    <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
                </div>
                <div class="l_news_inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>We Create Experiences</h4></a>
                                    <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-2.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>Simple, Fast And Fun</h4></a>
                                    <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-3.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>Device Friendly</h4></a>
                                    <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                                    <a  href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================End Latest News Area =================-->
    

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
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Inicio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Universidades</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Carreras</a></li>
                                    <li><a href="Licenciaturas e Ingenierias.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Licenciaturas e Ingenierias</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Registros</a></li>
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
