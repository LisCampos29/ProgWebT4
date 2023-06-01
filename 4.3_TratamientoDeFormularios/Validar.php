<?php
require_once "Conexion.php";
// Consultar el usuario en la base de datos
$sql = "SELECT * FROM Datos WHERE nombre = '$nombre'";
$result = $conn->query($sql);

// Verificar si se encontró el usuario
  if ($result->num_rows == 1) 
  {
    $row = $result->fetch_assoc();
    
    // Comparar la contraseña ingresada con la contraseña almacenada
    if (password_verify($contraseña, $row['$contraseña'])) 
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