<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Rutina</title>
</head>
<body>
    <h1>Crear Nueva Rutina</h1>
    <form action="{{ url('/rutina') }}" method="post">
    @csrf
    <div>
        <label for="nombre">Nombre de la Rutina:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>
    </div>
    <div>
        <label for="duracion">Duración (min):</label>
        <input type="text" id="duracion" name="duracion" required>
    </div>
    <div>
        <label for="nivel">Nivel:</label>
        <select id="nivel" name="nivel" required>
            <option value="basico">Básico</option>
            <option value="medio">Medio</option>
            <option value="avanzado">Avanzado</option>
        </select>
    </div>
    <div>
        <label for="objetivo">Objetivo:</label>
        <input type="text" id="objetivo" name="objetivo" required>
    </div>
    <button type="submit">Enviar</button>
</form>
</body>
</html>