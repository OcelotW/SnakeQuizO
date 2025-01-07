<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href=img/favicon.ico>
    <style>
        body {
            background-color: #314056;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            scroll-behavior: smooth;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            flex: 1;
        }
        .story-section {
            display: flex;
            margin-bottom: 40px;
            align-items: center;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s ease-in-out;
        }
        .story-section:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .story-section:nth-child(even) {
            flex-direction: row-reverse;
        }
        .story-image {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .story-text {
            padding: 0 20px;
            flex: 1;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s, transform 0.5s;
        }
        .story-text.visible {
            opacity: 1;
            transform: translateY(0);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
        }
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
        .back-to-top:hover {
            background-color: #666;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .social-icons a:hover {
            color: #ccc;
        }


        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


    <div class="container">

    <div class="header">
            <h1>Nuestros valores como empresa:</h1>
            <a href="menuprin.php">Volver al inicio</a>
        </div>
        
        <div class="story-section">
            <img src="img/compromiso.jpg" alt="Foto 1" class="story-image">
            <div class="story-text">
                <h2>Compromiso con la Calidad Educativa</h2>
                <p>En Snakequiz.py, nos dedicamos a ofrecer una experiencia educativa 
                    de alta calidad. Cada uno de nuestros niveles y desafíos está diseñado 
                    cuidadosamente por expertos en educación y programación para garantizar 
                    que los jugadores no solo se diviertan, sino que también adquieran 
                    conocimientos sólidos y relevantes. Creemos que la educación debe ser 
                    efectiva y emocionante, y nuestro compromiso con la excelencia nos 
                    permite ofrecer un juego que realmente prepara a los programadores del 
                    futuro.</p>
            </div>
        </div>

        <div class="story-section">
            <img src="img/innovacion.jpg" alt="Foto 2" class="story-image">
            <div class="story-text">
                <h2>Innovación en el Aprendizaje</h2>
                <p>La innovación es el núcleo de Snakequiz.py. Estamos constantemente 
                    explorando nuevas tecnologías y metodologías educativas para crear una 
                    plataforma de aprendizaje dinámica y envolvente. Nuestro equipo se 
                    esfuerza por integrar las últimas tendencias en programación y 
                    gamificación, asegurando que nuestros usuarios no solo aprendan, sino que
                     lo hagan de una manera interactiva y moderna. Esta mentalidad innovadora
                      nos permite adaptar y mejorar continuamente nuestro juego para que sea 
                      una herramienta de aprendizaje de vanguardia.</p>
            </div>
        </div>

        <div class="story-section">
            <img src="img/accesibilidad.jpg" alt="Foto 3" class="story-image">
            <div class="story-text">
                <h2>Accesibilidad y Sostenibilidad</h2>
                <p>Creemos firmemente en la accesibilidad de la educación para todos. 
                    Snakequiz.py está diseñado para ser inclusivo y accesible, 
                    ofreciendo recursos y soporte a una amplia gama de estudiantes, 
                    independientemente de su origen o nivel de habilidad. Además, nos 
                    comprometemos a prácticas sostenibles, utilizando recursos digitales y
                    promoviendo la reducción de la huella de carbono. Queremos asegurarnos 
                    de que nuestra plataforma no solo sea accesible, sino también responsable
                     con el medio ambiente.</p>
            </div>
        </div>

        <div class="story-section">
            <img src="img/orientacion.jpg" alt="Foto 4" class="story-image">
            <div class="story-text">
                <h2>Orientación al Usuario</h2>
                <p>El éxito de Snakequiz.py se mide por la satisfacción y el progreso
                     de nuestros usuarios. Nos dedicamos a entender y atender las necesidades
                      de nuestros jugadores, proporcionando un soporte continuo y adaptando 
                      nuestras características en función de sus comentarios. Valoramos 
                      profundamente la retroalimentación de nuestra comunidad y trabajamos 
                      arduamente para mejorar y enriquecer la experiencia de aprendizaje.
                       Nuestra prioridad es empoderar a nuestros usuarios para que 
                       desarrollen sus habilidades de programación de manera efectiva y amena.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Nuestras Historias. Todos los derechos reservados.</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/tu_usuario" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.twitter.com/tu_usuario" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.github.com/tu_usuario" target="_blank"><i class="fab fa-github"></i></a>
        </div>
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
