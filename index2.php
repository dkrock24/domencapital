<?php

if ( isset($_GET['d'])) {
    ?>
    <script>
        alert("Gracias por contactarnos.");
        window.location.href = "index.php";
    </script>
    <?php
}
if ( isset($_GET['s'])) {
    ?>
    <script>
        alert("Gracias por suscribirse.");
        window.location.href = "index.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html">
    <title>Docreative</title>

    <link rel="icon" type="image/x-icon" href="docreative.ico">

    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style_responsive.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/top_menu.js"></script>
    <script src="js/cookie.js"></script>

    <meta name="google-site-verification" content="VGfXm6Jra8fREiLbuoWDzOspx4SaepUrq7949A8b8Cc"/>

    

</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RP06B66CNZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RP06B66CNZ');
</script>
<body>
    
    <section class="home" id="home">
        <div class="row"></div>
        <div class="row menu">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="logo-letras">
                            <span class="letter-d"><img class="d-letter" src="assets/images/seccion_1/d.png"/></span>
                            <span class="letters"><img class="docreative" src="assets/images/seccion_1/creativa.png"/></span>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-8">
                        <div class="topnav menu-list" id="myTopnav">
                            <a href="#home" class="active">HOME</a>
                            <a href="#section2">¿QUIÉNES<br>SOMOS?</a>
                            <a href="#section4">SERVICIOS</a>
                            <a href="#section6">CONTÁCTANOS</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                              <i class="fa fa-bars"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <ul class="menu-media">
                            <li><a href="https://www.facebook.com/Docreative-105695411987915" target="_blank" alt="Facebook"> <img src="assets/images/seccion_1/icono-fb.png" /> </a></li>
                            <li><a href="https://instagram.com/docreativesv?igshid=YmMyMTA2M2Y=" target="_blank" alt="Instagram"> <img src="assets/images/seccion_1/icono-ig.png" /> </a></li>
                            <!-- <li><a href=""></a> <img src="assets/images/seccion_1/icono-lupa.png" /> </a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row linea"></div>

        <div class="row inicio">
            <div class="col-md-3"></div>
            
            <div class="col-md-6">
                <span class="inicio_txt0">
                    
                    <p class="inicio_txt1">
                    <span class="letter-yellow">CAMBIAMOS</span> LA MANERA DE HACER NEGOCIOS
                        <!-- ¿QUÉ ESPERAS,<br> PARA <span class="letter-yellow">RENTABILIZAR</span><br> TU NEGOCIO? -->
                    </p><br>

                    <p class="inicio_txt2">
                        Ofrecemos servicios especializados para todo tipo de industrias.
                    </p><br>

                    <p class="inicio_txt3">
                        <span class="conocenos">¡Conócenos!</span>
                    </p>

                </span>
            </div>

            <div class="col-md-3"></div>
        </div>

    </section>

    <section class="section2" id="section2">
        <div class="row">
            
            <div class="col-md-2">
                <p class="cruz">
                    <img class="images1" src="assets/images/seccion_2/figuras/Grupo 479.png" alt="">
                </p>
            </div>
            
            <div class="col-md-8">
                <p class="section2-text1">
                    ¿Qué hacemos diferente?
                </p><br>
                <p class="section2-text2">
                    Ofrecemos servicios de asesorias y diseño para tu empresa
                </p>
            </div>
            
            <div class="col-md-2">
                <p class="cruz">
                    <img class="images2" src="assets/images/seccion_2/figuras/Grupo 480.png" alt="">
                </p>
            </div>
            <br>
        </div>

        <div class="row">
            <div class="col-md-1">
                <p class="cruz">
                    <img class="images1" src="assets/images/seccion_2/figuras/Grupo 481.png" alt="">
                </p>
            </div>
            <div class="col-md-2">
                <div class="block1"><br>
                    <img class="iconos" src="assets/images/seccion_2/icconos/11.png"  alt="">
                    <p class="block-text2">Definimos el proceso a seguir</p>
                    <!--<p class="block-text">
                        Hacemos uso de muchas y diferentes herramientas como lo son las redes sociales
                        en la actualidad para dar a conocer tus producto o servicios.
                    </p>-->
                </div>
            </div>
            <div class="col-md-2">
                <div class="block1"><br>
                    <img class="iconos" src="assets/images/seccion_2/icconos/22.png"  alt="">
                    <p class="block-text2">Nos enriquecemos de la data</p>
                    <!--<p class="block-text">
                        Hacemos uso de muchas y diferentes herramientas como lo son las redes sociales
                        en la actualidad para dar a conocer tus producto o servicios.
                    </p>-->
                </div>
            </div>
            <div class="col-md-2">
                <div class="block2"><br>
                    <img class="iconos" src="assets/images/seccion_2/icconos/33.png"  alt="">
                    <p class="block-text2">Delimitamos el alcance y nos enfocamos en las variables planteadas</p>
                    <!--<p class="block-text">
                        Brindamos nuevas e innovadoras ideas para nuevas empresas así como
                        emprendedores y pequeños emprendimientos en constante crecimiento. <br><br>
                    </p>-->
                </div>
            </div>
            <div class="col-md-2">
                <div class="block3"><br>
                    <img class="iconos" src="assets/images/seccion_2/icconos/44.png"  alt="">
                    <p class="block-text2">Implementamos y validamos modelos</p>
                    <!--<p class="block-text">
                        Nos enfocamos en varios puntos específcos para hacer crecer tu empresa,
                        negocio o emprendimiento de esa forma garantizamos el 100% de nuestro trabajo. <br>
                    </p>-->
                </div>
            </div>
            <div class="col-md-2">
                <div class="block4"><br>
                    <img class="iconos" src="assets/images/seccion_2/icconos/55.png"  alt="">
                    <p class="block-text2">Aplicamos machine learning</p>
                    <!--<p class="block-text">
                        Puedes optar por asesorías tanto presenciales como en línea, para tu mayor comodidad, 
                        nos apegamos a tu presupuesto e ideas iniciales. <br><br><br>
                    </p>-->
                </div>
            </div>
            <div class="col-md-1">
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <p class="grilla"></p>
            </div>
        </div>

    </section>


    <section class="section3" id="section3">
        <div class="row">
            <div class="col-md-4">
            </div>s
            <div class="col-md-4">
                <img class="images4" src="assets/images/seccion_3/imagenes/personas.png" alt="">
            </div>
            <div class="col-md-4">
               
            </div>
        </div>
        <div class="row section3-line">
            <div class="col-md-12">
                <div class="row" style="margin-left: 0px;">
                    <div class="col-md-6">
                        <p class="section3-txt1">¿Quienes<br>somos?</p>
                    </div>
                    <div class="col-md-6">
                        <div class="cuadro">
                            Docreative es una boutique de BI en la cual nos especializamos en liderar
                            los cambios e innovaciones digitales dentro de las empresas.
                            <br> <br>
                            Recepcionamos Data, la analizamos y creamos estrategias que al aplicarlas mejoran
                            la rentabilidad de las empresas.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            &nbsp; <br>
            &nbsp; <br>
            &nbsp; <br>
            &nbsp; <br>
        </div>
    </section>

    <section class="section4 servicios" id="section4">
        <div class="row">
            <div class="col-md-6">

                <div class="row s4-icon" style="padding-top: 5%;">
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-estrategias_de_marketing_digital.png" alt="">
                        <p class="text-icon">Estrategias de marketing digital</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-funnel_de_marketing.png" alt="">
                        <p class="text-icon">Funnel de marketing</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-diseño_y_desarrollo_de_sitio_web.png" alt="">
                        <p class="text-icon">Diseño y desarrollo de sitios web</p>
                    </div>
                </div>

                <div class="row" style="padding-top: 5%;">
                    <div class="col-md-12" style="background: orange; border-radius: 0px 20px 20px 0px;">
                        <p class="servicios-txt1">Nuestros Servicios</p>
                    </div>
                </div>

                <div class="row s4-icon" style="padding-top: 5%;">
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-administracion_de_redes_sociales.png" alt="">
                        <p class="text-icon">Administración de redes sociales</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-servicio_de_fotografias_y_video.png" alt="">
                        <p class="text-icon">Servicio de fotografías y video</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-branding.png" alt="">
                        <p class="text-icon">Branding</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 test">

                <div class="row">
                    <div class="col-md-12">
                        <p class="section4-laptop">
                            <img class="latop" src="assets/images/seccion_4/imagenes/laptop.png" alt="">
                        </p>
                    </div>                    
                </div>

                <div class="row icons-pc s4-icon">
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-e-commerce.png" alt="">
                        <p class="text-icon2">E-commerce</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-optimizacion de Seo.png" alt="">
                        <p class="text-icon2">Optimization de SEO</p>
                    </div>
                    <div class="col-md-4 icon-section4" style="text-align: center;">
                        <img class="circle-icon" src="assets/images/seccion_4/iconos/icono-estrategias_de_comunicacion.png" alt="">
                        <p class="text-icon2">Estrategia de comunicacion</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 icon-section4"></div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 linea-spacio"><br><br><br></div>
        </div>
    </section>

    <section class="section5 companies" id="section5">
        <div class="row section5_fondo">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div class="section5-text">
                            <div class="section5-linea">&nbsp; <br>&nbsp; <br>&nbsp; <br></div>
                            ¡Ellos confían en nosotros!
                        </div>
                    </div>
                    <div class="col-md-2 section5-cruz">
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                        &nbsp; <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 logos">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_CONSTRUFIX.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_CONSTRUAIRE.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_AIREPLUS.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_SELIMTEC.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_LA_FURGONERA.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_LITORAL_INMOBILIARIA.png" alt="">
                    </div>
                    <div class="col-md-12 logos">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO THE GREEN TRUCK.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO TERRAMIA.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_FIVIS.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGOKARTISMO.png" alt="">
                        <img class="logo-company" src="assets/images/seccion_5/logos/LOGO_NOVOARTE.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-3">
                <div class="section5-linea2">&nbsp; <br>&nbsp; <br>&nbsp; <br>&nbsp; <br>&nbsp; <br></div>
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </section>

    <section class="section6 contactanos" id="section6">
        
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 10%;"></div>
        </div>

        <div class="row section6-fondo">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <p class="section6-text">
                            ¡EMPIEZA A <label class="section6-text2">MONETIZAR</label> TU NEGOCIO AHORA!
                            <!-- ¿QUÉ ESPERAS PARA <label class="section6-text2">RENTABILIZAR</label> TU NEGOCIO? -->
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="form-contactanos">
                                    <form action="contacto.php" method="POST" name="escribenos">
                                    <table class="table noborder form-inputs">
                                        <tr>
                                            <td><p class="escribenos">¡ESCRÍBENOS!</p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="comentarios"><b> ¡Haznos saber tus comentarios!</b> </p> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control input-color" type="text" name="name" placeholder="Nombre" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control input-color" type="email" name="email" placeholder="E-mail" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control input-color" type="phone" name="movil" placeholder="Teléfono de contacto" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea class="form-contorl input-color" name="comentario" name="comentario" cols="30" rows="3"></textarea>                                       
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" name="enviar" value="ENVIAR" class="btn btn-primary btn-contact" />
                                            </td>
                                        </tr>
                                    </table>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="subscribete" id="subscribete">
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 10%;"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <p class="footer-text">SUSCRÍBETE</p>
                <p class="footer-text22">
                    <!--Suscríbete a nuestras noticias para estar informado de lo ultimo
                    en maketing para tu empresa, negocio o emprendimiento. -->
                    Entérate de las últimas tendencias en marketing y negocios para tu emprendimiento o empresa. <br><br>
                </p>
                <form action="suscribirse.php" method="post" name="suscribirse">
                    <input type="email" class="sub-input" placeholder="Email" name="subscribir-email"><br><br>
                    <input type="submit" class="sub-btn" name="subscribir-send" value="Suscribirse">
                </form>
            </div>
            <div class="col-md-2">
                <p class="footer-text">SOCIAL</p>
                <p class="footer-text2">
                    <ul class="footer-text2">
                        <li><a href="https://www.facebook.com/Docreative-105695411987915" target="_blank" alt="Facebook"><img class="icon-footer" src="assets/images/seccion_6/iconos/icono-fb.png" /> Facebook</a></i><br><br>
                        <li><a href="https://instagram.com/docreativesv?igshid=YmMyMTA2M2Y=" target="_blank" alt="Instagram"><img class="icon-footer" src="assets/images/seccion_6/iconos/icono-ig.png" /> Instagram</a></li>
                    </ul>
                </p>
            </div>
            <div class="col-md-2">
                <p class="footer-text">SITIO</p>
                <ul class="footer-text2">
                    <li><a href="#home" style="text-decoration: none;">Home</a></li><br>
                    <li><a href="#section2">Quiénes somos?</a></li><br>
                    <li><a href="#section4">Nuestros servicios</a></li><br>
                    <li><a href="#section6">Escríbenos</a></li>
                </ul>

            </div>
            <div class="col-md-3">
                <p class="footer-text">CONTACTOS</p>
                <ul class="footer-text2">
                    <li><img class="icon-footer" src="assets/images/seccion_6/iconos/icono-ubicacion.png" /> Calle La Reforma #209, Col. San Benito, San Salvador, El Salvador</li><br>
                    <li><img class="icon-footer" src="assets/images/seccion_6/iconos/icono-email.png" /> marketing@domencapital.com </li><br>
                    <li class="footer-text3"><img  src="assets/images/seccion_6/iconos/icono-whatsapp.png" /> (503) 7745-5161</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 10%;"></div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="images1" src="assets/images/seccion_2/figuras/Grupo 481.png" alt="">
            </div>
            <div class="col-md-6">
                <span class="linea-grilla-1"></span>
                <span>
                    <!-- <img src="assets/images/seccion_6/iconos/icono-flecha.png" alt="" onclick="scrollup()" id="myBtn" class="flecha-up scrollup"> -->
                </span>
                <p class="grilla"></p>
            </div>
        </div>

    </section>

    <section class="terminos" id="terminos">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 terminos">
                <div id="terminos">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
                    Términos y Condiciones
                    </button>
                </div>
            </div>
            <div class="col-md-3 condiciones">
                <div id="condiciones">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cookies">
                    Políticas de Cookies
                    </button>
                </div>
            </div>
            <div class="col-md-5">
            <img src="assets/images/seccion_6/iconos/icono-flecha.png" alt="" onclick="scrollup()" id="myBtn" class="flecha-up scrollup">
            </div>
        </div>
    </section>

    <section class="final" id="final">

        <div class="row">
            <div class="col-md-12 final-line">
                <p class="final-text">Powered by <b>DOMEN CAPITAL</b></p>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.link/ecgajy" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

</body>
</html>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><h3>Términos y Condiciones</h3></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <iframe src="terminos.html" height="500" width="100%">

            </iframe>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" style="background: hsl(333deg 77% 34%);">Cerrar</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="cookies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><h3>Política de Cookies</h3></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <b><i class="fa fa-info-circle" style="color: hsl(333deg 77% 34%); font-size: 22px;"></i>
                        Usamos cookies para mejorar su experiencia de navegación en nuestra web, 
                        para mostrarle contenidos personalizados y para analizar el tráfico en nuestra web.
                        </b>
                    </p>
                </div>
            </div>
            <iframe src="cookies.html" height="500" width="100%">

            </iframe>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="setCookie()" data-dismiss="modal" style="background: hsl(333deg 77% 34%);">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Rechazar</button>
        </div>
    </div>
    </div>
</div>


<link rel="stylesheet" href="css/top_nave.css">

<style>
@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {

    body{
    }

    .inicio {
      -webkit-backdrop-filter: blur(10px);
      backdrop-filter: blur(10px);
    }
  }
  
  /* slightly transparent fallback for Firefox (not supporting backdrop-filter) */
  @supports not ((-webkit-backdrop-filter: none) or (backdrop-filter: none)) {
    body{
       
    }
    .inicio {
      background-color: rgba(255, 255, 255, .8);
    }
  }
</style>