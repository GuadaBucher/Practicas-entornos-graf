<?php
include("conexion.inc");

$id = $_POST['id'];
$resultado = mysqli_query($link, "SELECT * FROM ciudades WHERE id = $id");
$fila = mysqli_fetch_array($resultado);
?>
<form action="modif.php" method="POST">
<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
País: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>"><br>
Habitantes: <input type="text" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
Superficie: <input type="text" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
Tiene metro (1/0): <input type="text" name="tieneMetro" value="<?php echo $fila['tieneMetro']; ?>"><br>
<input type="submit" value="Modificar">
</form>
<?php mysqli_close($link); ?>
