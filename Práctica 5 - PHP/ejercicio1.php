<?php
$destinatario = "guadibucher@gmail.com";
'
<html>
<head>
	<title>Contacto</title>
</head>
<body>
	<h1>Contacto</h1>
	<br>
	<label>Asunto:</label>
	' 
$asunto = '
	<input type="text">
	'
'<label>Mensaje</label>'
$cuerpo = '
	<textarea rows= "10" cols="50"></textarea>
'
'<label>Email</label>
'

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= '
	<input type= "text">
</body>
</html>
';

mail($destinatario, $asunto, $cuerpo, $headers);
echo "Correo enviado";
?>
