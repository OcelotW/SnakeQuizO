<?php

function Conectar(){

    $server     = "localhost";

    $username  = "root";

    $password  = "";

    $bd        = "quiz";


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    // Crear una conexión

    $conn = mysqli_connect($server, $username, $password, $bd);


    // Chequeamos la conexión

    if (!$conn) {

        die("Conexión fallida: " . mysqli_connect_error());

    }


    // Set character set to utf8mb4

    mysqli_set_charset($conn, 'utf8mb4');


    return $conn; // Return the connection object

}

?>