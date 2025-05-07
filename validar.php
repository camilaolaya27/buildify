
<?php
require_once __DIR__ . '/Controllers/UsuariosController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $controlador = new UsuarioControlador();
    $controlador->login($email, $password);
}
