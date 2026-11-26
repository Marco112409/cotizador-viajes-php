<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreCliente = htmlspecialchars($_POST['cliente_nombre'] ?? '');
    $correoCliente = htmlspecialchars($_POST['cliente_correo'] ?? '');

    $destinosElegidos = isset($_POST['lista_destinos']) ? $_POST['lista_destinos'] : [];
    $actividadesElegidas = isset($_POST['lista_actividades']) ? $_POST['lista_actividades'] : [];
    $serviciosElegidos = isset($_POST['lista_servicios']) ? $_POST['lista_servicios'] : [];

    $conteoDestinos = count($destinosElegidos);
    $conteoActividades = count($actividadesElegidas);
    $conteoServicios = count($serviciosElegidos);
    $conteoTotal = $conteoDestinos + $conteoActividades + $conteoServicios;
} else {
    header("Location: formulario_paquete.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Cotización</title>
    <style>
        body { font-family: Tahoma, sans-serif; margin: 25px; background-color: #f9f9f9; }
        .tarjeta { background: #fff; padding: 15px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; }
        h2 { color: #2c3e50; margin-top: 0; }
    </style>
</head>
<body>

    <h1>Detalle de tu Paquete de Viaje</h1>

    <div class="tarjeta">
        <h2>Datos del Viajero</h2>
        <p><strong>Nombre:</strong> <?php echo $nombreCliente; ?></p>
        <p><strong>Correo:</strong> <?php echo $correoCliente; ?></p>
    </div>

    <div class="tarjeta">
        <h2>Destinos Seleccionados</h2>
        <?php if ($conteoDestinos > 0): ?>
            <ul>
                <?php foreach ($destinosElegidos as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Subtotal de destinos:</strong> <?php echo $conteoDestinos; ?></p>
    </div>

    <div class="tarjeta">
        <h2>Actividades Seleccionadas</h2>
        <?php if ($conteoActividades > 0): ?>
            <ul>
                <?php foreach ($actividadesElegidas as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Subtotal de actividades:</strong> <?php echo $conteoActividades; ?></p>
    </div>

    <div class="tarjeta">
        <h2>Servicios Adicionales</h2>
        <?php if ($conteoServicios > 0): ?>
            <ul>
                <?php foreach ($serviciosElegidos as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No seleccionaste ningún elemento</p>
        <?php endif; ?>
        <p><strong>Subtotal de servicios:</strong> <?php echo $conteoServicios; ?></p>
    </div>

    <div class="tarjeta">
        <h2>Resumen General</h2>
        <p><strong>Total de opciones elegidas:</strong> <?php echo $conteoTotal; ?></p>
    </div>

    <a href="formulario_paquete.php">← Modificar selección</a>

</body>
</html>
