<?php
// plan_estudio.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Estudio - HTML Básico</title>
    <link rel="stylesheet" href="materia.css"> <!-- Puedes agregar un archivo CSS para estilizar -->
</head>
<body>
    <header>
        <h1>Plan de Estudio: HTML Básico</h1>
    </header>

    <main>
        <section>
            <h2>1. Introducción a HTML</h2>
            <p>HTML, que significa "HyperText Markup Language", es el lenguaje estándar para estructurar contenido en la web. Fue creado en 1991 por Tim Berners-Lee y sigue siendo una parte fundamental del desarrollo web. Permite crear páginas web utilizando etiquetas que el navegador interpreta para mostrar texto, imágenes, videos y más.</p>
        </section>

        <section>
            <h2>2. Estructura Básica de HTML</h2>
            <p>Un documento HTML comienza con <code>&lt;!DOCTYPE html&gt;</code>, que indica que es un archivo HTML5. La estructura básica incluye:</p>
            <ul>
                <li><code>&lt;html&gt;</code>: Contenedor principal del documento.</li>
                <li><code>&lt;head&gt;</code>: Contiene metadatos como título, enlaces a CSS y scripts.</li>
                <li><code>&lt;body&gt;</code>: Contiene el contenido visible de la página.</li>
            </ul>
        </section>

        <section>
            <h2>3. Etiquetas Principales</h2>
            <p>HTML utiliza etiquetas para definir la estructura de una página. Algunas etiquetas comunes incluyen:</p>
            <ul>
                <li><code>&lt;h1&gt; a &lt;h6&gt;</code>: Encabezados jerárquicos.</li>
                <li><code>&lt;p&gt;</code>: Para párrafos.</li>
                <li><code>&lt;a&gt;</code>: Para enlaces.</li>
                <li><code>&lt;img&gt;</code>: Para imágenes.</li>
                <li><code>&lt;div&gt;</code> y <code>&lt;span&gt;</code>: Para agrupación y estilos personalizados.</li>
            </ul>
        </section>

        <section>
            <h2>4. Listas en HTML</h2>
            <p>HTML soporta dos tipos principales de listas:</p>
            <ul>
                <li><code>&lt;ul&gt;</code>: Lista desordenada (viñetas).</li>
                <li><code>&lt;ol&gt;</code>: Lista ordenada (numerada).</li>
                <li><code>&lt;li&gt;</code>: Elemento de lista.</li>
            </ul>
        </section>

        <section>
            <h2>5. Formularios</h2>
            <p>Los formularios permiten a los usuarios interactuar con tu página web. Las etiquetas principales son:</p>
            <ul>
                <li><code>&lt;form&gt;</code>: Define un formulario.</li>
                <li><code>&lt;input&gt;</code>: Campos de entrada.</li>
                <li><code>&lt;textarea&gt;</code>: Áreas de texto.</li>
                <li><code>&lt;button&gt;</code>: Botón para enviar.</li>
            </ul>
        </section>

        <section>
            <h2>6. Tablas</h2>
            <p>Las tablas permiten organizar datos en filas y columnas:</p>
            <ul>
                <li><code>&lt;table&gt;</code>: Contenedor principal.</li>
                <li><code>&lt;tr&gt;</code>: Filas.</li>
                <li><code>&lt;td&gt;</code>: Celdas.</li>
                <li><code>&lt;th&gt;</code>: Encabezados de columnas.</li>
            </ul>
        </section>

        <section>
            <h2>7. Imágenes y Multimedia</h2>
            <p>HTML permite añadir imágenes y videos:</p>
            <ul>
                <li><code>&lt;img&gt;</code>: Añadir imágenes con los atributos <code>src</code> (ruta) y <code>alt</code> (texto alternativo).</li>
                <li><code>&lt;video&gt;</code>: Incrustar videos.</li>
                <li><code>&lt;audio&gt;</code>: Añadir audio.</li>
            </ul>
        </section>

        <section>
            <h2>8. Enlaces y Navegación</h2>
            <p>Los enlaces conectan páginas web:</p>
            <ul>
                <li><code>&lt;a href="URL"&gt;</code>: Crear enlaces.</li>
                <li><code>&lt;nav&gt;</code>: Para menús de navegación.</li>
            </ul>
        </section>

        <section>
            <h2>9. Semántica en HTML</h2>
            <p>HTML moderno incluye etiquetas semánticas para mejorar la accesibilidad y el SEO:</p>
            <ul>
                <li><code>&lt;header&gt;</code>: Encabezado de la página.</li>
                <li><code>&lt;main&gt;</code>: Contenido principal.</li>
                <li><code>&lt;footer&gt;</code>: Pie de página.</li>
                <li><code>&lt;section&gt;</code>: Secciones de contenido.</li>
                <li><code>&lt;article&gt;</code>: Contenido independiente.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Plan de Estudio Interactivo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
