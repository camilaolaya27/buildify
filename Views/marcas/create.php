
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/Css/create.css">
    <title>Crear Marcas</title>
</head>

<body>
    <h1>Crear Marcas</h1>
    <!-- menu de navegacion -->
    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="create.php">Crear Marcas</a>
        <a href="../login.php">Salir</a>
    </nav>

    <div class="container">
        <div class="cont_form">
            <form class="formulario" action="../../Controllers/controllerMarcas/CreateController.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required>

                <label for="numeroProductos">Numero de productos:</label>
                <input type="number" id="precio" name="numeroProductos" required>

                <label for="pais">Pais:</label>
                <input type="text" id="cantidad" name="pais" required>

                <label for="stock">Stock:</label>
                <input type="number" id="categoria" name="stock">

                <input id="submit"type="submit" value="Crear Marca">
            </form>
        </div>
    </div>
</body>

</html>