<?php
require_once './models/loginModel.php';

class loginController {
    public function index() {
        
        include './views/login.php';
    }

    public function autenticar() {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->validarUsuario($correo, $contrasena);

            if ($usuario) {
              
                echo "Inicio de sesión exitoso para " . $usuario['nombre'];
            } else {
                echo "Credenciales incorrectas";
            }
        }
    }
}
?>