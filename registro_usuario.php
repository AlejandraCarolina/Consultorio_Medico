
<?php
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
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $hashed_contrasena = password_hash($contrasena, PASSWORD_DEFAULT); // Encriptar la contraseña

    // Validar entradas
    if (!empty($nombre) && !empty($apellidos) && !empty($correo) && !empty($contrasena)) {
        // Preparar la consulta
        $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellidos, correo, contrasena) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $apellidos, $correo, $hashed_contrasena);

        if ($stmt->execute()) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}

$conn->close();
?>
