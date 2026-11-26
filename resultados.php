<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $correo = htmlspecialchars($_POST['correo'] ?? '');

    $destinos = isset($_POST['destinos']) ? $_POST['destinos'] : [];
    $actividades = isset($_POST['actividades']) ? $_POST['actividades'] : [];
    $servicios = isset($_POST['servicios']) ? $_POST['servicios'] : [];

    $totalDestinos = count($destinos);
    $totalActividades = count($actividades);
    $totalServicios = count($servicios);
    $totalGeneral = $totalDestinos + $totalActividades + $totalServicios;
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
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        .bloque { margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #ccc; }
    </style>
</head>
<body>

    <h1>Resumen de tu Paquete Turístico</h1>

    <div class="bloque">
        <h2>Datos del cliente</h2>
        <p><strong>Nombre completo:</strong> <?php echo $nombre; ?></p>
        <p><strong>Correo electrónico:</strong> <?php echo $correo; ?></p>
    </div>

    <div class="bloque">
        <h2>Destinos seleccionados</h2>
        <?php if ($totalDestinos > 0): ?>
            <ul>
                <?php foreach ($destinos as $destino): ?>
                    <li><?php echo htmlspecialchars($destino); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Total de destinos seleccionados:</strong> <?php echo $totalDestinos; ?></p>
    </div>

    <div class="bloque">
        <h2>Actividades seleccionadas</h2>
        <?php if ($totalActividades > 0): ?>
            <ul>
                <?php foreach ($actividades as $actividad): ?>
                    <li><?php echo htmlspecialchars($actividad); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Total de actividades seleccionadas:</strong> <?php echo $totalActividades; ?></p>
    </div>

    <div class="bloque">
        <h2>Servicios adicionales seleccionados</h2>
        <?php if ($totalServicios > 0): ?>
            <ul>
                <?php foreach ($servicios as $servicio): ?>
                    <li><?php echo htmlspecialchars($servicio); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Total de servicios seleccionados:</strong> <?php echo $totalServicios; ?></p>
    </div>

    <div class="bloque">
        <h2>Resumen total</h2>
        <p><strong>Total general de elementos seleccionados:</strong> <?php echo $totalGeneral; ?></p>
    </div>

    <p><a href="index.php">Volver al formulario</a></p>

</body>
</html>

