
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/Css/create.css">
    <title>Crear Productos</title>
</head>

<body>
    <h1>Crear Productos</h1>
    <!-- menu de navegacion -->
    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="create.php">Crear producto</a>
        <a href="../login.php">Salir</a>
    </nav>

    <div class="container">
        <div class="cont_form">
            <form class="formulario" action="../../Controllers/CreateController.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required>

                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" required>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required>

                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria">

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca">

                <input id="submit"type="submit" value="Crear Producto">
            </form>
        </div>
    </div>
</body>

</html>