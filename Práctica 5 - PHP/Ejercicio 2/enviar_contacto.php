<body>
<?php
$fecha = date("d-m-Y");
$hora = date("H:i:s");
$destino = "guadibucher@gmail.com"; /*"micorreo@dominio.com";*/ 
$asunto = "Consulta";
$desde = 'From:' . $_POST['email'];
$comentario = "
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
";
mail($destino, $asunto, $comentario, $desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
?>
</body>
