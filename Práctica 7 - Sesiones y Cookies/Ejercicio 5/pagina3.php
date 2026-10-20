<?php
session_start();
?>
<html>
<body>
<?php
echo "Usuario: " . $_SESSION['usuario'] . "<br>";
echo "Clave: " . $_SESSION['clave'];
?>
</body>
</html>
