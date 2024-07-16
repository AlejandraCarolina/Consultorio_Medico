<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluye Google Fonts para la fuente -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <link rel="icon" type="image/x-icon" href="views/resources/img/icon.png">

    <title>Medical Care</title>

    <!-- Incluye Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.css" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Utiliza la fuente Poppins de Google Fonts */
            margin: 0;
        }

        .navbar {
            background-color: #2C3E50; /* Nuevo color de fondo del navbar */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave para el navbar */
        }

        .nav-link {
            font-weight: 600; /* Grosor de la fuente para los enlaces */
            color: white; /* Color de los enlaces */
        }

        .nav-link:hover {
            color: #FFD700; /* Color al pasar el mouse sobre el enlace */
        }

        .navbar-brand {
            font-size: 1.8rem; /* Tamaño de la fuente para la marca */
            font-weight: 700;
            color: white; /* Color de la marca */
        }

        .navbar-brand img {
            height: 40px; /* Altura del logo */
            margin-right: 10px; /* Espacio entre el logo y el texto */
        }

        .dropdown-menu {
            background-color: #2C3E50; /* Color de fondo del menú desplegable */
        }

        .dropdown-item {
            color: white; /* Color de los elementos del menú desplegable */
        }

        .dropdown-item:hover {
            background-color: #1A252F; /* Color de fondo al pasar el mouse sobre el elemento */
        }

        .background-image {
            background-image: url('views/resources/img/fondo_pantalla.jpg'); /* Ruta local de la imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 1;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 1.5rem;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="views/resources/img/logo.png">Medical Care
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                   <!-- <a class="nav-link" href="index.php?controller=LoginController&action=index">Iniciar Sesión</a>-->
                    <a class="nav-link <?php echo((isset($_GET['controller']) && $_GET['controller'] == 'loginController' || !isset($_GET['controller']))? 'active' : '') ?>" href="./index.php?controller=loginController&action=index">Iniciar Sesión</a>   
               </li> 
                <!--<li class="nav-item">
                    <a class="nav-link" href="index.php?controller=EmpleadosController&action=index">Agendamiento Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=GenerosController&action=index">Historial Citas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?controller=ClientesController&action=index">Farmacia</a>
                        <a class="dropdown-item" href="index.php?controller=BoletosController&action=index">Consultas</a>
                        <a class="dropdown-item" href="index.php?controller=SnackController&action=index">Chat</a>
                    </div>
                </li>-->
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="background-image">
        <div class="background-overlay"></div>
        <div class="container content">
            <h1>Bienvenidos a Medical Care</h1>
            <p>Su salud es nuestra prioridad</p>
        </div>
    </div>

    <?php
    // Incluir el controlador 
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = $_GET['controller'];
            $action = $_GET['action'];

            require_once "controllers/$controller.php";

            $controllerInstance = new $controller();
            $controllerInstance->$action();
        }
    ?>

    <!-- Incluye los scripts de Bootstrap y jQuery (si no se han incluido anteriormente) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
