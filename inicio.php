<?php
session_start();

if (!isset($_SESSION['correo'])) {
    header('Location: index.html'); // Redirigir al login si no está logueado
    exit();
}

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

$correo = $_SESSION['correo'];

// Preparar la consulta
$stmt = $conn->prepare("SELECT nombre, apellidos FROM usuario WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nombre, $apellidos);

if ($stmt->num_rows > 0) {
    $stmt->fetch();
} else {
    echo "Usuario no encontrado";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Consultorio Médico</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .welcome-container {
      text-align: center;
    }
    .welcome-message {
      font-size: 24px;
      font-weight: bold;
    }
    .btn-logout {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <div class="welcome-message">
      <?php echo "Bienvenido, $nombre $apellidos"; ?>
    </div>
    <a href="logout.php" class="btn btn-primary btn-logout">Cerrar Sesión</a>
  </div>

  <!-- Bootstrap JS y dependencias opcionales (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
