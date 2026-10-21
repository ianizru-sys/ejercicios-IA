<?php
$paginas = [
    'index.php' => 'Inicio',
    'ejercicio1.php' => 'Ejercicio 1',
    'ejercicio2.php' => 'Ejercicio 2',
    'ejercicio3.php' => 'Ejercicio 3',
    'ejercicio4.php' => 'Ejercicio 4'
];

$archivo_actual = basename($_SERVER['PHP_SELF']);
?>

<nav style="background-color: #333; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-family: Arial, sans-serif;">
    <ul style="list-style: none; display: flex; gap: 15px; margin: 0; padding: 0; justify-content: center;">
        <?php foreach ($paginas as $archivo => $titulo): ?>
            <li>
                <a href="<?php echo $archivo; ?>" 
                   style="text-decoration: none; padding: 10px 15px; border-radius: 4px; font-weight: bold;
                          background-color: <?php echo ($archivo_actual == $archivo) ? '#007bff' : '#555'; ?>;
                          color: white;">
                    <?php echo $titulo; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>