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
    if(isset($_GET['e'])){
      echo "<script language=\"javascript\">alert(\"Nombre de usuario o contraseña incorrectos\");</script>";
    }
    if (isset($_GET['lo'])) {
      echo "<script language=\"javascript\">alert(\"Se ha registrado correctamente, Porfavor ingrese sus credenciales\");</script>";
   }
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
      <div  class="col-md-3" id="caja2">
            <h1>Iniciar sesión</h1>
                <form action="login2.php" method="POST">
                    <input type="text" class="form-control mb-3" id="validationDefault01" name="usuario" placeholder="Usuario"  required>
                    <input type="password" class="form-control mb-3" id="validationDefault01"  name="password" placeholder="Contraseña"  required>
                    <input type="submit" class="btn btn-outline-primary" value="Ingresar">
                    <a href="logAd.php" id="back" class="btn btn-outline-danger">Ingresar como administrador</a>
                    <p id="mensaje">Si aún no tienes una cuenta <a id="a1" href="registro.php">Registrate aquí</a></p>
                </form>
                
     </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>