<?
    session_start();
    ObtenerDificultad();
    ObtenerXPus();
    ObtXPlevel();
    include("conexionlog.php");

    $cnn = Conectar();
    switch($_SESSION['Dif']){
        case 1:
            $xp = $_SESSION['XpUs'] + (100-(5*$_SESSION['incorrectas']));
            if($xp = $_SESSION['XPup']){
              $lvlN = ($_SESSION['Lvl'] + 1);
            $query = "UPDATE cliente SET Nivel = $lvlN, exp = 0  WHERE USER = $_SESSION[nom]";
            mysqli_query($conn, $query);
            }elseif($xp> $_SESSION['XpUs']){
                $lvlN = ($_SESSION['Lvl'] + 1);
                $xpR = ($xp - $_SESSION['XPup']);
                $query1 = "UPDATE cliente SET Nivel = $lvlN WHERE USER = $_SESSION[nom]";
                $query2 = "UPDATE cliente SET exp = $xpR  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query1);
                mysqli_query($conn, $query2);
            }else{
                $query = "UPDATE cliente SET exp = $xp  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query);
            }
        case 2:
            $xp = $_SESSION['XpUs'] + (200-(10*$_SESSION['incorrectas']));  
            if($xp = $_SESSION['XPup']){
                $lvlN = ($_SESSION['Lvl'] + 1);
            $query = "UPDATE cliente SET Nivel = $lvlN, exp = 0 WHERE USER = $_SESSION[nom]";
            mysqli_query($conn, $query);
            }elseif($xp> $_SESSION['XpUs']){
                $lvlN = ($_SESSION['Lvl'] + 1);
                $xpR = ($xp - $_SESSION['XPup']);
                $query1 = "UPDATE cliente SET Nivel = $lvlN WHERE USER = $_SESSION[nom]";
                $query2 = "UPDATE cliente SET exp = $xpR  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query1);
                mysqli_query($conn, $query2);
            }else{
                $query = "UPDATE cliente SET exp = $xp  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query);
            }
        case 3:
            $xp = $_SESSION['XpUs'] + (300-(15*$_SESSION['incorrectas']));
            if($xp = $_SESSION['XPup']){
                $lvlN = ($_SESSION['Lvl'] + 1);
            $query = "UPDATE cliente SET Nivel = $lvlN, exp = 0  WHERE USER = $_SESSION[nom]";
            mysqli_query($conn, $query);
            }elseif($xp> $_SESSION['XpUs']){
                $lvlN = ($_SESSION['Lvl'] + 1);
                $xpR = ($xp - $_SESSION['XPup']);
                $query1 = "UPDATE cliente SET Nivel = $lvlN WHERE USER = $_SESSION[nom]";
                $query2 = "UPDATE cliente SET exp = $xpR  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query1);
                mysqli_query($conn, $query2);
            }else{
                $query = "UPDATE cliente SET exp = $xp  WHERE USER = $_SESSION[nom]";
                mysqli_query($conn, $query);
            }
    };