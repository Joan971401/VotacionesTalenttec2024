<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        /* Estilos para el modal */
        .modal {
            display: none; /* Ocultar el modal por defecto */
            position: fixed; /* Posición fija */
            z-index: 1; /* Sobre todo */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Habilitar el scroll si es necesario */
            background-color: rgba(0,0,0,0.4); /* Fondo semitransparente */
            padding-top: 60px; /* Espacio para el contenido del modal */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* Centrar vertical y horizontalmente */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        /* Estilos para el botón de cerrar */
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
        /* Estilos para el botón "Votar" */
        .vote-btn {
            padding: 15px 30px; /* Aumentar el padding para hacer el botón más grande */
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Hacer que el botón sea un bloque para centrarlo */
            margin: 0 auto; /* Centrar horizontalmente */
        }
        .vote-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<!-- Botón "Votar" -->
<button class="vote-btn" onclick="openModal()">Votar</button>

<!-- Modal -->
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


<div style="text-align: center; font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.6; border: 1px solid #ccc; padding: 20px; border-radius: 10px;">
    <p>
        El programa de votación de estudiantes es una plataforma diseñada para facilitar elecciones estudiantiles. Permite a los alumnos votar de manera electrónica por candidatos a roles estudiantiles como presidente o representante. Ofrece una interfaz intuitiva y segura, asegurando la transparencia y eficiencia del proceso electoral.
    </p>
    <img src="logomenu.jpg" alt="Logo" style="width: 400px; margin-top: 20px;">
</div>




<!-- Botón para cerrar sesión -->
<div style="display: flex; justify-content: center;">
    <button onclick="window.location.href = 'index.php';">Cerrar Sesión</button>
</div>

<!-- Modal de Confirmación -->
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeConfirmationModal()">&times;</span>
        <h2>¿Seguro que quieres cerrar sesión?</h2>
        <button onclick="confirmLogout()">Sí, cerrar sesión</button>
        <button onclick="closeConfirmationModal()">Cancelar</button>
    </div>
</div>


<script>
    // Función para abrir el modal
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    // Función para cerrar el modal
    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    // Función para validar las credenciales
    function validateCredentials() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        
        if (username === 'admin' && password === 'admin') {
            alert('Credenciales correctas');
            closeModal(); // Cerrar el modal
            window.location.href = 'PanelVotaciones.php'; // Redirigir a PanelVotaciones.php
            return false; // Evitar el envío del formulario
        } else {
            alert('Credenciales incorrectas');
            return false; // Evitar el envío del formulario
        }
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
