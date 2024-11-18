<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cantidad = intval($_POST["cantidad"]);

    if ($cantidad > 0) {
        // Generar la Serie Fibonacci
        function generarFibonacci($cantidad) {
            $fibonacci = [0, 1];
            for ($i = 2; $i < $cantidad; $i++) {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            return array_slice($fibonacci, 0, $cantidad);
        }

        $serie = generarFibonacci($cantidad);

        // Devolver la serie como JSON
        echo json_encode(["serie" => $serie]);
    } else {
        echo json_encode(["error" => "Por favor, ingresa un número mayor a 0."]);
    }
} else {
    echo json_encode(["error" => "Método no permitido."]);
}
?>
