<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
?>
<html>
<body>
Se crearon las variables de sesión.
<a href="pagina3.php">Ir a la página 3</a>
</body>
</html>
