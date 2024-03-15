<?php
 include("conexion.php");
     

if (isset($_POST['Enviar'])) {
  if (
    strlen($_POST['name']) >= 1 && 
    strlen($_POST['email']) >= 1 && 
    strlen($_POST['clave'])>= 1 && 
    strlen($_POST['repetir']) >= 1 && 
    strlen($_POST['recuperacion']) >= 1 && 
    strlen($_POST['numero']) >= 1 
  ) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $clave = trim($_POST['clave']);
    $repetir = trim($_POST['repetir']);
    $recuperacion = trim($_POST['recuperacion']);
    $numero = trim($_POST['numero']);

    $consulta = "INSERT INTO respuesta (name, email, clave, repetir, recuperacion, numero)
                 VALUES ('$name', '$email', '$clave', '$repetir', '$recuperacion', '$numero')";

    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
      echo "<h3 class='success'>Tu registro se ha completado</h3>";
    } else {
      echo "<h3 class='error'>Ocurrió un error al registrar la información.</h3>";
      $error = mysqli_error($conex);
      echo "<p>Error: $error</p>";
    }
  } else {
    echo "<h3 class='error'>Llena todos los campos</h3>";
  }
}

?>
