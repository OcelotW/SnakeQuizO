<?php
// plan_estudio.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Estudio - PHP Básico</title>
    <link rel="stylesheet" href="materia.css"> <!-- Puedes agregar un archivo CSS para estilizar -->
</head>
<body>
    <header>
        <h1>Plan de Estudio: PHP Básico</h1>
    </header>

    <main>
        <section>
            <h2>1. Introducción a PHP</h2>
            <p>PHP, que significa "Hypertext Preprocessor", es un lenguaje de programación de código abierto ampliamente utilizado para el desarrollo web. Fue creado inicialmente por Rasmus Lerdorf en 1994 y ha evolucionado a lo largo de los años, convirtiéndose en uno de los lenguajes más populares para crear aplicaciones web dinámicas. PHP se ejecuta en el servidor, lo que significa que el código PHP se procesa en el servidor web y se envía el resultado al navegador del usuario, permitiendo así la creación de sitios web interactivos. Para empezar a usar PHP, se requiere un servidor web que soporte este lenguaje, como Apache, y un entorno de desarrollo como XAMPP o MAMP.</p>
           
        </section>

        <section>
            <h2>2. Sintaxis Básica de PHP</h2>
            <p>La sintaxis de PHP comienza con las etiquetas <.?php y termina con ?>. Todo el código PHP debe estar contenido entre estas etiquetas para que el servidor lo interprete correctamente. Una de las características más importantes de PHP es su capacidad para incrustarse dentro de HTML, lo que permite la creación de páginas web dinámicas. Para mostrar texto en el navegador, se utilizan las funciones echo y print. Por ejemplo, echo "Hola, Mundo"; mostrará "Hola, Mundo" en la página. Esta capacidad de combinar PHP con HTML hace que sea fácil generar contenido dinámico según las necesidades del usuario.</p>

        </section>

        <section>
            <h2>3. Variables en PHP</h2>
            <p>En PHP, las variables se declaran con el símbolo $, seguido del nombre de la variable. Por ejemplo, $nombre = "Juan"; asigna el valor "Juan" a la variable $nombre. PHP es un lenguaje de tipado dinámico, lo que significa que no es necesario especificar el tipo de dato de una variable al momento de su declaración. Los tipos de datos más comunes en PHP incluyen enteros, flotantes, cadenas y booleanos. Además, PHP permite la creación de arrays, que son estructuras que pueden almacenar múltiples valores en una sola variable, facilitando el manejo de conjuntos de datos.</p>

        </section>

        <section>
            <h2>4. Operadores en PHP</h2>
            <p>PHP cuenta con una amplia variedad de operadores que permiten realizar diferentes tipos de operaciones. Los operadores aritméticos como +, -, *, y / permiten realizar cálculos matemáticos. Los operadores de comparación (==, !=, >, <) se utilizan para comparar valores y determinar relaciones entre ellos. Los operadores lógicos (&&, ||, !) son útiles en condiciones y permiten combinar múltiples condiciones. Por ejemplo, un operador if puede evaluar si una condición es verdadera o falsa, permitiendo así tomar decisiones en el flujo del programa.</p>

        </section>

        <section>
            <h2>5. Estructuras de Control</h2>
            <p>Las estructuras de control en PHP permiten ejecutar diferentes bloques de código según se cumplan ciertas condiciones. La estructura if es la más común y permite ejecutar un bloque de código si una condición es verdadera. La estructura else puede seguir a un if para manejar el caso contrario. Además, switch es otra estructura de control que permite evaluar una variable contra múltiples valores posibles, facilitando la gestión de condiciones complejas. Estas estructuras son esenciales para construir lógica en tus programas y gestionar el flujo de ejecución.</p>

        </section>

        <section>
            <h2>6. Bucles en PHP</h2>
            <p>Los bucles son fundamentales para ejecutar un bloque de código repetidamente hasta que se cumpla una condición. PHP ofrece varios tipos de bucles, incluyendo for, while, y foreach. El bucle for se utiliza comúnmente cuando conoces de antemano cuántas veces necesitas iterar. Por otro lado, while ejecuta el bloque de código mientras una condición sea verdadera. El bucle foreach es específico para arrays y permite recorrer cada elemento del array fácilmente. Los bucles son útiles para realizar tareas repetitivas, como procesar elementos de una lista o contar hasta un número determinado.</p>

        </section>

        <section>
            <h2>7. Funciones en PHP</h2>
            <p>Las funciones son bloques de código que se pueden reutilizar en un programa, lo que ayuda a mantener el código organizado y más fácil de leer. Se definen utilizando la palabra clave function, seguida del nombre de la función y los parámetros que puede recibir. Por ejemplo, una función simple para sumar dos números podría ser function sumar($a, $b) { return $a + $b; }. Las funciones pueden devolver valores utilizando la palabra clave return, lo que permite utilizar el resultado en otras partes del programa. Además, PHP ofrece muchas funciones integradas que simplifican tareas comunes, como manipulación de cadenas y gestión de arrays.</p>

        </section>

        <section>
            <h2>8. Arrays en PHP</h2>
            <p>Los arrays son una parte fundamental de PHP y permiten almacenar múltiples valores en una sola variable. Existen dos tipos principales de arrays: indexados y asociativos. Los arrays indexados utilizan índices numéricos para acceder a los valores, mientras que los arrays asociativos utilizan claves asociativas que pueden ser cadenas. Puedes crear un array simple con la función array(), como en $frutas = array("manzana", "naranja", "plátano");. Los arrays son extremadamente útiles para organizar y gestionar conjuntos de datos, permitiendo realizar operaciones como agregar, eliminar y buscar elementos.</p>

        </section>

        <section>
            <h2>9. Superglobales en PHP</h2>
            <p>PHP se integra fácilmente con formularios HTML, permitiendo recibir datos del usuario. Cuando un formulario se envía, PHP utiliza superglobales como $_POST y $_GET para acceder a los datos enviados. La superglobal $_POST se utiliza para datos enviados mediante el método POST, mientras que $_GET se utiliza para datos enviados a través de la URL. Es fundamental validar y sanitizar estos datos antes de utilizarlos para evitar problemas de seguridad, como ataques de inyección SQL. Para hacerlo, puedes utilizar funciones como filter_var() para validar entradas.</p>

        </section>

        <section>
            <h2>10. Manejo de Archivos</h2>
            <p>PHP ofrece la capacidad de conectarse a bases de datos, lo que es esencial para el desarrollo de aplicaciones web dinámicas. Las dos extensiones más comunes para conectar PHP a bases de datos MySQL son mysqli y PDO. Ambas permiten realizar consultas SQL para insertar, actualizar, eliminar y seleccionar datos de las bases de datos. Es importante utilizar consultas preparadas para prevenir inyecciones SQL, asegurando así la seguridad de la aplicación. Conectarse a una base de datos en PHP generalmente implica establecer la conexión, realizar la consulta y manejar los resultados de forma adecuada.</p>

        </section>

        
    </main>

    <footer>
        <p>&copy;  2024 Plan de Estudio Interactivo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
