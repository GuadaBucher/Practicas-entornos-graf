<?php
function comprobar_nombre_usuario($nombre_usuario){
   // compruebo que el tamaño del string sea válido.
   if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
      echo $nombre_usuario . " no es válido<br>";
      return false;
   }

   // compruebo que los caracteres sean los permitidos
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
   for ($i=0; $i<strlen($nombre_usuario); $i++){
      if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
         echo $nombre_usuario . " no es válido<br>";
         return false;
      }
   }
   echo $nombre_usuario . " es válido<br>";
   return true;
}



// PRUEBA

$prueba = array(
    "Pablo",                            // válido
    "Pablo_123",                        // válido (letras, números y _)
    "abc",                              // válido (largo mínimo: 3)
    "abcdefghijklmnopqrst",             // válido (largo máximo: 20)
    "ab",                               // inválido: muy corto
    "pablito_perez_0298364822234",      // inválido: más de 20
    "Pablo Perez",                      // inválido: tiene espacio
    "Pablo!",                           // inválido: tiene "!"
    "ñoqui",                            // inválido: tiene "ñ"
);

foreach ($prueba as $nombre) {
    $resultado = comprobar_nombre_usuario($nombre);
    echo "Devolvió: " . ($resultado ? "true" : "false") . "<br><br>";
}
?>