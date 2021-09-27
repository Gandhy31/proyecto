<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(isset($_SESSION['idG'])){
      $id=$_SESSION['idG'];
      header("Location: index2.php?id=$id");
    }else if(isset($_SESSION['idA'])){
      $id=$_SESSION['idA'];
      header("Location: admin1.php?id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLANTILLA | WEB 3</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.png" />                          <!--Favicon...Icono de la pestaña-->

 
</head>

<body>
 
  <div class="loader"></div>
  <div id="myDiv">
    
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <div id="logolibre">
            <img id="loguito" src="img/inua-logo4.png" alt="Imagen de Logotipo">
          </div>
          <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>  
              </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" id="barra-superior">
                 
                  <li class="active"><a href="#main-header">Inicio</a></li>
                  <li class=""><a href="#feature">Acerca de</a></li>
                  <li class=""><a href="#service">Servicios</a></li>
                  <li class=""><a href="#portfolio">Cursos</a></li>
                  <li class=""><a href="#testimonial">Testimonios</a></li>
                  <li class=""><a href="#blog">Instructores</a></li>
                  <li class=""><a href="#contact">Contacto</a></li>
                </ul>


                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-left">
                    <li class=""><a href="login.php">Iniciar Sesión</a></li>
                    <li class=""><a href="registro.php">Registrarse</a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </header>
       
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">¿POR QUÉ ESTUDIAR EN INUA?</h2>
            <p class="sub-title pad-bt15">Tu futuro inicia aquí.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Malla Completa</h3>
              <p>Aprende de 0 a 100. El contenido está perfectamente estructurado para que tengas un proceso de aprendizaje integral</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Clases Prácticas</h3>
              <p>Estamos convencidos que la práctica hace al maestro. Por eso, nuestra metología se basa en la aplicación constante de las técnicas aprendidas. </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">Facilidades de pago</h3>
              <p>Puedes realizar tus pagos completos o dividirlos en cuotas mensuales mediante transferencia bancaria, débito, tarjeta de crédito o efectivo.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Ambiente amigable</h3>
              <p>Sin duda el mejor ambiente e instalaciones para que tu aprendizaje sea una experiencia inolvidable.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">NUEVA MODALIDAD SEMIPRESENCIAL FLEXIBLE</h2>
            <hr class="bottom-line">
          </div>
          <iframe width="700" height="455" src="https://www.youtube.com/embed/84Ipar9j-D0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Nuestros Cursos</h2>
            <p class="sub-title pad-bt15">Conoce todo lo que tenemos para tí !</p>
            <hr class="bottom-line">
          </div>
          <a href="curso1.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15" >
              <figure>
                <img src="img/curso-6.jpg" class="img-responsive">
                <figcaption>
                  <h2>Curso de MAQUILLAJE PROFESIONAL</h2>
                  <p>Modalidad Online</p>
                </figcaption>
              </figure>
            </div>
          </a>
          <a href="curso2.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
              <figure>
                <img src="img/curso-10.jpg" class="img-responsive">
                <figcaption>
                  <h2>Curso de AUTOMAQUILLAJE</h2>
                  <p>Modalidad Online</p>
                </figcaption>
              </figure>
            </div>
          </a>
          <a href="curso3.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
              <figure>
                <img src="img/curso-8.png" class="img-responsive">
                <figcaption>
                  <h2>Curso de TÉCNICA ESPECIALISTA EN UÑAS</h2>
                  <p>Modalidad Presencial</p>
                </figcaption>
              </figure>
            </div>
          </a>
          <a href="curso4.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
              <figure>
                <img src="img/port04.jpg" class="img-responsive">
                <figcaption>
                  <h2>Curso de FOTOGRAFÍA DIGITAL INICIAL</h2>
                  <p>Modalidad Online</p>
                </figcaption>
              </figure>
            </div>
          </a>
          <a href="curso5.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15" >
              <figure>
                <img src="img/curso-5.jpg " class="img-responsive">
                <figcaption>
                  <h2>Curso de FACECHART PRO</h2>
                  <p>Modalidad Online</p>
                </figcaption>
              </figure>
            </div>
          </a>
          <a href="curso6.php">
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
              <figure>
                <img src="img/curso-7.jpg" class="img-responsive">
                <figcaption>
                  <h2>Curso de PEINADOS SOCIAL BÁSICO</h2>
                  <p>Modalidad Online</p>
                </figcaption>
              </figure>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <li>
                  <blockquote>
                    <img src="img/t1.png" class="img-responsive">
                    <p>Mi experiencia en Inua fue muy buena, aprendí varias técnicas en un ambiente que me hizo sentir muy cómoda, creando lazos de amistad. Altamente recomendable</p>
                  </blockquote>
                  <small>Marie Makeup Artist. Quito, Ecuador</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/t2.png" class="img-responsive">
                    <p>Gracias por el curso online. Me ha servido mucho y ha retomar el maquillaje. Es un curso en el que puedes aprender desde lo más básico, como la forma del rostro, a mi me encantó. Lo recomiendo 100%</p>
                  </blockquote>
                  <small>Paola Camacho. Quito, Ecuador</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/t3.png" class="img-responsive">
                    <p>Recomiendo muchísimo seguir el curso en Inua. Los temas con concretos y 100% prácticos.</p>
                    <p>Además el ambiente es super amigable.</p>
                  </blockquote>
                  <small>Loli Zambrano. Quito, Ecuador</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Nuesto equipo de trabajo</h2>
            <p class="sub-title pad-bt15">Conoce a las instructoras de la escuela.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/p1.png" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Stefany Vinueza</h2>
                <div class="blog-comment">
                  <p>Directora</p>
                  <p></p>
                </div>
                <br>Maquilladora profesional especializada en México y Estados Unidos. Fundadora y Directora de la Escuela de maquillaje Inua.
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/p2.png" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Karla Pérez Arcos</h2>
                <div class="blog-comment">
                  <p>Docente</p>
                  <p></p>
                </div>
                <br>Asesora de imagen y especialista en maquillaje para piel madura. Comunicadora social y educadora.
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/p3.png" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Paulina Cobo</h2>
                <div class="blog-comment">
                  <p>Docente</p>
                  <p></p>
                </div>
                <br>Ilustradora, Makeup Artist, FaceChart Artist.
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Mantente en contacto con nosotros</h2>
            <p class="sub-title pad-bt15">No dudes en contactarnos si tienes cualquier pregunta!</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Calle Gaspar de Escaolna y Av. Juan José de Villalengua<br>Quito, Ecuador</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>hola@inuamakeup.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+593 98 026 4931</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Su mensaje fue enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="mensaje.php" method="POST">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="nombres" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">Enviar ahora</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; 2021 Inua. Todos los derechos reservados.</p>
          <div class="credits">
        
            Diseñado por <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">Grupo Apolo</a>
          </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
