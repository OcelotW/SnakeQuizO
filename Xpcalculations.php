<?php
session_start();
include("conexionlog.php");
$conn = Conectar();
// Asegúrate de que estas funciones estén definidas y funcionen correctamente
ObtenerDificultad();
ObtenerXPus();
ObtLevel();
ObtXPlevel();
ObtenerAprobados();
ObtenerDesaprovados();
$LvlO = $_SESSION['Lvl'];
$_SESSION['LVLO'] = $LvlO;
if (isset($_SESSION['Ver']) && $_SESSION['Ver'] == 1) {
// Verifica que todas las variables de sesión necesarias estén configuradas
if (!isset($_SESSION['nom']) || !isset($_SESSION['Dif']) || !isset($_SESSION['XpUs']) || !isset($_SESSION['Lvl']) || !isset($_SESSION['XPup']) || !isset($_SESSION['incorrectas'])) {
    die("Error: Faltan variables de sesión necesarias");
}


switch($_SESSION['Dif']){
    case 1:
        $xpGanado = 100 - (5 * $_SESSION['incorrectas']);
        break;
    case 2:
        $xpGanado = 200 - (10 * $_SESSION['incorrectas']);
        break;
    case 3:
        $xpGanado = 300 - (15 * $_SESSION['incorrectas']);
        break;
    default:
        die("Error: Dificultad no válida");
}

$_SESSION['xp'] = $_SESSION['XpUs'] + $xpGanado;

if($_SESSION['xp']  == $_SESSION['XPup']){
    // XP exactamente igual a la necesaria para subir de nivel
    $lvlN = $_SESSION['Lvl'] + 1;
    $query = "UPDATE cliente SET Nivel = $lvlN, exp = 0 WHERE User = '$_SESSION[nom]'";
    $_SESSION['LvLN'] = $lvlN;
} elseif($_SESSION['xp']  > $_SESSION['XPup']){
    // XP supera la necesaria para subir de nivel
    $lvlN = $_SESSION['Lvl'] + 1;
    $xpR = $_SESSION['xp']  - $_SESSION['XPup'];
    $query = "UPDATE cliente SET Nivel = $lvlN, exp = $xpR WHERE User = '$_SESSION[nom]'";
    $_SESSION['LvLN'] = $lvlN;
} else {
    // XP no alcanza para subir de nivel
    $query = "UPDATE cliente SET exp = '$_SESSION[xp]'  WHERE User = '$_SESSION[nom]'";
}

if(!mysqli_query($conn, $query)){
    die("Error en la actualización: " . mysqli_error($conn));
}

// Actualiza las variables de sesión
$_SESSION['XpUs'] = $_SESSION['xp'] ;
if(isset($lvlN)){
    $_SESSION['Lvl'] = $lvlN;
    // Aquí deberías actualizar $_SESSION['XPup'] para el siguiente nivel
    // Por ejemplo:
    ObtXPlevel();
}
}

function verificarAprobacion($correctas, $totalPreguntas, $dificultad) {
    // Calcular el porcentaje de respuestas correctas
    $porcentajeCorrectas = ($correctas / $totalPreguntas) * 100;

    // Definir el porcentaje mínimo para aprobar según la dificultad
    switch ($dificultad) {
        case 1: // Dificultad baja
            $porcentajeMinimo = 60; // 60% para aprobar
            break;
        case 2: // Dificultad media
            $porcentajeMinimo = 70; // 70% para aprobar
            break;
        case 3: // Dificultad alta
            $porcentajeMinimo = 80; // 80% para aprobar
            break;
        default:
            die("Error: Dificultad no válida");
    }

    // Determinar si el estudiante aprobó o desaprobó
    if ($porcentajeCorrectas >= $porcentajeMinimo) {
        $aprobado = $_SESSION['Aprobado'] + 1;
        $query = "UPDATE cliente SET Aprobado = '$aprobado'  WHERE User = '$_SESSION[nom]'";
        $_SESSION['Stat'] = 1;
    } else {
        $Desaprobado = $_SESSION['Desaprovado'] + 1;
        $query = "UPDATE cliente SET Desaprovado = '$Desaprobado'  WHERE User = '$_SESSION[nom]'";
        $_SESSION['Stat'] = 2;
    }
    $conn = Conectar();
    if(!mysqli_query($conn, $query)){
        die("Error en la actualización: " . mysqli_error($conn));
    }

}

// Ejemplo de uso
$correctas = $_SESSION['correctas']; // Número de respuestas correctas
$totalPreguntas = 10; // Total de preguntas
$dificultad = $_SESSION['Dif']; // Dificultad del examen

$resultado = verificarAprobacion($correctas, $totalPreguntas, $dificultad);
 // Muestra el resultado

?>