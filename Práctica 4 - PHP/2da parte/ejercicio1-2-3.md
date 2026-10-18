# Arrays, funciones

## Ejercicio 1
Ambos códigos son equivalentes. El primero crea el array de una sola vez con array(), y el segundo lo crea elemento por elemento. El resultado es el mismo en ambos casos.

## Ejercicio 2
Salidas:
- a. La salida es: **bar1**
    - $matriz["x"] vale "bar"
    - $matriz[12] vale true. Al hacer echo, true se convierte a string como "1"
- b. La salida es: **5942**
    - $matriz["unamatriz"][6] imprime 5
    - $matriz["unamatriz"][13] imprime 9
    - $matriz["unamatriz"]["a"] imprime 42
- c. **No produce ninguna salida** 
    - [5] => 1, [12] => 2
    - $matriz[] = 56; Agrega [13] => 56, porque la mayor clave entera es 12 y la nueva es 12 + 1
    - $matriz["x"] = 42; Agrega ["x"] => 42
    - unset($matriz[5]); Elimina el elemento de clave 5. Queda [12] => 2, [13] => 56, ["x"] => 42
    - unset($matriz); Elimina la variable completa. $matriz deja de existir

## Ejercicio 3
- a. La salida depende de la fecha y hora en la que se ejecute, porque getdate() devuelve la fecha y hora actuales. Tomando como referencia el día de hoy la salida sería: **"Has entrado en esta página a las 11 horas, con 40 minutos y 7 segundos, del 18/10/2026"**
- b. La salida es: **5 + 6 = 11**. La llamada sumar(5,6) pasa 5 a $sumando1 y 6 a $sumando2, por lo que $suma vale 11.