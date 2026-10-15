Es un contador de visitas: cada vez que alguien carga visitas.php, se suma 1 a un número guardado en el archivo contador.dat y se muestra el total en pantalla. Como el valor vive en un archivo y no en una variable, sobrevive entre una visita y otra. Cuenta cada carga de página, no visitantes únicos; si se actualiza la página, suma de nuevo.
- contador.dat Almacena el número de visitas (0 al inicio)
- contador.php Lee el número, le suma 1, lo guarda y lo muestra
- visitas.php Página web que incluye a contador.php con include