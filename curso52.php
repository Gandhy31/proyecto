<?php
include("conexion.php");
$conn = conectar();
session_start();
if (!isset($_SESSION['idG'])) {
   header("Location: index.php");
}
$id = $_GET['id'];
$sql = "SELECT*
          FROM usuario
          WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$cont = 0;
$sql1 = "SELECT*
           FROM factura
           WHERE idUsuario='$id' AND idCurso=5";
$query1 = mysqli_query($conn, $sql1);
$comp = mysqli_num_rows($query1);
$row1 = mysqli_fetch_array($query1);
if ($comp >= 1) {
   $cont = 1;
   $ac = $row1['activo'];
}
$sql2 = "SELECT*
           FROM curso
           WHERE id=5";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($query2);
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, user-scalable=no" />
   <title>Curso de Facechart PRO</title>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="css/style_curso.css" />
   <link rel="icon" type="image/x-icon" href="img/favicon.png" /> 
</head>

<body>
   <header id="header">
      <div class="wrap">

         <nav class="navbar navbar-expand-lg navbar-dark bg-default">
            <div class="container-fluid">
               <a class="navbar-brand " href="index.php#main-header">Inicio</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">

                  <ul class="navbar-nav">

                     <li class="nav-item ms-3">
                        <a class="nav-link active " aria-current="page" href="index.php#feature">Acerca de</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php#service">Servicios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php#portfolio">Cursos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php#testimonial">Testimonios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php#blog">Instructores</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php#contact">Contacto</a>
                     </li>

                  </ul>

                  <div class="dropdown ms-auto">
                     <a class="btn btn-secondary dropdown-toggle avatar bg-transparent border-0 " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle me-1 mb-1" viewBox="0 0 16 16">
                           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg><?php echo $row['nombres']." ".$row['apellidos'] ?>
                     </a>

                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Iniciado como <strong><?php echo $row['usuario'] ?></strong></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="usuario.php?id=<?php echo $row['id']?>">Editar perfil</a></li>
                        <li><a class="dropdown-item" href="historial.php?id=<?php echo $row['id']?>">Historial de compras</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                     </ul>
                  </div>

               </div>
            </div>
         </nav>

      </div>
   </header>

   <section id="info" class="wrap">
      <div id="imagen"><img src="img/c5.jpg" width="635px" height="425px"></div>
      <div id="detalle">
         <h2>CURSO DE FACECHART PRO</h2>
         <p>
            En este curso aprenderás a realizar un facechart profesional desde cero a través de clases en videos full HD,
            guías de ejercicios prácticos y clases dirigidas prácticas.
            <br>
            Conoce los conceptos básicos de morfología, simetría y volumen. 
            También aprende a utilizar los productos y herramientas para conseguir un resultado impecable.
         </p>
      </div>
      <div class="clearfix"></div>

      <div id="datos">

         <div class="titulos costo">
            <h1> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash me-2 mb-1" viewBox="0 0 16 16">
                  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
               </svg>Costos</h1>
            <p class="ms-4"><?php echo "$ " . $row2['precio'] ?></p>
         </div>

         <div class="titulos nivel">
            <h1> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps me-2 mb-1" viewBox="0 0 16 16">
                  <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z" />
               </svg>Nivel</h1>
            <p class="ms-4">Básico - avanzado</p>
         </div>

         <div class="titulos duracion">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split me-2 mb-1" viewBox="0 0 16 16">
                  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
               </svg>Duración</h1>
            <p class="ms-4">1 hora</p>
         </div>

         <div class="titulos fecha_inicio">
            <h1> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event me-2 mb-1" viewBox="0 0 16 16">
                  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
               </svg>Fecha de inicio</h1>
            <p class="ms-4">Disponible en cualquier momento</p>
         </div>

         <div class="titulos certificado">
            <h1> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill me-2 mb-1" viewBox="0 0 16 16">
                  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
               </svg>Certificado</h1>
            <p class="ms-4">Las personas que culminen satisfactoriamente el curso recibirán un certificado avalado por
               la escuela Inua </p>
         </div>

      </div>

      <div id="acordeon">

         <ul class="list-group list-group-flush">
            <li id="list-group" class="list-group-item bg-ligth">APRENDE SOBRE PROPORCIONES, SIMETRÍA Y MORFOLOGÍA</li>
            <li id="list-group" class="list-group-item bg-ligth">DISEÑA TU PROPIO BOCETO DE FACECHART DESDE CERO</li>
            <li id="list-group" class="list-group-item bg-light">ILUMINACIÓN Y PROFUNDIDAD DEL ROSTRO (TÉCNICA CLARO OSCURO)</li>
            <li id="list-group" class="list-group-item bg-light">EJERCICIOS PRÁCTICOS PARA DIBUJAR CEJAS Y PESTAÑAS</li>
            <li id="list-group" class="list-group-item bg-light">MAQUILLAJE DE PIEL</li>
            <li id="list-group" class="list-group-item bg-light">MAQUILLAJE DE OJOS</li>
            <li id="list-group" class="list-group-item bg-light">MAQUILLAJE DE LABIOS</li>
            <li id="list-group" class="list-group-item bg-light">PRODUCTOS Y HERRAMIENTAS</li>
         </ul>

      </div>

      <a id="btn1" class="btn btn-success btn-lg mt-3 ms-auto
         <?php
         if ($cont == 1) {
            echo "disabled";
         }

         ?>" href="compra.php?id=<?php echo $row['id'] ?>&idc=5"  role="button" 
         <?php
            if ($cont == 1) {
               echo "aria-disabled=\"true\" ";
            }
         ?>>
         <?php
         if ($cont == 1) {
            if ($ac == 0) {
               echo "Pago pendiente";
            } else {
               echo "Comprado";
            }
         } else {
            echo "Comprar";
         }
         ?>
      </a>

   </section>


   <footer id="footer">
      <p>&copy; 2021 Inua. Diseñado por <strong>Grupo Apolo</strong></p>
      <div id="social">
         <a target="_blank" href="https://www.facebook.com/inuapromakeup"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook me-2 text-white" viewBox="0 0 16 16">
               <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg></a>

         <a target="_blank" href="https://www.instagram.com/inua_imagen/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram me-2 text-white" viewBox="0 0 16 16">
               <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg></a>

         <a target="_blank" href="https://www.youtube.com/channel/UCPcLISrZ3UGW76kot5FLn2A"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube me-2 text-white" viewBox="0 0 16 16">
               <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
            </svg></a>

      </div>
   </footer>

   <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>