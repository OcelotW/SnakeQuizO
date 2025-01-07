<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Si el usuario no esta logeado lo enviamos al index
if (!$_SESSION['usuario']) {
    header("Location:index.php");
}
//Aumentamos la estadistica
include("admin/funciones.php");
aumentarCompletados();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>¡Felicitaciones!</title>
</head>
<body>

    <div class="container-final" id="container-final">
        <div class="info">
            <h2>RESULTADO FINAL</h2>
            <div class="estadistica">
                <div class="acierto">
                    <span class="correctas numero"> <?php echo $_SESSION['correctas'] ?></span>
                    CORRECTAS
                </div>
                <div class="acierto">
                    <span class="incorrectas numero"> <?php echo $_SESSION['incorrectas'] ?></span>
                    INCORRECTAS
                </div>
            </div>
            <div class="score">
                <div class="box">
                    <div class="chart" data-percent="<?php echo $_SESSION['score'] ?>">
                       <?php echo $_SESSION['score'] ?>%
                    </div>
                    <h2>PUNTUACIÓN</h2>
                </div>
            </div>
            <?php
            if($_SESSION['Ver'] == 1){
                if($_SESSION['Stat'] ==1){
                    echo "<h2>Has aprobado</h2>";
                }elseif($_SESSION['Stat']==2)
                    echo "<h2>Has Desaprovado</h2>";
            
                echo "<div class='xp-gained'>";
                echo "<h2>XP GANADO</h2>";
                echo "<span class='xp numero'> $_SESSION[xp] </span>";
                echo "</div>";
                if (isset($_SESSION['LvLN']) != $_SESSION['LVLO']){ 
                    echo "<div class='notification level-up'>";
                    echo "<h2>¡Felicidades!</h2>";
                    echo "<p>¡Has subido al nivel! $_SESSION[LvLN] </p>";
                    echo "</div>";
            }
        }
        ?>

            <a href="index.php">Volver al menú</a>

        </div>
    </div>
    <script src="juego.js"></script>
</body>
</html>

