<?php
function invertir($texto) {
    $resultado = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $resultado = $resultado . $texto[$i];
    }

    return $resultado;
}

echo invertir("Hola"); // aloH