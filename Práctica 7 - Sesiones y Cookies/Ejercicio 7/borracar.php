<?php
session_start();
unset($_SESSION['carro'][$_GET['id']]);
header("Location:catalogo.php");
?>
