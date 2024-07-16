<?php
require_once 'conexion.php';

class loginModel {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function validarUsuario($correo, $contrasena) {
        $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $resultado = $this->conexion->conectar()->query($query);
        
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc(); // Retorna los datos del usuario si la consulta encuentra resultados
        } else {
            return null; // Retorna null si no encuentra ningún usuario con esas credenciales
        }
    }
}
?>
