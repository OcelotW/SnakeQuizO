
<?php
session_start();
// session_destroy();

include("admin/funciones.php");

aumentarVisita();

$categorias =  obtenerCategorias();

if(isset($_GET['idCategoria'])){
    session_start();
    $_SESSION['usuario'] = "usuario";
    $_SESSION['idCategoria'] = $_GET['idCategoria'];
    header("Location: jugar.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="icon" type="image/x-icon" href=img/favicon.ico>
    <link rel="stylesheet" href="princ.css">
    <link rel="stylesheet" href="princ.css">
    <title>¡Bienvenid@!</title>
</head>
<body>
<header>

    <div class="logo">SQ</div>

    <div class="menu-container">        
      <label for="menu-toggle" class="menu-button"></label>
      <ul class="menu">
        <li><a href="menuprin.php">Inicio</a><div class="menu-text no-reverse">Inicio</div></li>
        <li><a href="#">Sobre Mí</a><span class="menu-text">Sobre Mí</span></li>
        <li><a href="#">BLog</a><span class="menu-text">Blog</span></li>
        <li><a href="jugabilidad.php">¿Cómo jugar?</a><span class="menu-text">¿Cómo jugar?</span></li>
        <li><a href="#">Soporte Técnico</a><span class="menu-text">Soporte Técnico</span></li>
      </ul>
    </div>

  </header>
    <div class="container" id="cantainer">
        <div class="left">
        <div class="spinner">
        <img src=img/moxxie1.png alt="Moxxie!">
    </div> <br><br><br><br><br>
            <h1>SNAKEQUIZ.PY</h1>
            <h2>PON A PRUEBA TUS CONOCIMIENTOS</h2>
            <br><br><br><br><br>
        </div>
        <div class="right">
            <h3>Elige una opción</h3>
            <div class="categorias">
                <?php while ($cat = mysqli_fetch_assoc($categorias)):?>
                <div class="categoria">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="<?php echo $cat['tema']?>">
                        <input type="hidden" name="idCategoria" value="<?php echo $cat['tema']?>">
                        <a href="javascript:{}" onclick="document.getElementById(<?php echo $cat['tema']?>).submit(); return false;">
                            <?php echo obtenerNombreTema($cat['tema'])?>
                        </a>
                    </form>
                </div>
                <?php endwhile?>
            </div>
        </div>
    </div>
    <script src="menu.js"></script>
</body>
</html>