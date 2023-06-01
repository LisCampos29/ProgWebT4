<?php
$colores = array("Rojo", "Verde", "Azul");

// Bucle foreach que recorre cada elemento del array $colores
// En cada iteración, el valor del elemento se asigna a la variable $color
foreach ($colores as $color) {
    // Imprime el mensaje "Color: " concatenado con el valor actual de $color y añade una etiqueta <br> para realizar un salto de línea en el navegador.
    echo "Color: " . $color . "<br>";
}
// Fin del bucle foreach
?>
