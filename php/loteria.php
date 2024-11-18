<?php
header('Content-Type: application/json');

function generarNumeros($rango, $cantidad) {
    $numeros = [];
    while (count($numeros) < $cantidad) {
        $numero = rand(1, $rango);
        if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
        }
    }
    sort($numeros);
    return $numeros;
}

$balotas = generarNumeros(43, 5);
$superBalota = generarNumeros(16, 1)[0];

echo json_encode([
    "balotas" => $balotas,
    "superBalota" => $superBalota
]);
?>
