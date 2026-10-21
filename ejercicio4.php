<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4: Sumar Pares</title>

</head>
<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 4</h1>

        <div class="resultado">
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
            ?>
        </div>
    </div>

</body>
</html>