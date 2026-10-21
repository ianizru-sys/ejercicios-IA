<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1: Contar Vocales</title>
</head>

<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 1</h1>

        <div class="resultado">
            <?php
            function contarVocales($texto)
            {
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
            ?>
        </div>
    </div>

</body>

</html>