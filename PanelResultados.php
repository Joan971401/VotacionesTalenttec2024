<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Resultados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .item {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 50px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registro de Resultados</h2>
    <form action="procesar_resultados.php" method="POST">
        <!-- Partido 1 -->
        <div class="item">
            <label for="resultado1">Partido 1:</label>
            <input type="number" id="resultado1" name="resultado1" min="0">
        </div>

        <!-- Partido 2 -->
        <div class="item">
            <label for="resultado2">Partido 2:</label>
            <input type="number" id="resultado2" name="resultado2" min="0">
        </div>

        <!-- Partido 3 -->
        <div class="item">
            <label for="resultado3">Partido 3:</label>
            <input type="number" id="resultado3" name="resultado3" min="0">
        </div>

        <!-- Partido 4 -->
        <div class="item">
            <label for="resultado4">Partido 4:</label>
            <input type="number" id="resultado4" name="resultado4" min="0">
        </div>

        <!-- Partido 5 -->
        <div class="item">
            <label for="resultado5">Partido 5:</label>
            <input type="number" id="resultado5" name="resultado5" min="0">
        </div>

        <button type="submit">Guardar Resultados</button>
        <a href="PanelVotaciones.php"><button type="button">Volver a Panel de Votaciones</button></a>
    </form>
</div>

</body>
</html>
