<body>
<?php
$destino = $_POST['amigo'];
$asunto = "Te recomiendo este sitio";
$desde = 'From:' . $_POST['email'];
$mensaje = "Hola! Soy $_POST[nombre] y te recomiendo visitar este sitio: https://frro.cvg.utn.edu.ar/";
mail($destino, $asunto, $mensaje, $desde);
echo "La recomendación fue enviada.";
?>
</body>
