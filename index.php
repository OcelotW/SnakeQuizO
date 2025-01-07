<?php

// session_destroy();

include("admin/funciones.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


    if ($_SESSION['fuera'] == 2) {
        echo "<script>alert('Necesitas nivel 2 para poder realizar este quiz')</script>";
        $_SESSION['fuera'] = 0;
    }elseif($_SESSION['fuera']== 6){
        echo "<script>alert('Necesitas nivel 6 para poder realizar este quiz')</script>";
        $_SESSION['fuera'] = 0;
    }

$categorias = obtenerCategorias();

if (isset($_GET['idCategoria'])) {
    $_SESSION['usuario'] = "usuario";
    $_SESSION['idCategoria'] = $_GET['idCategoria'];
    header("Location: jugar.php");
    exit(); // Es importante agregar esto después de header() para evitar que el script continúe ejecutándose.
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> <!-- Verifica que la ruta sea correcta -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>¡Bienvenid@!</title>
</head>
<body>
<header>
    <div class="logo">SQ</div>
    <div class="menu-container">        
        <label for="menu-toggle" class="menu-button"></label>
        <ul class="menu">
            <li><a href="menuprin.php">Inicio</a><div class="menu-text no-reverse">Inicio</div></li>
            <li><a href="nosotros.php">Sobre nosotros</a><span class="menu-text">Sobre nosotros</span></li>
            <li><a href="soporte.php">Soporte</a><span class="menu-text">Soporte</span></li>
        </ul>
    </div>
</header>
<div class="container" id="container">
    <div class="left">
    <br><br><br><br><br><br><br><br><br><br>
        <h1>SNAKEQUIZ.PY</h1>
        <h2>PON A PRUEBA TUS CONOCIMIENTOS</h2>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    
    <div class="right">
        <center><h3>Elige una opción <br> (Se recomienda haber estudiado en el plan de estudio)</h3>
        <div class="categorias">
            <?php while ($cat = mysqli_fetch_assoc($categorias)): ?>
            <div class="categoria">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET" id="form-<?php echo $cat['tema']; ?>">
                    <input type="hidden" name="idCategoria" value="<?php echo $cat['tema']; ?>">
                    <a href="javascript:{}" onclick="document.getElementById('form-<?php echo $cat['tema']; ?>').submit(); return false;">
                        <?php echo obtenerNombreTema($cat['tema']); ?>
                    </a>
                </form>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<script src="menu.js"></script>
</body>
</html>
