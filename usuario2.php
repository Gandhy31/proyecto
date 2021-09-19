<?php
    include("conexion.php");
    $conn = conectar();
    $id=$_GET['id'];
    $user=$_GET['user'];
    $sql="SELECT*
          FROM usuario
          WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    echo "<script language=\"javascript\">alert(\"El nombre de usuario ".$user." ya se encuentra en uso\");</script>"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#bt1").click(function(){
                $("#form1").toggle();
            });
        });
        $(document).ready(function(){
            $("#bt2").click(function(){
                $("#form2").toggle();
            });
        });
        $(document).ready(function(){
            $("#bt3").click(function(){
                $("#form3").toggle();
            });
        });
        $(document).ready(function(){
            $("#bt4").click(function(){
                $("#form4").toggle();
            });
        });
        $(document).ready(function(){
            $("#bt5").click(function(){
                $("#form5").toggle();
            });
        });
        $(document).ready(function(){
            $("#bt6").click(function(){
                $("#form6").toggle();
            });
        });
    </script>

    <title>Editar Perfil</title>
  </head>
  <body>
    <h1>Editar Perfil</h1>
    <button type="button"  class="btn btn-secondary" id="bt1">Editar usuario</button>
    <br>
    <br>
    <form id="form1" style="display:none" action="updUser.php" method="POST">
        <fieldset disabled>
            <input type="text" class="form-control mb-3" id="disabledInput"  value="<?php echo $row['usuario'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="text" class="form-control mb-3" id="validationDefault01" name="usuario" placeholder="Usuario"  required>
        <input type="submit" class="btn btn-primary">
    </form>
    <button type="button" class="btn btn-secondary" id="bt2">Editar contraseña</button>
    <br>
    <br>
    <form id="form2" style="display:none" action="updPass.php" method="POST">
        <fieldset disabled>
            <input type="password" class="form-control mb-3" id="disabledInput"  placeholder="<?php echo $row['contrasena'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="password" class="form-control mb-3" id="validationDefault01" name="password" placeholder="Contraseña"  required>
        <input type="submit" class="btn btn-primary">
    </form>
    <button type="button" class="btn btn-secondary" id="bt3">Editar nombres</button>
    <br>
    <br>
    <form id="form3" style="display:none" action="updName.php" method="POST">
        <fieldset disabled>
            <input type="text" class="form-control mb-3" id="disabledInput"  placeholder="<?php echo $row['nombres'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="text" class="form-control mb-3" id="validationDefault01" name="nombres" placeholder="Nombres"  required>
        <input type="submit" class="btn btn-primary">
    </form>
    <button type="button" class="btn btn-secondary" id="bt4">Editar apellidos</button>
    <br>
    <br>
    <form id="form4" style="display:none" action="updLastName.php" method="POST">
        <fieldset disabled>
            <input type="text" class="form-control mb-3" id="disabledTextInput"  placeholder="<?php echo $row['apellidos'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="text" class="form-control mb-3" id="validationDefault01" name="apellidos" placeholder="Apellidos"  required>
        <input type="submit" class="btn btn-primary">
    </form>
    <button type="button" class="btn btn-secondary" id="bt5">Editar correo</button>
    <br>
    <br>
    <form id="form5" style="display:none" action="updEmail.php" method="POST">
        <fieldset disabled>
            <input type="email" class="form-control mb-3" id="disabledInput"  placeholder="<?php echo $row['correo'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="email" class="form-control mb-3" id="validationDefault01" name="correo" placeholder="Correo Electrónico"  required>
        <input type="submit" class="btn btn-primary">
    </form>
    <button type="button" class="btn btn-secondary" id="bt6">Editar fecha de nacimiento</button>
    <br>
    <br>
    <form id="form6" style="display:none" action="updDate.php" method="POST">
        <fieldset disabled>
            <input type="text" class="form-control mb-3" id="disabledInput"  placeholder="<?php echo $row['fecNac'] ?>" >
        </fieldset>
        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id'] ?>">
        <input type="date" class="form-control mb-3" id="validationDefault01" name="fecha" required>
        <input type="submit" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>