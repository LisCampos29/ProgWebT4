<?php
$i = 1;

// Bucle do-while que se ejecutará al menos una vez y luego repetirá mientras $i sea menor o igual a 5
do {
    // Imprime el mensaje "love: " concatenado con el valor actual de $i y añade una etiqueta <br> para realizar un salto de línea en el navegador.
    echo "love: " . $i . "<br>";

    // Incrementa el valor de $i en 1 en cada iteración
    $i++;
} while ($i <= 5);
// Fin del bucle do-while
?>
