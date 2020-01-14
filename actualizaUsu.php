<?php
require_once('Conexion.php');
$ident=$_GET['inden'];
echo "$ident";
$consulta = "SELECT * FROM usuario WHERE idUsuario= '".$ident."'";
$Datos_usuario = mysqli_query($conexion,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_assoc($Datos_usuario);
//imprime el contenido del vector fila
//printr($fila);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Actualizacion</title>

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

        

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner"                >
                    <h4>Tabla de Registros</h4>
                    <h5>Ingresa la actualizacion de los datos ingresados para su modificacion</h5>
                </div>
            </div>
        </section>
        </img>
        <!--================End Banner Area =================-->
<!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">       

                                
                            <div class="contact_form">
                                
                                <div class="main_title">
                                    <h2 align="center">Llena los siguientes campos con la informacion de Registro actualizada<br></h2>
                                    
                                </div>
                                


                                <form class="contact_us_form row" action="GuardarActualizacionUsu.php?usuario=<?php echo $ident?>"    method="post" id="from1" name="from1" novalidate="novalidate">

                                    <H3 align="center">ID o nombre de Usuario<br></H3>
                                    <br>
                                    
<!--<label COLOR="navy" for="Celular">Celular: </label>
<input type="number" name="Celular" id="Celular"/>                             class="form-control"-->


                                        



                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="idUsuario" name="idUsuario" value="<?php echo $fila['idUsuario'];?>"/>
                                    </div>
                                    <H3 align="center">Ingrese su Nombre en los siguientes areas</H3>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Nombre" name="Nombre" value="<?php echo $fila['Nombre'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Paterno" name="Paterno" value="<?php echo $fila['Paterno'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Materno" name="Materno" value="<?php echo $fila['Materno'];?>"/>
                                    </div>          
                                    <H3 align="center">Datos domiciliarios</H3>
                                    <div class="form-group col-lg-12">
                                        <input type="number"  id="CodigoPostal" name="CodigoPostal" value="<?php echo $fila['CodigoPostal'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Calle" name="Calle" value="<?php echo $fila['Calle'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Colonia" name="Colonia" value="<?php echo $fila['Colonia'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Ciudad" name="Ciudad" value="<?php echo $fila['Ciudad'];?>"/>
                                    </div>
                                    <H3 align="center">Datos Academicos</H3>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Instituto" name="Instituto" value="<?php echo $fila['Instituto'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="number"  id="Promedio" name="Promedio" value="<?php echo $fila['Promedio'];?>"/>
                                    </div>
                                    <H3 align="center">Datos Medico</H3>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="TipoSangre" name="TipoSangre" value="<?php echo $fila['TipoSangre'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Discapacidad" name="Discapacidad" value="<?php echo $fila['Discapacidad'];?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text"  id="Otro" name="Otro" value="<?php echo $fila['Otro'];?>"/>
                                    </div>

                                    <!--<div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                    </div>-->
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control" >Enviar</button>
                                        <br>
                                        <button type="reset" value="submit" class="btn submit_btn2 form-control" >Deshacer Cambios</button>
                                       
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right_sidebar_area">
                                
                                <aside class="right_widget r_cat_widget">
                                    <div class="r_w_title">
                                        <h3>Universidades</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Salud y Bienestar</a></li>
                                        <li><a href="#">Arte y cultura</a></li>
                                        <li><a href="#">Ingenierias</a></li>
                                        <li><a href="#">Licenciaturas</a></li>
                                        
                                    </ul>
                                </aside>
                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>Mas solicitado</h3>
                                    </div>
                                    <ul>
                                        <li><a href="Licenciaturas e Ingenierias.html">Medicina</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Robotica</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Diseño de Modas</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Cine</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Enfermeria</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Industrial</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Civil</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Leyes</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Psicologia</a></li>
                                        <li><a href="Licenciaturas e Ingenierias.html">Nutricion</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->








        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <h2 align="center">Llena los siguientes campos con la informacion de Registro<br></h2>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                                
                                
                               
                               
                                
                            <div class="contact_form">
                                
                                <div class="main_title">
                                    
                                    
                                </div>
                                
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->

        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


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
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>