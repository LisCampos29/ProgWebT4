<?php
// Definimos una cadena de texto
$cadena = "Hola Mundo";


// 1. La función strlen() nos devuelve la longitud de la cadena
echo "La longitud de la cadena es: " . strlen($cadena) . "<br>";

// 2. La función strtoupper() convierte la cadena a mayúsculas
echo "La cadena en mayúsculas es: " . strtoupper($cadena) . "<br>";

// 3. La función strtolower() convierte la cadena a minúsculas
echo "La cadena en minúsculas es: " . strtolower($cadena) . "<br>";

// 4. La función str_replace() reemplaza una subcadena por otra
$cadena_nueva = str_replace("Mundo", "Personas", $cadena);
echo "La cadena modificada es: " . $cadena_nueva . "<br>";

// 5. La función strpos() nos devuelve la posición de la primera aparición de una subcadena
$posicion = strpos($cadena, "Hola");
echo "La subcadena 'Hola' comienza en la posición: " . $posicion;
?>
