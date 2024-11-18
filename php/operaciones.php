<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = floatval($_POST["numero1"]);
    $numero2 = floatval($_POST["numero2"]);
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            $resultado = $numero2 != 0 ? $numero1 / $numero2 : "Error: División por cero";
            break;
        default:
            $resultado = "Operación inválida.";
    }

    echo json_encode(["resultado" => $resultado]);
}
?>
