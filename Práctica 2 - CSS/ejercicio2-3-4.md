# **Ejercicio 2 - CSS**

### **Regla 1: p#normal**
- Selector: elemento p con id="normal" (selector de tipo + selector de ID).
- Declaraciones:
    - font-family: arial, helvetica; define la tipografía (Arial, o Helvetica si no está disponible).
    - font-size: 11px; define el tamaño de la fuente en 11 píxeles.
    - font-weight: bold; pone el texto en negrita.
- Se aplica a: p id="normal"Este es un párrafo.
- Efecto: el primer párrafo se ve en Arial/Helvetica, 11px y negrita.

### **Regla 2: *#destacado**
- Selector: el selector universal * combinado con el id destacado.
- Declaraciones:
    - border-style: solid; pone un borde de línea.
    - border-color: blue; lo pone de color azul.
    - border-width: 2px; le da un grosor de 2 píxeles.
- Se aplica a: p id="destacado" y table id="destacado", porque el * admite cualquier elemento con ese id.
- Efecto: el segundo párrafo y la tabla quedan rodeados por un borde azul sólido de 2px. En la tabla el borde afecta solo al contorno de la tabla.

### **Regla 3: #distinto**
- Selector: solo el id distinto, sin importar el tipo de elemento.
- Declaraciones:
    - background-color: #9EC7EB; aplica un fondo celeste.
    - color: red; pone el texto en rojo.
- Se aplica a: p id="distinto"Este es el último párrafo
- Efecto: el último párrafo se ve con texto rojo sobre fondo celeste, que ocupa todo el ancho del bloque.


# Ejercicio 3

### **Regla 1: p.quitar { color: red; }**
- Selector: elemento p con la clase quitar
- Declaración: color: red; (propiedad color, valor red).
- Se aplica a: solo a los p que tengan la clase quitar.
- Efecto: el texto de esos párrafos se ve en rojo.


### **Regla 2: *.desarrollo { font-size: 8px; }**
- Selector: selector universal * + clase desarrollo.
- Declaración: font-size: 8px;
- Se aplica a: cualquier elemento con la clase desarrollo.
- Efecto: el texto se muestra en 8 píxeles (muy pequeño).


### **Regla 3: .importante { font-size: 20px; }**
- Selector: solo la clase importante, sin restricción de tipo de elemento.
- Declaración: font-size: 20px;
- Se aplica a: cualquier elemento con la clase importante.
- Efecto: el texto se muestra en 20 píxeles (grande).

1. El h1 class="quitar" no se pone rojo. Tiene la clase quitar, pero la regla es p.quitar y exige que el elemento sea un p. Para que también afectara al encabezado, el selector tendría que ser .quitar.
2. El tercer párrafo no recibe ningún estilo. Al no tener atributo class, ningún selector coincide. Se ve con el tamaño y color por defecto.
3. El último párrafo combina dos clases. Con class="quitar importante" coinciden dos reglas:
p.quitar aporta color: red.
.importante aporta font-size: 20px.


# Ejercicio 4

- Declaraciones:
    - * → color verde en todos los elementos.
    - a:link → enlace sin visitar: gris.
    - a:visited → enlace visitado: azul.
    - a:hover → mouse encima del enlace: fucsia.
    - a:active → al hacer clic en el enlace: rojo.
    - p → fuente Arial/Helvetica, tamaño 10px, color negro.
    - .contenido → tamaño 14px y negrita.

**Código 1**: la clase está en el <p>
- Párrafo
    - Color: negro. La regla p le gana a *.
    - Fuente: Arial/Helvetica, por la regla p.
    - Tamaño: 14px. .contenido es más específica que p (10px).
    - Peso: normal. El style="font-weight: normal" le gana a .contenido (negrita).

- Tabla
    - Color: verde, por la regla *.
    - Tamaño, fuente y peso: los del navegador. Ninguna regla se los da y el <body> no tiene clase.

- Enlace
    - Color: gris sin visitar, azul si ya fue visitado, fucsia con el mouse encima y rojo al hacer clic. Las reglas a:... le ganan a *.
    - Tamaño, fuente y peso: los del navegador.


**Código 2**: la clase está en el <body>
- Párrafo
    - Color: negro, por la regla p.
    - Fuente: Arial/Helvetica, por la regla p.
    - Tamaño: 10px. La regla p es directa y le gana al 14px heredado del body.
    - Peso: negrita, heredado del body (ninguna regla directa lo cambia).

- Tabla
    - Color: verde, por la regla *.
    - Tamaño: 14px, heredado del body.
    - Peso: negrita, heredado del body.
    - Fuente: la del navegador, porque el body no define fuente.

- Enlace
    - Color: gris, azul, fucsia o rojo según el estado.
    - Tamaño: 14px, heredado.
    - Peso: negrita, heredado.