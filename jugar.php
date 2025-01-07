<?php
session_start();

// Si el usuario no está logeado lo enviamos al index
if (!$_SESSION['usuario']) {
    header("Location:index.php");
}
include("admin/funciones.php");

$confi = obtenerConfiguracion();
$totalPreguntasPorJuego = $confi['totalPreguntas'];

// Variables que controlan la partida

if (isset($_GET['siguiente'])) { // Ya está jugando
    // Aumento 1 en las estadística

    // Controlar si la respuesta está bien
    if (isset($_GET['respuesta'])) {
        if ($_SESSION['respuesta_correcta'] == $_GET['respuesta']) {
            $_SESSION['correctas'] = $_SESSION['correctas'] + 1;
        }
    } else {
        // Si no se selecciona ninguna respuesta, se considera incorrecta
        // Podrías incrementar un contador de respuestas incorrectas aquí si lo necesitas
    }

    $_SESSION['numPreguntaActual'] = $_SESSION['numPreguntaActual'] + 1;
    if ($_SESSION['numPreguntaActual'] < ($totalPreguntasPorJuego)) {
        $preguntaActual = obtenerPreguntaPorId($_SESSION['idPreguntas'][$_SESSION['numPreguntaActual']]);
        $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
    } else {
        // Lo enviamos a la página de los resultados
        // Calculo la cantidad de respuestas incorrectas y lo guardo en una variable global
        $_SESSION['incorrectas'] = $totalPreguntasPorJuego - $_SESSION['correctas'];
        // Obtengo el nombre de la categoría y lo pongo en una variable global
        $_SESSION['nombreCategoria'] = obtenerNombreTema($_SESSION['idCategoria']);
        $_SESSION['score'] = ($_SESSION['correctas'] * 100) / $totalPreguntasPorJuego;
        include'Xpcalculations.php';
        header("Location: final.php");
        exit();
    }

} else { // Comenzó a jugar
    $_SESSION['correctas'] = 0;
    $_SESSION['numPreguntaActual'] = 0;
    $_SESSION['preguntas'] = obtenerIdsPreguntasPorCategoria($_SESSION['idCategoria']);
    $_SESSION['idPreguntas'] = array();

    foreach ($_SESSION['preguntas'] as $idPregunta) {
        array_push($_SESSION['idPreguntas'], $idPregunta['id']); // Item agregado
    }

    // Desordeno el arreglo
    shuffle($_SESSION['idPreguntas']);
    $preguntaActual = obtenerPreguntaPorId($_SESSION['idPreguntas'][0]);
    $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Tú puedes!</title>
    <link rel="stylesheet" href="princ.css">
    <link rel="icon" type="image/x-icon" href=img/favicon.ico>
</head>
<body>
    <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
                <?php echo obtenerNombreTema($preguntaActual['tema']) ?>
            </div>
            <a href="index.php">Snakegame.py</a>
        </header>
        <div class="info">
            <div class="estadoPregunta">
                Pregunta <span class="numPregunta"><?php echo $_SESSION['numPreguntaActual'] + 1 ?></span> de <?php echo $totalPreguntasPorJuego ?>
            </div>
            <h3>
                <?php echo $preguntaActual['pregunta'] ?>
            </h3>
            <form id="quizForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="opciones">
                    <label for="respuesta1" onclick="seleccionar(this)" class="op1">
                        <p><?php echo $preguntaActual['opcion_a'] ?></p>
                        <input type="radio" name="respuesta" value="A" id="respuesta1" required>
                    </label>
                    <label for="respuesta2" onclick="seleccionar(this)" class="op2">
                        <p><?php echo $preguntaActual['opcion_b'] ?></p>
                        <input type="radio" name="respuesta" value="B" id="respuesta2" required>
                    </label>
                    <label for="respuesta3" onclick="seleccionar(this)" class="op3">
                        <p><?php echo $preguntaActual['opcion_c'] ?></p>
                        <input type="radio" name="respuesta" value="C" id="respuesta3" required>
                    </label>
                </div>
                <input type="hidden" name="siguiente" value="true">
                <div class="boton">
                    <input type="submit" value="Siguiente">
                </div>
            </form>
        </div>
    </div>
    <script>
    let timer = 15;
    const timerDisplay = document.createElement('div');
    timerDisplay.id = 'timer';
    timerDisplay.style.fontSize = '18px'; // Ejemplo de estilo: tamaño de fuente
    timerDisplay.style.color = 'blue'; // Ejemplo de estilo: color de texto
    timerDisplay.style.padding = '10px'; // Ejemplo de estilo: relleno
    timerDisplay.style.backgroundColor = '#f0f0f0'; // Ejemplo de estilo: color de fondo
    timerDisplay.innerHTML = `Tiempo restante: ${timer} segundos`;
    document.querySelector('.info').prepend(timerDisplay);

    const countdown = setInterval(() => {
        timer--;
        timerDisplay.innerHTML = `Tiempo restante: ${timer} segundos`;
        if (timer <= 0) {
            clearInterval(countdown);
            document.getElementById('quizForm').submit();
        }
    }, 1000);
</script>

    <script src="juego.js"></script>
</body>
</html>
