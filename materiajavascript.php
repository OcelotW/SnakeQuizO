<?php
// plan_estudio.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Estudio - JavaScript Básico</title>
    <link rel="stylesheet" href="materia.css"> <!-- Puedes agregar un archivo CSS para estilizar -->
</head>
<body>
    <header>
        <h1>Plan de Estudio: JavaScript Básico</h1>
    </header>

    <main>
        <section>
            <h2>1. Introducción a JavaScript</h2>
            <p>JavaScript es un lenguaje de programación ampliamente utilizado en el desarrollo web. Permite agregar interactividad, lógica y funcionalidades dinámicas a las páginas web. Fue creado por Brendan Eich en 1995 y se ha convertido en uno de los pilares del desarrollo front-end. JavaScript se ejecuta en el navegador del cliente, lo que lo hace ideal para crear experiencias rápidas e interactivas. Además, es compatible con casi todos los navegadores modernos, lo que lo convierte en una herramienta indispensable para los desarrolladores web.</p>
        </section>

        <section>
            <h2>2. Sintaxis Básica de JavaScript</h2>
            <p>El código de JavaScript se escribe entre etiquetas <code>&lt;script&gt;</code> en un archivo HTML o en un archivo separado con extensión <code>.js</code>. Las instrucciones terminan con punto y coma (opcional pero recomendado). Para mostrar mensajes en la consola del navegador, se utiliza <code>console.log()</code>. Por ejemplo, <code>console.log("Hola, Mundo");</code> imprimirá "Hola, Mundo" en la consola del navegador. JavaScript también puede interactuar con elementos HTML usando el DOM, permitiendo modificar el contenido de una página en tiempo real.</p>
        </section>

        <section>
            <h2>3. Variables en JavaScript</h2>
            <p>En JavaScript, las variables se declaran con las palabras clave <code>var</code>, <code>let</code> o <code>const</code>. Por ejemplo, <code>let nombre = "Juan";</code> asigna el valor "Juan" a la variable <code>nombre</code>. A diferencia de PHP, JavaScript es un lenguaje de tipado dinámico, lo que significa que las variables pueden contener diferentes tipos de datos en diferentes momentos. Entre los tipos de datos más comunes están: cadenas (string), números (number), booleanos (boolean), arrays y objetos.</p>
        </section>

        <section>
            <h2>4. Operadores en JavaScript</h2>
            <p>JavaScript ofrece operadores para realizar cálculos y comparaciones. Los operadores aritméticos (<code>+</code>, <code>-</code>, <code>*</code>, <code>/</code>, <code>%</code>) permiten realizar cálculos matemáticos, mientras que los operadores de comparación (<code>===</code>, <code>!==</code>, <code>&gt;</code>, <code>&lt;</code>) ayudan a evaluar relaciones entre valores. Además, los operadores lógicos (<code>&&</code>, <code>||</code>, <code>!</code>) son útiles para combinar condiciones y tomar decisiones más complejas en el código. Por ejemplo, <code>if (edad &gt;= 18 &amp;&amp; permiso === true)</code> verifica si una persona es mayor de edad y tiene permiso.</p>
        </section>

        <section>
            <h2>5. Estructuras de Control</h2>
            <p>JavaScript utiliza estructuras de control para gestionar el flujo del programa. La estructura <code>if</code> permite ejecutar código si se cumple una condición. Para manejar múltiples condiciones, se puede usar <code>else</code> y <code>else if</code>. Además, la estructura <code>switch</code> evalúa una expresión contra múltiples casos posibles, facilitando decisiones más claras y estructuradas. Estas estructuras son esenciales para la lógica de los programas.</p>
        </section>

        <section>
            <h2>6. Bucles en JavaScript</h2>
            <p>Los bucles en JavaScript permiten repetir un bloque de código. El bucle <code>for</code> se utiliza cuando se conoce el número de iteraciones, mientras que <code>while</code> y <code>do...while</code> son útiles para condiciones más dinámicas. Por ejemplo, <code>for (let i = 0; i &lt; 10; i++)</code> ejecuta el código dentro del bucle 10 veces. Además, el bucle <code>for...of</code> facilita recorrer elementos en arrays y <code>for...in</code> en objetos.</p>
        </section>

        <section>
            <h2>7. Funciones en JavaScript</h2>
            <p>Las funciones en JavaScript son bloques de código reutilizables que pueden recibir parámetros y devolver resultados. Se definen con la palabra clave <code>function</code> o como funciones flecha (<code>=&gt;</code>). Por ejemplo:  
            <pre><code>function sumar(a, b) {  
    return a + b;  
}</code></pre>  
            Además, las funciones son fundamentales para organizar el código y hacerlo más fácil de mantener.</p>
        </section>

        <section>
            <h2>8. Arrays en JavaScript</h2>
            <p>Los arrays son estructuras que almacenan múltiples valores en un solo contenedor. Se pueden crear con corchetes <code>[]</code>. Por ejemplo, <code>let frutas = ["manzana", "naranja", "plátano"];</code>. JavaScript ofrece métodos como <code>push()</code>, <code>pop()</code>, <code>shift()</code> y <code>map()</code> para manipular arrays, lo que facilita el trabajo con conjuntos de datos.</p>
        </section>

        <section>
            <h2>9. Objetos en JavaScript</h2>
            <p>Los objetos son colecciones de propiedades y valores. Se crean utilizando llaves <code>{}</code>. Por ejemplo:  
            <pre><code>let persona = {  
    nombre: "Juan",  
    edad: 30,  
    saludar: function() {  
        console.log("Hola, soy " + this.nombre);  
    }  
};</code></pre>  
            Los objetos son fundamentales para modelar datos en JavaScript.</p>
        </section>

        <section>
            <h2>10. Manipulación del DOM</h2>
            <p>El DOM (Document Object Model) es una representación de la estructura HTML de una página. JavaScript permite interactuar con el DOM para cambiar el contenido y el estilo de los elementos. Por ejemplo, se puede usar <code>document.getElementById()</code> o <code>document.querySelector()</code> para seleccionar elementos y modificarlos. Esto es clave para crear aplicaciones web dinámicas e interactivas.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Plan de Estudio Interactivo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
