<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cotizador de Viajes</title>
</head>
<body>
    <h1>Arma tu Viaje Ideal</h1>
    <form action="procesar_paquete.php" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label>Nombre completo: <input type="text" name="cliente_nombre" required></label><br><br>
            <label>Correo electrónico: <input type="email" name="cliente_correo" required></label>
        </fieldset>
        <br>
        <button type="submit">Cotizar paquete</button>
    </form>
</body>
</html>
