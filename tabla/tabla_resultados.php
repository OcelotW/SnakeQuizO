<?php
session_start();




// AUN NO INCORPORAMOS LA TABLA PERO ES VISIBLE EN EL NAVEGADOR





// Verifica si el usuario está logueado
if (!$_SESSION['usuario']) {
    header("Location:index.php");
    exit();
}

// Conectar a la base de datos
include("admin/funciones.php");
$conexion = obtenerConexion();

// Obtener todos los resultados de la base de datos
$query = "SELECT * FROM resultados";
$resultados = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Resultados</title>
    
    <!-- Bootstrap y DataTables -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

</head>
<body>
    <div class="container mt-5">
        <h2>Resultados del Juego</h2>
        <table id="resultadosTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Categoría</th>
                    <th>Correctas</th>
                    <th>Incorrectas</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_assoc($resultados)) { ?>
                <tr>
                    <td><?php echo $fila['usuario']; ?></td>
                    <td><?php echo $fila['categoria']; ?></td>
                    <td><?php echo $fila['correctas']; ?></td>
                    <td><?php echo $fila['incorrectas']; ?></td>
                    <td><?php echo $fila['puntaje']; ?>%</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#resultadosTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
</body>
</html>
