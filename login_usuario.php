<?php
session_start();

$servername = "localhost";
$username = "id22368256_admin";
$password = "Medicalcare2024."; 
$dbname = "id22368256_medicalcare";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];

    // Preparar la consulta
    $stmt = $conn->prepare("SELECT contrasena FROM usuario WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_contrasena);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($contrasena, $hashed_contrasena)) {
            $_SESSION['correo'] = $correo; // Almacenar correo en la sesión
            echo "Login exitoso";
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    $stmt->close();
}

$conn->close();
?>
