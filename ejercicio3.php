<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3: Invertir Texto</title>

</head>
<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 3</h1>

        <div class="resultado">
            <?php
            function invertir($texto) {
                $resultado = "";

                for ($i = strlen($texto) - 1; $i >= 0; $i--) {
                    $resultado = $resultado . $texto[$i];
                }

                return $resultado;
            }

            echo invertir("Hola");
            ?>
        </div>
    </div>

</body>
</html>