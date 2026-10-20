<?php
if (isset($_POST["titular"])) {
  setcookie("titular", $_POST["titular"], time() + 3600*24*30);
  $titular = $_POST["titular"];
} else {
  if (isset($_COOKIE["titular"])) {
    $titular = $_COOKIE["titular"];
  }
}
?>
<html>
<body>
<h1>El Periódico</h1>
<?php
if (!isset($titular)) {
  echo "<p>Noticia política: titular de política</p>";
  echo "<p>Noticia económica: titular de economía</p>";
  echo "<p>Noticia deportiva: titular de deportes</p>";
} else {
  if ($titular == "politica") echo "<p>Noticia política: titular de política</p>";
  if ($titular == "economica") echo "<p>Noticia económica: titular de economía</p>";
  if ($titular == "deportiva") echo "<p>Noticia deportiva: titular de deportes</p>";
}
?>
<form action="periodico.php" method="post">
<input type="radio" name="titular" value="politica"> Noticia política<br>
<input type="radio" name="titular" value="economica"> Noticia económica<br>
<input type="radio" name="titular" value="deportiva"> Noticia deportiva<br>
<input type="submit" value="Guardar">
</form>
<a href="borrar.php">Borrar la cookie</a>
</body>
</html>
