<?php
session_start();
include("admin/funciones.php");

if($_SESSION['Ver'] != 1){
    header("location: menuprin.php");
    $_SESSION['Nope'] = 1;
}else{
    $_SESSION['Nope'] = 0;
}
ObtLevel();
ObtenerXPus();
ObtXPlevel();
ObtenerAvatar();
ObtenerAprobados();
ObtenerDesaprovados();
$player = [
    'name' => $_SESSION['nom'],
    'level' => $_SESSION['Lvl'],
    'XP' => $_SESSION['XpUs'],
    'avatar' => 'img/' . $_SESSION['Avatar'], // Default avatar
    'Aproved' => $_SESSION['Aprobado'],
    'nope' => $_SESSION['Desaprovado']
];


$xpToNextLevel = $_SESSION['XPup'];
$currentXP = $_SESSION['XpUs'];
$percentage = ($currentXP / $xpToNextLevel) * 100;
$percentage = min($percentage, 100);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Jugador - Quiz</title>
    <link rel="stylesheet" href="perfil.css">
    <script>
        let selectedAvatar = '';

        function selectAvatar(avatarName) {
            // Deselect all avatars
            const avatars = document.querySelectorAll('.avatar-icon');
            avatars.forEach(avatar => avatar.classList.remove('selected'));

            // Select the clicked avatar
            const selected = document.querySelector(`.avatar-icon[data-avatar-name='${avatarName}']`);
            selected.classList.add('selected');

            // Store the selected avatar name
            selectedAvatar = avatarName;
        }

        function submitAvatar() {
    if (selectedAvatar) {
        fetch('submit_avatar.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ avatarName: selectedAvatar, userName: '<?php echo $_SESSION['nom']; ?>' }) // Envía el nombre del usuario
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Avatar actualizado correctamente!');
                location.reload(); // Recargar para ver los cambios
            } else {
                alert('Error al actualizar el avatar: ' + data.message);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    } else {
        alert('Por favor, selecciona un avatar antes de enviar.');
    }
}
    </script>
</head>
<body>
    <div class="profile-container">
        <!-- Resumen del jugador -->
        <div class="profile-summary">
            <img src="<?php echo $player['avatar']; ?>" alt="Avatar del jugador" class="avatar">
            <div class="player-info">
                <h2><?php echo $player['name']; ?></h2>
                <p>Nivel: <?php echo $player['level']; ?></p>
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?php echo $percentage; ?>%;">
                        <span class="progress-text"><?php echo round($percentage); ?>%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Avatar Selection -->
        <div class="avatar-selection">
            <h3>Selecciona tu Avatar</h3>
            <div class="avatar-icons">
                <div class="avatar-icon" data-avatar-name="avatar1.jpg" onclick="selectAvatar('avatar1.jpg')">
                    <img src="img/avatar1.jpg" alt="Avatar 1">
                </div>
                <div class="avatar-icon" data-avatar-name="avatar2.jpg" onclick="selectAvatar('avatar2.jpg')">
                    <img src="img/avatar2.jpg" alt="Avatar 2">
                </div>
                <div class="avatar-icon" data-avatar-name="avatar3.jpg" onclick="selectAvatar('avatar3.jpg')">
                    <img src="img/avatar3.jpg" alt="Avatar 3">
                </div>
            </div>
            <button type="button" onclick="submitAvatar()">Guardar Cambios</button>
        </div>

        <!-- Estadísticas -->
        <div class="profile-stats">
            <h3>Estadísticas</h3>
            <div class="stat">
                <h4>Aprobados</h4>
                <span><?php echo $player['Aproved']; ?></span>
            </div>
            <div class="stat">
                <h4>Desaprobados</h4>
                <span><?php echo $player['nope']; ?></span>
            </div>
        </div>

        <a href="menuprin.php">Volver al inicio</a>
    </div>

    <style>
        .avatar-icons {
            display: flex;
            gap: 10;
        }