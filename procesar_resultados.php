<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica que se recibieron todos los resultados
    if (isset($_POST["resultado1"]) && isset($_POST["resultado2"]) && isset($_POST["resultado3"]) && isset($_POST["resultado4"]) && isset($_POST["resultado5"])) {
        // Obtiene los resultados del formulario
        $resultado1 = $_POST["resultado1"];
        $resultado2 = $_POST["resultado2"];
        $resultado3 = $_POST["resultado3"];
        $resultado4 = $_POST["resultado4"];
        $resultado5 = $_POST["resultado5"];

        // Procesa los resultados como desees
        echo "Resultados procesados correctamente:<br>";
        echo "Partido 1: $resultado1 votos<br>";
        echo "Partido 2: $resultado2 votos<br>";
        echo "Partido 3: $resultado3 votos<br>";
        echo "Partido 4: $resultado4 votos<br>";
        echo "Partido 5: $resultado5 votos<br>";
    } else {
        echo "No se recibieron todos los resultados.";
    }
} else {
    echo "Error al procesar los resultados.";
}
?>
