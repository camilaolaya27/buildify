<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/buildify/Public/Css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesiónnn</h1>
        <?php if (isset($_GET['error'])): ?>
            <p style="color: red;">Email o contraseña incorrectos</p>
        <?php endif; ?>
        <form class="formulario" action="/buildify/validar.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
