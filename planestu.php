<?php
// Aquí podrías agregar lógica PHP, como traer datos de una base de datos, manejar formularios, etc.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Estudio - Enciclopedia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="plan.css">

<style>
    .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease-in-out;
            z-index: 1000;
        }

        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            text-decoration: none;
        }
    </style>


</head>
<body>
    <header>
        <h1>Plan de Estudio Interactivo</h1>
        <nav>
            <ul>
                <li><a href="#introduction">Introducción</a></li>
                <li><a href="#subjects">Materias</a></li>
                <li><a href="#resources">Recursos</a></li>
            </ul>
        </nav>
    </header>

    <section id="introduction">
        <h2>Introducción</h2>
        <p>
            <?php
            // Mensaje personalizado en PHP
            echo "Bienvenido al plan de estudio interactivo. Aquí encontrarás material de estudio organizado por temas, junto con recursos adicionales para mejorar tu aprendizaje.";
            ?>
        </p>
    </section>

    <section id="subjects">
        <h2>Materias</h2>
        <?php
        // Ejemplo básico de arreglo para mostrar materias (esto se podría obtener de una base de datos)
        $materias = [

            "PHP" => "PHP es un lenguaje de programación de código abierto para desarrollar aplicaciones web dinámicas.",
            
            

        ];

        // Mostrar materias dinámicamente
        foreach ($materias as $materia => $descripcion) {
            echo "<div class='subject'>";
            echo "<h3>$materia</h3>";
            echo "<p>$descripcion</p>";
            echo "</div>";
        }



                // Ejemplo básico de arreglo para mostrar materias (esto se podría obtener de una base de datos)
                $materias = [

                    "HTML" => "HTML es el lenguaje estándar de marcado que estructura el contenido de las páginas web.",
                    
                    
        
                ];
        
                // Mostrar materias dinámicamente
                foreach ($materias as $materia => $descripcion) {
                    echo "<div class='subject'>";
                    echo "<h3>$materia</h3>";
                    echo "<p>$descripcion</p>";
                    echo "</div>";
                }



                                // Ejemplo básico de arreglo para mostrar materias (esto se podría obtener de una base de datos)
                                $materias = [

                                    "JAVASCRIPT" => "JavaScript es un lenguaje que da vida e interactividad a las páginas web.",
                                    
                                    
                        
                                ];
                        
                                // Mostrar materias dinámicamente
                                foreach ($materias as $materia => $descripcion) {
                                    echo "<div class='subject'>";
                                    echo "<h3>$materia</h3>";
                                    echo "<p>$descripcion</p>";
                                    echo "</div>";
                                }
        ?>
    </section>

    

    <section id="resources">
        <h2>Recursos</h2>
        <ul>
            <li><a href="materiaphp.php" target="_blank">¡Aprendamos PHP!</a></li>
            <li><a href="materiahtml.php" target="_blank">¡Aprendamos HTML!</a></li>
            <li><a href="materiajavascript.php" target="_blank">¡Aprendamos JavaScript!</a></li>
        </ul>
    </section>

    

    <center><a href="menuprin.php">Volver al inicio</a> <br><br>    
    <footer>
        <p>© 2024 Plan de Estudio Interactivo. Todos los derechos reservados.</p>
    </footer>

    <button class="back-to-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>


    <script>
        function checkVisibility() {
            const storyTexts = document.querySelectorAll('.story-text');
            storyTexts.forEach(text => {
                const rect = text.getBoundingClientRect();
                const isVisible = (rect.top >= 0 && rect.bottom <= window.innerHeight);
                if (isVisible) {
                    text.classList.add('visible');
                }
            });
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('resize', checkVisibility);
        
        checkVisibility();
    </script>


</body>
</html>
