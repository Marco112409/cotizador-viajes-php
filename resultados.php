<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $correo = htmlspecialchars($_POST['correo'] ?? '');

    $destinos = isset($_POST['destinos']) ? $_POST['destinos'] : [];
    $actividades = isset($_POST['actividades']) ? $_POST['actividades'] : [];
    $servicios = isset($_POST['servicios']) ? $_POST['servicios'] : [];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del Paquete Turístico</title>
</head>
<body>
    <h1>Resumen de tu Paquete Turístico</h1>
    <h2>Datos del cliente</h2>
    <p><strong>Nombre completo:</strong> <?php echo $nombre; ?></p>
    <p><strong>Correo electrónico:</strong> <?php echo $correo; ?></p>

    <h2>Destinos seleccionados</h2>
    <ul>
        <?php foreach ($destinos as $destino): ?>
            <li><?php echo htmlspecialchars($destino); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Actividades seleccionadas</h2>
    <ul>
        <?php foreach ($actividades as $actividad): ?>
            <li><?php echo htmlspecialchars($actividad); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Servicios adicionales seleccionados</h2>
    <ul>
        <?php foreach ($servicios as $servicio): ?>
            <li><?php echo htmlspecialchars($servicio); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
