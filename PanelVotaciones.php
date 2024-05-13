<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Votaciones</title>
    
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1000px; /* Ajuste del ancho máximo del contenedor */
        margin: 20px auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between; /* Alinear los elementos para que estén distribuidos uniformemente */
    }

    .item {
        width: calc(20% - 12px); /* Ajuste del ancho de los elementos .item */
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden; /* Para evitar que el contenido sobresalga */
        display: flex;
        flex-direction: column; /* Alinear los elementos en columna */
    }

    .item label {
        padding: 15px; /* Ajuste del relleno del label */
        text-align: left;
        flex: 1; /* Ocupar el espacio restante */
    }

    .item label b {
        font-weight: bold; /* Estilo negrita para las etiquetas dentro de .item */
    }

    .vote-btn {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px 20px;
        margin-top: auto; /* Mover el botón al final del cuadro */
        align-self: center; /* Centrar horizontalmente el botón */
    }

    .vote-btn:hover {
        background-color: #45a049;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Ocultar votos en la parte principal */
    .container p {
        display: none;
    }
</style>
</head>

<body>

<img src="logo.png" alt="Logo" style="width: 400px; margin: 20px auto; display: block;">

<div class="container">
    <!-- Partido 1: TESLA -->
    <div class="item">
    <img src="tesla.jpeg" alt="Logo Tesla" style="width: 100%; max-height: 200px; object-fit: cover;">
    <label for="partido1"><b>Partido:</b> TESLA <br>
        <br></br>
        <b>Presidente:</b> Silvana <br>
        <b>Vicepresidente:</b> Ethan Meza <br>
        <b>Secretario:</b> Tomás </label>
    <button class="vote-btn" onclick="votar('partido1')">Votar</button>
    <p id="votos_partido1">0</p>
</div>


<div class="item">
    <img src="despegar.jpeg" alt="Logo Despegar" style="width: 100%; max-height: 200px; object-fit: cover;">
    <label for="partido2"><b>Partido:</b> DESPEGAR <br>
        <br></br>
        <b>Presidente:</b> Franco Esquivel <br>
        <b>Vicepresidente:</b> Paz <br>
        <b>Secretario:</b> Evan </label>
    <button class="vote-btn" onclick="votar('partido2')">Votar</button>
    <p id="votos_partido2">0</p>
</div>


<div class="item">
    <img src="amigos.jpeg" alt="Logo Amigos" style="width: 100%; max-height: 200px; object-fit: cover;">
    <label for="partido3"><b>Partido:</b> AMIGOS <br>
        <br></br>
        <b>Presidente:</b> Eithan Villalobos <br>
        <b>Vicepresidente:</b> Aarón <br>
        <b>Secretario:</b> Franco </label>
    <button class="vote-btn" onclick="votar('partido3')">Votar</button>
    <p id="votos_partido3">0</p>
</div>

<div class="item">
    <img src="cuidadores.jpeg" alt="Logo Cuidadores" style="width: 100%; max-height: 200px; object-fit: cover;">
    <label for="partido4"><b>Partido:</b>CUIDADORES <br>
        <br></br>
        <b>Presidente:</b> Mateo Rojas <br>
        <b>Vicepresidente:</b> Jareth <br>
        <b>Secretario:</b> Yoczán </label>
    <button class="vote-btn" onclick="votar('partido4')">Votar</button>
    <p id="votos_partido4">0</p>
</div>


<div class="item">
    <img src="alegria.jpeg" alt="Logo Alegría" style="width: 100%; max-height: 200px; object-fit: cover;">
    <label for="partido5"><b>Partido:</b> ALEGRÍA <br>
        <br></br>
        <b>Presidente:</b> Amanda <br>
        <b>Vicepresidente:</b> Julián <br>
        <b>Secretario:</b> Ignacio </label>
    <button class="vote-btn" onclick="votar('partido5')">Votar</button>
    <p id="votos_partido5">0</p>
</div>

</div>



    <!-- Botón para ir a PanelResultados.php -->
    <button onclick="openModal()">Ir a Panel de Resultados</button>

    <!-- Modal de Credenciales -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Ingrese sus credenciales</h2>
            <form id="loginForm" onsubmit="return validateCredentials()">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Iniciar sesión">
            </form>
        </div>
    </div>

    <!-- Modal de Votación -->
    <div id="votacionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Registro de Votos</h2>
            <p>Votos registrados:</p>
            <ul>
                <li>TESLA:<span id="votos_partido1_modal">    0</span></li>
                <li>DESPEGAR: <span id="votos_partido2_modal">0</span></li>
                <li>AMIGOS: <span id="votos_partido3_modal">0</span></li>
                <li>CUIDADORES: <span id="votos_partido4_modal">0</span></li>
                <li>ALEGRIA: <span id="votos_partido5_modal">0</span></li>
            </ul>
            <button onclick="reiniciarVotos()">Reiniciar</button>
        </div>
    </div>

    <!-- Modal de Votación Exitosa -->
    <div id="votacionExitosaModal" class="modal">
        <div class="modal-content">
            <!-- Elimina el botón 'close' y el evento onclick -->
            <h2>Votación Exitosa</h2>
            <p>Tu voto ha sido registrado.</p>
            <p>Ingresa el código para volver a votar:</p>
            <input type="text" id="codigo_volver_votar">
            <button onclick="volverAVotar()">Volver a votar</button>
        </div>
    </div>

    <!-- Botón para regresar al menú -->
    <button class="vote-btn" onclick="openConfirmationModal()">Regresa a Inicio</button>

    <!-- Modal de Confirmación -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeConfirmationModal()">&times;</span>
            <h2>¿Seguro que quieres volver a inicio?</h2>
            <button onclick="confirmLogout()">Sí</button>
            <button onclick="closeConfirmationModal()">No</button>
        </div>
    </div>

    <script>
        var votos = {
            partido1: 0,
            partido2: 0,
            partido3: 0,
            partido4: 0,
            partido5: 0
        };

        function openModal() {
            document.getElementById('myModal').style.display = "block";
            document.getElementById('codigo_volver_votar').value = ""; // Establecer el valor como vacío
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
            document.getElementById('votacionModal').style.display = "none";
            document.getElementById('votacionExitosaModal').style.display = "none";
            document.getElementById('codigo_volver_votar').value = ""; // Establecer el valor como vacío
        }

        function validateCredentials() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === 'admin' && password === 'admin') {
                alert('Credenciales correctas');
                closeModal();
                document.getElementById('votacionModal').style.display = "block";
                return false;
            } else {
                alert('Credenciales incorrectas');
                return false;
            }
        }

        function votar(partido) {
            votos[partido]++;
            updateVotos(partido);
            updateVotosModal(partido);
            document.getElementById('votacionExitosaModal').style.display = "block";
        }

        function updateVotos(partido) {
            document.getElementById('votos_partido1').innerHTML = votos.partido1;
            document.getElementById('votos_partido2').innerHTML = votos.partido2;
            document.getElementById('votos_partido3').innerHTML = votos.partido3;
            document.getElementById('votos_partido4').innerHTML = votos.partido4;
            document.getElementById('votos_partido5').innerHTML = votos.partido5;
        }

        function updateVotosModal(partido) {
            document.getElementById('votos_partido1_modal').innerHTML = votos.partido1;
            document.getElementById('votos_partido2_modal').innerHTML = votos.partido2;
            document.getElementById('votos_partido3_modal').innerHTML = votos.partido3;
            document.getElementById('votos_partido4_modal').innerHTML = votos.partido4;
            document.getElementById('votos_partido5_modal').innerHTML = votos.partido5;
        }

        function volverAVotar() {
            var codigo = document.getElementById('codigo_volver_votar').value;
            if (codigo === '4321') {
                closeModal();
            } else {
                alert('Código incorrecto');
            }
        }

        function reiniciarVotos() {
            votos.partido1 = 0;
            votos.partido2 = 0;
            votos.partido3 = 0;
            votos.partido4 = 0;
            votos.partido5 = 0;
            updateVotosModal();
        }

        function updateVotosModal() {
            document.getElementById('votos_partido1_modal').innerHTML = votos.partido1;
            document.getElementById('votos_partido2_modal').innerHTML = votos.partido2;
            document.getElementById('votos_partido3_modal').innerHTML = votos.partido3;
            document.getElementById('votos_partido4_modal').innerHTML = votos.partido4;
            document.getElementById('votos_partido5_modal').innerHTML = votos.partido5;
        }

        // Función para abrir el modal de confirmación
        function openConfirmationModal() {
            document.getElementById('confirmationModal').style.display = "block";
        }

        // Función para cerrar el modal de confirmación
        function closeConfirmationModal() {
            document.getElementById('confirmationModal').style.display = "none";
        }

        // Función para confirmar el cierre de sesión
        function confirmLogout() {
            window.location.href = 'Menu.php'; // Redirigir a Menu.php
        }

    </script>

</body>

</html>
