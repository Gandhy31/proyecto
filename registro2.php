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
  
    if(!isset($_GET['nombres'])){
      header("Location: registro.php");
    }
    $nombres = $_GET['nombres'];
    $apellidos = $_GET['apellidos'];
    $cel = $_GET['cel'];
    $email = $_GET['email'];
    $fechaN = $_GET['fechaN'];
    $user = $_GET['user'];
    echo "<script language=\"javascript\">alert(\"El nombre de usuario ".$user." ya se encuentra en uso\");</script>";
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/validar.js"></script>
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" /> 
  </head>
  <body>
  <div class="col-md-3" id="caja1">
            <h1>Registro</h1>
                <form id="form1" action="registrar.php" method="POST" onsubmit="return validar();">

                    <input type="text" class="form-control mb-3" id="nombre" name="nombres" placeholder="Nombres" value="<?php echo $nombres ?>" onkeypress="return soloLetras(event)" required>
                    <input type="text" class="form-control mb-3" id="apellido" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos ?>" onkeypress="return soloLetras(event)" required>
                    <input type="text" class="form-control mb-3" id="numero" name="celular" placeholder="Número de celular" value="<?php echo $cel ?>" onkeypress="return soloNumeros(event)" required>
                    <input type="email" class="form-control mb-3" id="correo" name="email" placeholder="Correo electrónico" value="<?php echo $email ?>"  required>
                    <div id="text" class="form-label">
                      Fecha de nacimiento:
                    </div>
                    <input type="date" class="form-control mb-3" id="fecha" name="fechaN" value="<?php echo $fechaN ?>" required>
                    <input type="text" class="form-control mb-3" id="usuario" name="usuario" placeholder="Usuario"  required>
                    <input type="password" class="form-control mb-3" id="pass"  name="password" placeholder="Contraseña"  required>
                    <div id="text" class="form-text">
                      Tu contraseña debe tener una longitud de entre 8 a 15 caracteres.
                    </div>
                    <input type="submit" class="btn btn-primary" value="Regístrate">
                    <p id="mensaje">Si ya tienes una cuenta <a id="a1" href="login.php">Inicia Sesión aquí</a></p>
                </form>
                
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>