<?php
include("conexion.inc");

$resultado = mysqli_query($link, "SELECT * FROM ciudades");

echo "<table border='1'>";
echo "<tr><td>id</td><td>ciudad</td><td>país</td><td>habitantes</td><td>superficie</td><td>tieneMetro</td></tr>";
while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr><td>" . $fila['id'] . "</td><td>" . $fila['ciudad'] . "</td><td>" . $fila['pais'] .
         "</td><td>" . $fila['habitantes'] . "</td><td>" . $fila['superficie'] .
         "</td><td>" . $fila['tieneMetro'] . "</td></tr>";
}
echo "</table>";
mysqli_close($link);
?>
<br><a href="menu.html">Volver al menú</a>
