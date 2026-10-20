<?php
session_start();
$link = mysqli_connect("localhost","root","","Compras");
$id = $_REQUEST['id'];
if(isset($_POST['cantidad'])){ $cantidad = $_POST['cantidad']; }else{ $cantidad = 1; }
$qry = mysqli_query($link, "select * from catalogo where id='".$id."'");
$row = mysqli_fetch_array($qry);
$_SESSION['carro'][$id] = array('cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio']);
header("Location:catalogo.php");
?>
