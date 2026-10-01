# **Ejercicio 1 - CSS**

### 1. ¿ Qué es CSS y para qué se usa? 
CSS (Cascading Style Sheets) u Hojas de estilo en cascada, no es un lenguaje de programación, es un lenguaje de hojas de estilo. Las hojas de estilo es una tecnología que permite controlar la apariencia de una página web. Describe como los elementos dispuestos en la página son presentados al usuario. Permite especificar estilos como el tamaño, fuentes, color, espaciado entre texto, etc.


### 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 
Una regla es un tipo de estamento que identifica un elemento de la página HTML y le indica al navegador el estilo que deberá tener ese elemento. El siguiente es un ejemplo de una regla CSS:
p {
  background-color: red;
  color: #FFFFFF
} 
Cada regla consta de: un selector (p) que identifica un elemento de la página Web.
Al selector le sigue un bloque de declaraciones que comienza con una llave de apertura ({) y termina con otra llave de cierre (}). Entre las llaves van las declaraciones (background-color: red; color: #FFFFFF), que son las que le indican al browser el estilo para el elemento seleccionado.
Las declaraciones, a su vez, tienen dos partes: una propiedad (background-color, color) que consiste en alguna de las palabras claves definidas por el lenguaje, seguida de dos puntos (:) y un valor (red, #FFFFFF) para esa propiedad. Existen distintos valores y cada propiedad puede aceptar algunos de esos valores.


### 3. ¿ Cuáles son las tres formas de dar estilo a un documento? 
Las tres formas de dar estilo a un documento son:
- **Nivel de elemento HTML:** Se define en la propiedad style los estilos a definir para dicho elemento.

- **Nivel de página:** Se define para los distintos elementos HTML de la página en una sección especial de la cabecera que se encierra entre las marcas HTML (en el interior se definen los estilos para los elementos HTML que se necesitan).
<style>
</style>

- **En un archivo externo:** Se define en un archivo separado que deberá tener la hoja de extensión css. Este archivo contendrá las reglas de estilo pero estarán separadas del archivo HTML.
El funcionamiento es el siguiente:
- En la página web (archivo .html) se escriben las etiquetas que definen categorías o elementos.
- En la hoja de estilo (archivo .css) se escribe cómo queremos que sea el estilo de presentación de las etiquetas (color, tamaño, fuente, bordes, márgenes, posición, etc).
- En la página web se escribe qué hoja de estilo queremos utilizar.

### 4. ¿ Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno. 
Los selectores identifican a un elemento dentro de la página Web para luego poder definir sus propiedades.
- **Selectores de tipos:** Son los que identifican a un tipo de elemento dentro de los que conforman el código HTML. Es decir, usan la misma palabra que la etiqueta (tag) sin los signos < y >. Ejemplo:
h1 {text-align: center}

Resultado: identifica a los elementos h1 de la página y los alínea centralmente.

- **Selectores de clase:** El selector de clases consta de un punto (.) seguido por el nombre de la clase que hayamos creado. Ejemplo: .resaltado {background-color: yellow}

Resultado: Cualquier elemento HTML que tenga class="resaltado" tendrá el fondo amarillo.

- **Selectores de ID:** Los selectores de ID funcionan de manera muy similar a los selectores de clases, salvo que, a diferencia de estos últimos, sólo pueden aplicarse a un elemento de la página. Quiere decir que si hay un elemento que tiene asignado el atributo id ="principal" no podrá haber otro id con igual valor. En vez de usar un punto se utiliza el carácter de numeral (#). Ejemplo: #cabecera-principal {
  font-size: 24px;
  font-weight: bold;
}

Resultado: Aplica los estilos exclusivamente al elemento que tenga id="cabecera-principal".
- **Selectores de atributos:** Los selectores de atributos permiten seleccionar elementos de la página según sus propiedades o el valor asignado a estas propiedades. Ejemplo: input[type="text"] {

  border: 1px solid gray;
}
Resultado: Selecciona únicamente los elementos <input> cuyo atributo type sea exactamente "text".

- **Selector universal:** El selector universal se escribe con un asterisco (*) y representa a cualquier elemento de la página. Ejemplo: * {color: red}

Resultado: Todos los elementos de la página tendrán como color de primer plano el rojo.

### 5. ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos? 
Las pseudo-clases (y los pseudo-elementos) no pueden deducirse simplemente observando la estructura del documento. Puede decirse que son abstracciones que permiten referirse a elementos que de otro modo resultarían inaccesibles.
Las pseudo-clases son:
- :first-child
- :link y :visited 
- :hover, :active y :focus 
- :lang
Las pseudo-clases más utilizadas aplicadas a vínculos, para darle interactividad a los enlaces permitiendo que cambien de apariencia según la acción del usuario son:
1. :link
Selecciona los enlaces que aún no han sido visitados por el usuario.
2. :visited
Selecciona los enlaces que ya han sido visitados (por lo general, el navegador los muestra con un color distinto para que el usuario sepa dónde ha estado).
3. :hover
Aplica estilos cuando el usuario coloca el cursor (mouse) por encima del elemento.
4. :active
Selecciona el enlace en el preciso instante en que se hace clic sobre él (mientras el botón del ratón está presionado antes de soltarlo).

### 6. ¿ Qué es la herencia? 
Cada página HTML está compuesta por una serie de elementos (títulos, párrafos, listas, tablas, etc.) organizados en una estructura donde cada elemento está contenido por otro elemento, que a su vez puede estar contenido por otro. En esta estructura existe un elemento raíz que es el que actúa de contenedor de todos los demás elementos. En HTML se puede considerar como elemento raíz al elemento <BODY> o al elemento <HTML>.
La importancia de este hecho es que cada elemento hereda las propiedades del elemento que lo contiene (llamado el elemento padre). Quiere decir que si especificamos la propiedad color: red para <BODY>, todos los elementos de la página heredarán esta característica y no será necesario especificar nuevamente la propiedad color en cada uno de ellos.
Entonces, un elemento que contiene a otro es llamado padre y, previsiblemente, al elemento contenido se le llama hijo. Existen otras relaciones que se usan en la definición de los selectores:
- Descendiente: un elemento (A) de descendiente de otro (B) cuando (B) es padre de (A) o cuando (B) es padre de otro elemento que a su vez es padre de (A).
- Antepasado: un elemento (A) es antepasado de otro (B) cuando (B) es su descendiente.
- Hermano: un elemento es hermano de otro cuando ambos comparten el mismo padre.

### 7. ¿ En qué consiste el proceso denominado cascada?
La cascada de CSS es el mecanismo mediante el cual el navegador determina qué reglas aplicar cuando existen estilos incompatibles. Para organizar esta prioridad, el sistema evalúa tres factores principales:
Los orígenes de las hojas de estilo:
- Del autor: Los estilos creados por el desarrollador de la página (externos, incrustados o en línea).
- Del usuario: Las preferencias o estilos personalizados definidos por quien visita el sitio, orientados a la accesibilidad.
- Del navegador: La hoja de estilo predeterminada que trae la aplicación por defecto.

El orden de fuerza de las reglas (La Cascada):
- Por Origen: Las reglas del autor tienen más fuerza que las del usuario, y estas a su vez superan a las del navegador.
- Por Especificidad: Los selectores más detallados o complejos (como UL LI) vencen a los selectores más generales (UL).
- Por Orden de Aparición: Si dos reglas tienen exactamente la misma fuerza, origen y especificidad, gana la última regla escrita en el código.

La regla especial !important:
Está pensada para garantizar la accesibilidad, permitiendo que los usuarios controlen la presentación visual.
Las declaraciones con !important superan a las normales. Sin embargo, invierten la jerarquía de origen: si tanto el autor como el usuario utilizan !important, la regla del usuario pasa a tener mayor poder.