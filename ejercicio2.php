<?php
function mayorDeArray($numeros) {
    $mayor = $numeros[0];

    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
        }
    }

    return $mayor;
}

echo mayorDeArray([3, 17, 8, 25, 4]);