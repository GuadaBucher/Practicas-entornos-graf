<?php
session_start();
?>
<html>
<head>
<title>Carrito</title>
</head>
<body>
<h1>Carrito</h1>
<?php if(isset($_SESSION['carro']) && count($_SESSION['carro']) > 0){ ?>
<table border="1">
 <tr>
 <td>Producto</td>
 <td>Precio</td>
 <td>Cantidad</td>
 <td>Borrar</td>
 </tr>
 <?php
 $suma = 0;
 foreach($_SESSION['carro'] as $id => $v){
 $suma = $suma + $v['cantidad'] * $v['precio'];
 ?>
 <form method="post" action="agregacar.php">
 <tr>
 <td><?php echo $v['producto'] ?></td>
 <td><?php echo $v['precio'] ?></td>
 <td>
 <input type="text" name="cantidad" value="<?php echo $v['cantidad'] ?>" size="4">
 <input type="hidden" name="id" value="<?php echo $id ?>">
 <input type="submit" value="Actualizar">
 </td>
 <td><a href="borracar.php?id=<?php echo $id ?>">Borrar</a></td>
 </tr>
 </form>
 <?php } ?>
</table>
<p>Total: $<?php echo $suma; ?></p>
<?php }else{ ?>
<p>No hay productos seleccionados</p>
<?php } ?>
<a href="catalogo.php">Volver al catálogo</a>
</body>
</html>
