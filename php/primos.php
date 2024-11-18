<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = intval($_POST["numero"]);
    if ($numero <= 1) {
        echo json_encode(["mensaje" => "No es primo."]);
        exit;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            echo json_encode(["mensaje" => "No es primo."]);
            exit;
        }
    }
    echo json_encode(["mensaje" => "Es primo."]);
}
?>
