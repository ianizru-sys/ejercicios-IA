<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2: Mayor de un Array</title>

</head>

<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 2</h1>

        <div class="resultado">
            <?php
            function mayorDeArray($numeros)
            {
                $mayor = $numeros[0];

                for ($i = 1; $i < count($numeros); $i++) {
                    if ($numeros[$i] > $mayor) {
                        $mayor = $numeros[$i];
                    }
                }

                return $mayor;
            }

            echo mayorDeArray([3, 17, 8, 25, 4]);
            ?>
        </div>
    </div>

</body>

</html>