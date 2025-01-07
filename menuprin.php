<?php session_start();
error_reporting(0);
if($_SESSION['Ver'] == 1){
    $_SESSION['Nope'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SNAKEQUIZ.PY</title>
    <link rel="stylesheet" href="estilo.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
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
        <div class="logo">SQ</div>



        <?php
if (isset($_SESSION['Ver']) && $_SESSION['Ver'] == 1) {

    echo '<a href="logout.php" class="login">Cerrar sesión</a>';

} else {

    echo '<a href="iniciarses.php" class="login">Iniciar sesión</a>';

}
if($_SESSION['Nope'] == 1){
    echo "<script>alert('Tienes tener iniciar sesion para acceder al perfil')</script>";
    $_SESSION['Nope'] = 0;
}

?>

        <div class="menu-container">
            <label for="menu-toggle" class="menu-button"></label>
            <ul class="menu">
                <li><a href="#">Inicio</a><div class="menu-text no-reverse">Inicio</div></li>
                <li><a href="nosotros.php">Sobre nosotros</a><span class="menu-text">Sobre nosotros</span></li>
                <li><a href="perfilusuario.php">Perfil</a><span class="menu-text">Perfil</span></li>
                <li><a href="soporte.php">Soporte</a><span class="menu-text">Soporte</span></li>
            </ul>
        </div>
    </header>

    
    <section>
        <img src="img/fondo.jpeg" alt="" id="one">
        <div id="run"></div>
        <h1 id="text">SNAKEQUIZ.PY</h1>
    </section>

    <div class="test"></div>

    <br><br><br><br>
    <center><h1>Prueba nuestras nuevas funciones ;)</h1></center>
    <div class="wrapper">
        <div class="tarjetas">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>¡Juegate un quiz y demuestra tu conocimineto!</h4>
                        <p>El juego está en una versión temrpana 
                            la cual podría contener errores, ayudanos
                            reportando si te topas uno.
                        </p>
                        <a href="index.php">Jugar.</a>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2">
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Función estudio</h4>
                        <p>Estudia y ejercita para luego ponerte
                            a prueba con nuestro juego, así ser el profesional
                            que quieres ser mañana.
                        </p>
                        <a href="planestu.php">Estudiar.</a>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3">
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>PROXIMAMENTE</h4>
                        <p>...</p>
                        <a href="#">EXTRA 1.</a>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4">
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>PROXIMAMENTE</h4>
                        <p>...</p>
                        <a href="#">EXTRA 2.</a>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <script src="js/index.js"></script>
    <script src="menu.js"></script>

    <footer>
        <p>&copy; 2024 Nuestras Historias. Todos los derechos reservados. </p>
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

