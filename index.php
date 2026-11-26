<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes - Personalizar Paquete</title>
</head>
<body>
    <h1>Personalizar Paquete Turístico</h1>
    <form action="resultados.php" method="POST">
        <fieldset>
            <legend>Datos del cliente</legend>
            <label>Nombre completo: <input type="text" name="nombre" required></label><br>
            <label>Correo electrónico: <input type="email" name="correo" required></label>
        </fieldset>
        <button type="submit">Generar paquete</button>
    </form>
</body>
</html>
