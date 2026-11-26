<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes - Personalizar Paquete</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        fieldset { margin-bottom: 15px; padding: 15px; border-radius: 5px; }
        legend { font-weight: bold; }
        label { display: block; margin-bottom: 5px; }
        select { width: 250px; height: 145px; }
        button { padding: 10px 20px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Personalizar Paquete Turístico</h1>

    <form action="resultados.php" method="POST">

        <fieldset>
            <legend>Datos del cliente</legend>
            <label>Nombre completo:
                <input type="text" name="nombre" required>
            </label>
            <label>Correo electrónico:
                <input type="email" name="correo" required>
            </label>
        </fieldset>

        <fieldset>
            <legend>A. Destinos turísticos</legend>
            <select name="destinos[]" multiple>
                <option value="Cancún">Cancún</option>
                <option value="Puerto Vallarta">Puerto Vallarta</option>
                <option value="Acapulco">Acapulco</option>
                <option value="Los Cabos">Los Cabos</option>
                <option value="Mazatlán">Mazatlán</option>
                <option value="Huatulco">Huatulco</option>
                <option value="Puerto Escondido">Puerto Escondido</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>B. Actividades turísticas</legend>
            <label><input type="checkbox" name="actividades[]" value="Buceo"> Buceo</label>
            <label><input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha</label>
            <label><input type="checkbox" name="actividades[]" value="Visita a zonas arqueológicas"> Visita a zonas arqueológicas</label>
            <label><input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo</label>
            <label><input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva</label>
            <label><input type="checkbox" name="actividades[]" value="Recorrido gastronómico"> Recorrido gastronómico</label>
            <label><input type="checkbox" name="actividades[]" value="Visita a museos"> Visita a museos</label>
        </fieldset>

        <fieldset>
            <legend>C. Servicios adicionales</legend>
            <label><input type="checkbox" name="servicios[]" value="Transporte al aeropuerto"> Transporte al aeropuerto</label>
            <label><input type="checkbox" name="servicios[]" value="Desayuno incluido"> Desayuno incluido</label>
            <label><input type="checkbox" name="servicios[]" value="Hospedaje de lujo"> Hospedaje de lujo</label>
            <label><input type="checkbox" name="servicios[]" value="Seguro de viajero"> Seguro de viajero</label>
            <label><input type="checkbox" name="servicios[]" value="Renta de automóvil"> Renta de automóvil</label>
            <label><input type="checkbox" name="servicios[]" value="Guía turístico"> Guía turístico</label>
        </fieldset>

        <button type="submit">Generar paquete</button>

    </form>

</body>
</html>
