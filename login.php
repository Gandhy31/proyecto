<?php
include("conexion.php");
$conn = conectar();
session_start();
if (isset($_SESSION['idG'])) {
  $id = $_SESSION['idG'];
  header("Location: index2.php?id=$id");
} else if (isset($_SESSION['idA'])) {
  $id = $_SESSION['idA'];
  header("Location: admin1.php?id=$id");
}
if (isset($_GET['e'])) {
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

  <title>Inicia Sesión</title>
  <link rel="icon" type="image/x-icon" href="img/favicon.png" />
</head>

<body>
  <div class="col-md-3" id="caja2">
    <h1>Iniciar sesión</h1>
    <form action="login2.php" method="POST">
      <input type="text" class="form-control mb-3" id="validationDefault01" name="usuario" placeholder="Usuario" required>
      <input type="password" class="form-control mb-3" id="validationDefault01" name="password" placeholder="Contraseña" required>
      <input type="submit" class="btn btn-outline-primary" value="Ingresar">
      <a href="logAd.php" id="back" class="btn btn-outline-danger">Ingresar como administrador</a>
      <p id="mensaje">Si aún no tienes una cuenta <a id="a1" href="registro.php">Registrate aquí</a></p>
    </form>

  </div>

  <div class="cajaa2">
    <a id="a2" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill mb-1" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
      </svg> Regresar</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>