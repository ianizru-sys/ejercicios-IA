<?php
function contarVocales($texto) {
    $vocales = ["a", "e", "i", "o", "u"];
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = strtolower($texto[$i]);
        if (in_array($letra, $vocales)) {
            $contador++;
        }
    }

    return $contador;
}

echo contarVocales("Prueba ejercicio");