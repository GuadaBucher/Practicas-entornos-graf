## Ejercicio 1

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es 
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función **mysqli_connect()**
Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
*el host o servidor:* (**$hostname**), *el nombre de usuario o root:* (**$nombreUsuario**) y la *contraseña:* (**$contraseña**)
Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función 
**mysqli_select_db()** 
Esta función debe pasar como parámetro **$nombreConexión** que será el que hayamos obtenido con la función mysqli_connect() y **$nombreBaseDatos** (el nombre de la base de datos)
La función mysqli_query () se utiliza para **ejecutar una consulta/sentencia SQL (SELECT, INSERT, UPDATE, DELETE) sobre la base de datos**
y requiere como parámetros **la conexión ($nombreConexión) y un string con la consulta SQL**
La cláusula or die() se utiliza para **cortar la ejecución del script y mostrar un mensaje si la instrucción anterior falla (devuelve FALSE)**
y la función mysqli_error () se puede usar para **Obtener el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.**

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código: 

<?php 
while ($fila = mysqli_fetch_array($vResultado))  
{ 
?> 
<tr> 
<td><?php echo ($fila[0]); ?></td> 
<td><?php echo ($fila[1]); ?></td> 
<td><?php echo ($fila[2']); ?></td> 
</tr>    
<tr> 
<td colspan="5"> 
<?php 
} 
mysqli_free_result($vResultado); 
mysqli_close($link); 
?>


**Explicación del código:**
- mysqli_fetch_array($vResultado) toma la siguiente fila del resultado y la devuelve como array, con índices numéricos ($fila[0], $fila[1]…) y también por nombre de columna. Cuando no quedan filas devuelve NULL, y el while termina.
- Dentro del bucle, por cada fila se arma un <tr> con tres <td>, que muestran las tres primeras columnas del SELECT.
- mysqli_free_result() libera la memoria del resultado y mysqli_close($link) cierra la conexión.

