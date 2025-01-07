<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Función para obtener el registro de la configuración del sitio
function obtenerConfiguracion()
{
    include("conexion.php");
    //Comprobamos si existe el registro 1 que mantiene la configuraciòn
    //Añadimos un alias AS total para identificar mas facil
    $query = "SELECT COUNT(*) AS total FROM config";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    if ($row['total'] == '0') {
        //No existe el registro 1 - DEBO INSERTAR el registro por primera vez
        $query = "INSERT INTO config (id,usuario,password,totalPreguntas)
        VALUES (NULL, 'admin', 'admin','3')";

        if (mysqli_query($conn, $query)) { //Se insertó correctamente

        } else {
            echo "No se pudo insertar en la BD" .mysqli_errno($conn);
        }
    }

    //Selecciono el registro dela configuración
    $query = "SELECT * FROM config  WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $config = mysqli_fetch_assoc($result);
    return $config;
}

//funcion para agrear un nuevo tema a la BD
function agregarNuevoTema($tema, $dificultad, $nreq) {
    include("conexion.php");
    
    // Prepare the query to insert into the temas table
    $query = "INSERT INTO temas (id, nombre, Dificultad, Nreq)
              VALUES (NULL, '$tema', '$dificultad', '$nreq')";

    // Insert into the temas table
    if (mysqli_query($conn, $query)) { // Successfully inserted
        $mensaje = "El tema fue agregado correctamente";
        header("Location: index.php");
    } else {
        $mensaje = "No se pudo insertar en la BD: " . mysqli_error($conn);
    }
    return $mensaje;
}


function obetenerTodosLosTemas()
{
    include("conexion.php");
    $query = "SELECT * FROM temas";
    $result = mysqli_query($conn, $query);
    return $result;
}
function obtenerNombreTema($id){
    include("conexion.php");
    $query = "SELECT * FROM temas WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $tema = mysqli_fetch_array($result);
    
    return $tema['nombre'];
}

function obetenerTodasLasPreguntas()
{
    include("conexion.php");
    $query = "SELECT * FROM preguntas";
    $result = mysqli_query($conn, $query);
    return $result;
}

function obtenerPreguntaPorId($id){
    include("conexion.php");
    $query = "SELECT * FROM preguntas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $pregunta = mysqli_fetch_array($result);
    return $pregunta;
}

function obtenerTotalPreguntas(){
    include("conexion.php");
    //Añadimos un alias AS total para identificar mas facil
    $query = "SELECT COUNT(*) AS total FROM preguntas";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);  
    return $row['total'];
}

function totalPreguntasPorCategoria($tema){
    include("conexion.php");
    $query = "SELECT COUNT(*) AS total FROM preguntas WHERE tema = '$tema'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);  
    return $row['total'];
}

function obtenerCategorias(){
    include("conexion.php");
    //ACOntamos la cantidad de cada categoria
    $query = "SELECT tema, COUNT(DISTINCT tema) FROM preguntas GROUP BY tema";
    $result = mysqli_query($conn, $query);
    return $result;
}
function obtenerIdsPreguntasPorCategoria($tema){
    include("conexion.php");
    $query = "SELECT id FROM preguntas WHERE tema = $tema";
    $result = mysqli_query($conn, $query);
    return $result;
}

function aumentarRespondidas(){
    include("conexion.php");
    //Selecciono el registro de la estadistica
    $query = "SELECT * FROM estadisticas  WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $estadistica = mysqli_fetch_assoc($result);
    $respondidas = $estadistica['respondidas'];
    $respondidas = $respondidas + 1;

    $query = "UPDATE estadisticas SET respondidas = '$respondidas' WHERE id='1'";
    $result = mysqli_query($conn, $query);
}
function aumentarCompletados(){
    include("conexion.php");
    //Selecciono el registro de la estadistica
    $query = "SELECT * FROM estadisticas  WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $estadistica = mysqli_fetch_assoc($result);
    $completados = $estadistica['completados'];
    $completados = $completados + 1;

    $query = "UPDATE estadisticas SET completados = '$completados' WHERE id='1'";
    $result = mysqli_query($conn, $query);
}
function ObtenerDificultad(){
    include("conexion.php");
    $Id = $_SESSION['idCategoria'];
    $query = "SELECT Dificultad FROM temas WHERE id = $Id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Dif'] = $row['Dificultad']; // Guardamos el valor, no el resultado de la consulta
}

function ObtenerXPus() {
    include("conexion.php");
    $nom = $_SESSION['nom'];
    $query = "SELECT exp FROM cliente WHERE User = '$nom'"; // Añadidas comillas para el string
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['XpUs'] = $row['exp'];
}

function ObtLevel() {
    include("conexion.php");
    $query = "SELECT Nivel FROM cliente WHERE User = '$_SESSION[nom]'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Lvl'] = $row['Nivel'];
}

function ObtXPlevel() {
    include("conexion.php");
    $lvlup = ($_SESSION['Lvl'] + 1);   
    $query = "SELECT Lvlup FROM levels WHERE level = $lvlup";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['XPup'] = $row['Lvlup'];
}

function ObtenerAvatar() {
    include("conexion.php");
    $nom = $_SESSION['nom'];
    $query = "SELECT Avatar FROM cliente WHERE User = '$nom'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Avatar'] = $row['Avatar'];
}

function ObtenerAprobados() {
    include("conexion.php");
    $nom = $_SESSION['nom'];
    $query = "SELECT Aprobado FROM cliente WHERE User = '$nom'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Aprobado'] = $row['Aprobado'];
}
function ObtenerDesaprovados() {
    include("conexion.php");
    $nom = $_SESSION['nom'];
    $query = "SELECT Desaprovado FROM cliente WHERE User = '$nom'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Desaprovado'] = $row['Desaprovado'];
}
function ObtenernivelReq() {
    include("conexion.php");

    // Verificar si la variable de sesión 'idCategoria' está definida
    if (!isset($_SESSION['idCategoria'])) {
        die("Error: idCategoria no está definida en la sesión.");
    }

    $Id = $_SESSION['idCategoria'];
    $query = "SELECT Nreq FROM temas WHERE id = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conn, $query);
    
    // Vincular el parámetro
    mysqli_stmt_bind_param($stmt, 'i', $Id);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtener el resultado
    $result = mysqli_stmt_get_result($stmt);
    
    // Verificar si se obtuvo un resultado
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['Nreq'] = $row['Nreq']; // Guardamos el valor en la sesión
    } else {
        $_SESSION['Nreq'] = null; // O asignar un valor por defecto si no se encuentra
    }
}

