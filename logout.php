<?php



ob_start();




session_destroy();




header("Location: menuprin.php");




ob_end_flush();

session_start();

$_SESSION['Ver'] = 0;

?>