## Ejercicio 4

comprobar_nombre_usuario($nombre_usuario) valida un nombre de usuario. Imprime si es válido o no y devuelve true o false. Un nombre es válido si cumple:
- Tiene entre 3 y 20 caracteres.
- Solo usa letras (sin tildes ni ñ), números y guion bajo.

if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20)
strlen() devuelve la cantidad de caracteres. Si es menor a 3 o mayor a 20, imprime “no es válido” y return false corta la función.

$permitidos es un string con todos los caracteres aceptados. El for recorre el nombre posición por posición. Si algún carácter no está en la lista, imprime “no es válido” y devuelve false.
Si el nombre pasó las dos validaciones, imprime “es válido” y devuelve true.