<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cotizador de Viajes</title>
    <style>
        body { font-family: Tahoma, sans-serif; margin: 25px; background-color: #f9f9f9; }
        fieldset { background: #fff; margin-bottom: 15px; padding: 15px; border: 1px solid #ccc; border-radius: 6px; }
        legend { font-weight: bold; color: #2c3e50; }
        label { display: block; margin: 6px 0; }
        select { width: 260px; height: 135px; }
        button { background: #2980b9; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Arma tu Viaje Ideal</h1>
    <form action="procesar_paquete.php" method="POST">
        
        <fieldset>
            <legend>Información Personal</legend>
            <label>Nombre completo: <input type="text" name="cliente_nombre" required></label>
            <label>Correo electrónico: <input type="email" name="cliente_correo" required></label>
        </fieldset>

        <fieldset>
            <legend>A. Destinos disponibles (Usa Ctrl o Cmd para selección múltiple)</legend>
            <select name="lista_destinos[]" multiple>
                <option value="Riviera Maya">Riviera Maya</option>
                <option value="Oaxaca Centro">Oaxaca Centro</option>
                <option value="San Miguel de Allende">San Miguel de Allende</option>
                <option value="Los Cabos">Los Cabos</option>
                <option value="Chiapas y Palenque">Chiapas y Palenque</option>
                <option value="Guadalajara y Tequila">Guadalajara y Tequila</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>B. Tours y Actividades</legend>
            <label><input type="checkbox" name="lista_actividades[]" value="Tour en cenotes"> Tour en cenotes</label>
            <label><input type="checkbox" name="lista_actividades[]" value="Cata de mezcal o tequila"> Cata de mezcal o tequila</label>
            <label><input type="checkbox" name="lista_actividades[]" value="Recorrido histórico guiado"> Recorrido histórico guiado</label>
            <label><input type="checkbox" name="lista_actividades[]" value="Snorkel en arrecife"> Snorkel en arrecife</label>
            <label><input type="checkbox" name="lista_actividades[]" value="Paseo en globo aerostático"> Paseo en globo aerostático</label>
        </fieldset>

        <fieldset>
            <legend>C. Extras y Comodidades</legend>
            <label><input type="checkbox" name="lista_servicios[]" value="Traslado privado aeropuerto-hotel"> Traslado privado aeropuerto-hotel</label>
            <label><input type="checkbox" name="lista_servicios[]" value="Todo incluido (Alimentos y bebidas)"> Todo incluido (Alimentos y bebidas)</label>
            <label><input type="checkbox" name="lista_servicios[]" value="Seguro médico internacional"> Seguro médico internacional</label>
            <label><input type="checkbox" name="lista_servicios[]" value="Renta de camioneta SUV"> Renta de camioneta SUV</label>
            <label><input type="checkbox" name="lista_servicios[]" value="Fotógrafo profesional"> Fotógrafo profesional</label>
        </fieldset>

        <button type="submit">Cotizar paquete</button>
    </form>
</body>
</html>
