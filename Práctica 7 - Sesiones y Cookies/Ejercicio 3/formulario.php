<?php
if (isset($_POST["usuario"])) {
  setcookie("usuario", $_POST["usuario"], time() + 3600*24*365);
  $ultimo = $_POST["usuario"];
} else {
  if (isset($_COOKIE["usuario"])) {
    $ultimo = $_COOKIE["usuario"];
  }
}
?>
<html>
<body>
<?php
if (isset($ultimo)) {
  echo "Último nombre de usuario ingresado: " . $ultimo;
}
?>
<form action="formulario.php" method="post">
Nombre de usuario: <input type="text" name="usuario">
<input type="submit" value="Guardar">
</form>
</body>
</html>
