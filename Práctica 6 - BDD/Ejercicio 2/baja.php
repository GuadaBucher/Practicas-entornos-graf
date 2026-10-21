<?php
include("conexion.php");

$id = $_POST['id'];
mysqli_query($link, "DELETE FROM ciudades WHERE id = $id");

echo "Ciudad borrada";
mysqli_close($link);
?>
<br><a href="menu.html">Volver al menú</a>
