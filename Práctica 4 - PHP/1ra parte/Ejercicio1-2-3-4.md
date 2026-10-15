# Variables, tipos, operadores, expresiones, estructuras de control 

## Ejercicio 1

- **Variables y su tipo:** 
    - $a = TRUE --> tipo: Boolean
    - $b = "xyz" --> tipo: String
    - $c = 'xyz' --> tipo: String
    - $d = 12 --> tipo: Integer
    - $f = doble($d++) --> tipo: Integer
    - $g = $f += 10 --> tipo: Integer
    - $i = parametro de doble --> Integer

- **Operadores:**
    - Asignación: =
    - Asignación compuesta: += (en $d +=4 y $f += 10)
    - Asignación encadenada: $g = $f += 10
    - Aritméticos: * (multiplicación)
    - Incremento: ++$d: incrementa y luego devuelve el valor. $d++: devuelve el valor y luego incrementa.
    - Ternario: ? : (en $a ? ++$d : $d*3)

- **Funciones y parámetros:**
    - doble($i): recibe un parámetro $i y devuelve $i*2
    - gettype($variable): devuelve el nombre del tipo como string
    - is_int($d): devuelve true si es entero
    - is_string($a): devuelve true si es string.

- **Estructuras de control:**
    - if (is_int($d)) { ... }: condicional. Evalúa si $d es un entero
    - if (is_string($a)) { ... }: condicional. Evalúa si $a es un string

- **Salida por pantalla:**
    - Los cuatro gettype imprimen boolean, string, string e integer
    - is_int($d) es verdadero, así que $d += 4 da $d = 16
    - is_string($a) es falso ($a es boolean), por lo que no se imprime "Cadena: $a"
    - $a es TRUE, así que $d = ++$d da $d = 17
    - doble($d++) se evalúa con 17 (usa el valor y después incrementa), así que $f = 34 y $d = 18
    - $f += 10 da $f = 44, y $g = 44
    - En el echo final, $a TRUE se imprime como 1, $b y $c valen xyz, $d = 18, $f = 44 y $g = 44
    - Salida: booleanstringstringinteger1xyzxyz184444


## Ejercicio 2

- a. Son equivalentes en la salida, pero en el tercero $i termina valiendo 10 y no 11 como los dos primeros. Porque usa ++$i (preincremento) y que el do-while evalúa la condición después de ejecutar el cuerpo, por lo que corta apenas $i llega a 10.
- b. Los cuatro son equivalentes: misma salida y mismo valor final de $i
- c. Una diferencia es que switch evalúa $i una sola vez, y el if/elseif lo evalúa en cada comparación, pero son equivalentes.


## Ejercicio 3

- a. El código genera una tabla HTML vacía de 5 filas por 2 columnas de forma dinámica. En lugar de escribir a mano las etiquetas tr y td, PHP las produce con dos bucles for anidados. Es una plantilla de tabla parametrizable: cambiando $row y $col se obtiene una tabla de cualquier tamaño sin tocar el resto.
- b. El código es una página que se autoprocesa, muestra un formulario para ingresar la edad y, cuando se envía, indica si la persona es mayor o menor de edad (tomando 21 años como límite).


## Ejercicio 4
Salida: el primer echo muestra "El   " y el segundo "El clavel blanco".
Include se ejecuta en el momento que se llega a esa línea y no antes, echo "El $flor $color \n"; se ejecuta antes del include, así que $flor y $color todavía no existen. Include 'datos.php'; carga y ejecuta el archivo, y las variables $color = 'blanco' y $flor = 'clavel' existen a partir de ese punto. Entonces echo " El $flor $color"; que se ejecuta después del include, muestra El clavel blanco.