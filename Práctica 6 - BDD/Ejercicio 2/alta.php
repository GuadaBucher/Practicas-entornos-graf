<?php
include("conexion.php");

$ciudad     = $_POST['ciudad'];
$pais       = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

mysqli_query($link, "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
                     VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)");

echo "Ciudad agregada";
mysqli_close($link);
?>
<br><a href="menu.html">Volver al menú</a>
