<?php
function sumarPares($numeros) {
    $suma = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] % 2 == 0) {
            $suma = $suma + $numeros[$i];
        }
    }

    return $suma;
}

echo sumarPares([1, 2, 3, 4, 5, 6]);