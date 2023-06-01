<?php
$cadena = "Hola mundo";
$longitud = 0;
$palabras = 0;
$espacio = " ";

// Calcula la longitud de la cadena
for ($i = 0; isset($cadena[$i]); $i++) {
    $longitud++;
}

// Cuenta el número de palabras en la cadena
if (!empty($cadena)) {
    $palabras = 1;
    for ($i = 0; $i < $longitud; $i++) {
        if ($cadena[$i] == $espacio) {
            $palabras++;
        }
    }
}

echo "Longitud de la cadena: " . $longitud . "Y el numero de palabras que hay en la cadena son de : " .$palabras;

?>