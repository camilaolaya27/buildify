<?php
require_once __DIR__ . '/../Models/Usuarios.php';

class UsuarioControlador {
    public function login($email, $password) {
        $modelo = new UsuarioModelo();
        $usuario = $modelo->obtenerUsuarioPorEmail($email);

        if ($usuario && $usuario['password'] === $password) {
            // Aquí puedes usar sesiones si deseas mantener al usuario conectado
            header("Location: /buildify/Views/productos/index.php");
            exit();
        } else {
            header("Location: /buildify/Views/login.php?error=1");
            exit();
        }
    }
}
