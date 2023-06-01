<?php
// Recibir los datos del formulario de inicio de sesión
$usuario = $_POST['nombre'];
$contrasena = $_POST['contraseña'];

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Formulario";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar el usuario en la base de datos
$sql = "SELECT * FROM Datos WHERE nombre = '$usuario'";
$result = $conn->query($sql);

// Verificar si se encontró el usuario
if ($result->num_rows == 1) 
{
    $row = $result->fetch_assoc();
    
    // Comparar la contraseña ingresada con la contraseña almacenada
    if ($contrasena == $row['contraseña']) 
    {
        // La contraseña es correcta, el inicio de sesión es exitoso
        echo "Inicio de sesión exitoso";
    } 
    else 
    {
        // La contraseña es incorrecta
        echo "Contraseña incorrecta";
    }
} 
else 
{
    // No se encontró el usuario en la base de datos
    echo "Nombre de usuario incorrecto";
}

// Cerrar la conexión
$conn->close();
?>
