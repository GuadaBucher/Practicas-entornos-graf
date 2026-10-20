## Ejercicio 1

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es 
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función **mysqli_connect()**
Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
*el host o servidor:* (**$hostname**), *el nombre de usuario o root:* (**$nombreUsuario**) y la *contraseña:* (**$contraseña**)
Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función 
**mysqli_select_db()** 
Esta función debe pasar como parámetro  
**$nombreConexión** que será el que hayamos obtenido con la función mysqli_connect() y **$nombreBaseDatos** (el nombre de la base de datos)
La función mysqli_query () se utiliza para **ejecutar una consulta/sentencia SQL (SELECT, INSERT, UPDATE, DELETE) sobre la base de datos**
y requiere como parámetros **la conexión ($nombreConexión) y un string con la consulta SQL**
La cláusula or die() se utiliza para **cortar la ejecución del script y mostrar un mensaje si la instrucción anterior falla (devuelve FALSE)**
y la función mysqli_error () se puede usar para **Obtener el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.**


**Explicación del código:**
 