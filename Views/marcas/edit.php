<?php
require_once __DIR__ . '/../../Models/MarcasModels/MarcasModel.php';

$modelo = new MarcaModel();

if (isset($_GET['id'])) {
    $marca = $modelo->obtenerMarcaPorId($_GET['id']);
}

if (!$producto) {
    echo "Marca no encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Marca</title>
    <link rel="stylesheet" href="../../Public/Css/edit.css">
</head>
<body>
    <h1>Editar Marca</h1>
    <form action="../../Controllers/controllerMarcas/UpdateController.php" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?= $producto['descripcion'] ?>" required>

        <label>Numero de Productos:</label>
        <input type="number" name="numeroProductos" value="<?= $producto['numeroProductos'] ?>" required>

        <label>Pais:</label>
        <input type="text" name="pais" value="<?= $producto['pais'] ?>" required>

        <label>Stock:</label>
        <input type="number" name="stock" value="<?= $producto['stock'] ?>">

        <input type="submit" value="Actualizar">
    </form>

    <div class="volver">
        <a href="index.php">Volver a la lista de marcas</a>
    </div>
</body>
</html>
