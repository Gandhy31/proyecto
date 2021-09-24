<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(isset($_SESSION['idG'])){
      $id=$_SESSION['idG'];
      header("Location: index2.php?id=$id");
    }
?>

<?php
    $nombres = $_GET['nombres'];
    $apellidos = $_GET['apellidos'];
    $cel = $_GET['cel'];
    $email = $_GET['email'];
    $fechaN = $_GET['fechaN'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    echo "<script language=\"javascript\">alert(\"El nombre de usuario ".$user." ya se encuentra en uso\");</script>";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Registro</title>
  </head>
  <body>
      <div class="col-md-3" id="caja1">
            <h1>Registro</h1>
                <form action="registrar.php" method="POST">

                    <input type="text" class="form-control mb-3" id="validationDefault01" name="nombres" value="<?php echo $nombres ?>" placeholder="Nombres"  required>
                    <input type="text" class="form-control mb-3" id="validationDefault01" name="apellidos" value="<?php echo $apellidos ?>" placeholder="Apellidos"  required>
                    <input type="text" class="form-control mb-3" id="validationDefault01" name="celular" value="<?php echo $cel ?>" placeholder="Número de celular"  required>
                    <input type="email" class="form-control mb-3" id="validationDefault01" name="email" value="<?php echo $email ?>" placeholder="Correo electrónico"  required>
                    <input type="date" class="form-control mb-3" id="validationDefault01" name="fechaN" value="<?php echo $fechaN ?>" required>
                    <input type="text" class="form-control mb-3" id="validationDefault01" name="usuario" placeholder="Usuario"  required>
                    <input type="password" class="form-control mb-3" id="validationDefault01"  name="password" placeholder="Contraseña"  required>
                    <input type="submit" class="btn btn-primary" value="Regístrate">
                    <p id="mensaje">Si ya tienes una cuenta <a id="a1" href="login.php">Inicia Sesión aquí</a></p>
                </form>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>