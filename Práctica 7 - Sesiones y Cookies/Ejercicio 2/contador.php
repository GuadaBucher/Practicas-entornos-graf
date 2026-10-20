<?php
if (!isset($_COOKIE['contador']))
{
  $visitas = 1;
  setcookie("contador", $visitas, time() + 3600*24*365);
}
else
{
  $visitas = $_COOKIE['contador'] + 1;
  setcookie("contador", $visitas, time() + 3600*24*365);
}
?>
<html>
<body>
<?php
if ($visitas > 1)
{
  echo "Esta es tu visita número " . $visitas;
}
else
{
  echo "Bienvenido, esta es la primera vez que visitás esta página";
}
?>
</body>
</html>
