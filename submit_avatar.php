<?php
session_start();
include("admin/conexion.php"); // Asegúrate de que la conexión esté configurada correctamente

// Obtener los datos JSON de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['avatarName']) && isset($data['userName'])) {
    $avatarName = mysqli_real_escape_string($conn, $data['avatarName']);
    $userName = mysqli_real_escape_string($conn, $data['userName']);

    // Actualizar el avatar en la base de datos
    $query = "UPDATE cliente SET Avatar = '$avatarName' WHERE User = '$userName'";
    
    if (mysqli_query($conn, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
}
?>