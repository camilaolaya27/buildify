<?php
require_once __DIR__ . '/../../Models/ProductoModel.php';

$modelo = new ProductoModel();

if (isset($_GET['id'])) {
    $producto = $modelo->obtenerProductoPorId($_GET['id']);
}

if (!$producto) {
    echo "Producto no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../../Public/Css/edit.css">
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="../../Controllers/UpdateController.php" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?= $producto['descripcion'] ?>" required>

        <label>Precio:</label>
        <input type="text" name="precio" value="<?= $producto['precio'] ?>" required>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" value="<?= $producto['cantidad'] ?>" required>

        <label>Categoría:</label>
        <input type="text" name="categoria" value="<?= $producto['categoria'] ?>">

        <label>Marca:</label>
        <input type="text" name="marca" value="<?= $producto['marca'] ?>">

        <input type="submit" value="Actualizar">
    </form>

    <div class="volver">
        <a href="index.php">Volver a la lista de productos</a>
    </div>
</body>
</html>
