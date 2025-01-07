<!DOCTYPE html>

<html lang="en">

<head>

    <?php session_start() ?>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>SNAKEQUIZ.PY</title>

    <link rel="stylesheet" href="princ.css">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

</head>

<body>


    <header>

        <div class="logo">SQ</div>

        <div class="user-info-container">

            <?php

            if (isset($_SESSION['Ver']) && $_SESSION['Ver'] == 1) {

                $nom = $_SESSION['nom'];

                echo "<div class='user-info'>";

                echo "<img src='mow.png' style='float:left;width:100px;height:120px;'>";

                echo "<br>";

                echo "<span>{$nom}</span>";

                echo "<br>";

                echo '<progress id="file" value="32" max="100"> 32% </progress> Lvl. 3';

                echo "</div>";

                echo '<a href="logout.php" class="login">Cerrar sesión</a>';

            } else {

                echo '<a href="iniciarses.php" class="login">Iniciar sesión</a>';

            }

            ?>

        </div>

        <div class="menu-container">

            <label for="menu-toggle" class="menu-button"></label>

            <ul class="menu">

                <li><a href="#">Inicio</a><div class="menu-text no-reverse">Inicio</div></li>

                <li><a href="#">Sobre nosotros</a><span class="menu-text">Sobre nosotros</span></li>

                <li><a href="#">Guía general</a><span class="menu-text">Guía general</span></li>

                <li><a href="#">¿Cómo jugar?</a><span class="menu-text">¿Cómo jugar?</span></li>

                <li><a href="soporte.php">Soporte</a><span class="menu-text">Soporte</span></li>

            </ul>

        </div>

    </header>

        <section>
            <img src="img/fondo.jpeg" alt="" id="one">

            <div id="run"></div>
            <h1 id="text">SNAKEQUIZ.PY</h1>
        </section>

<!--Parte de abajo que es negra-->
        <div class="test">
        </div>

<!--Tarjetas animadas-->
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
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Función estudio</h4>
                            <p>Estudia y ejercita para luego ponerte
                                a prueba con nuestro juego, así ser el profesional
                                que quieres ser mañana.
                            </p>
                             <a href="#">Estudiar.</a>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
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
                <input type="radio" name="slide" id="c4" >
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
    </body>

            <!--Pie de página-->
            <footer>
            <div class="footer-content">

                <p>&copy; 2024 SnakeQuiz.py. Todos los derechos reservados.</p>
                <ul class="socials">
                    <li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="img/twitter.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="img/instagram.png" alt="Github"></a></li>
                </ul>
            </div>
        </footer>

</html>




