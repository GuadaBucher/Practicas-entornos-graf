<?php
session_start();
$link = mysqli_connect("localhost","root","","Compras");
$qry = mysqli_query($link, "select * from catalogo order by producto asc");
?>
<html>
<head>
<title>Catálogo</title>
</head>
<body>
<table border="1">
 <tr>
 <td><strong>Producto</strong></td>
 <td><strong>Precio</strong></td>
 <td><a href="vercarrito.php">Ver carrito</a></td>
 </tr>
 <?php while($row = mysqli_fetch_assoc($qry)){ ?>
 <tr>
 <td><?php echo $row['producto'] ?></td>
 <td><?php echo $row['precio'] ?></td>
 <td>
 <?php if(!isset($_SESSION['carro'][$row['id']])){ ?>
 <a href="agregacar.php?id=<?php echo $row['id']; ?>">Agregar</a>
 <?php }else{ ?>
 <a href="borracar.php?id=<?php echo $row['id']; ?>">Quitar</a>
 <?php } ?>
 </td>
 </tr>
 <?php } ?>
</table>
</body>
</html>
