<?php
require_once __DIR__ . '/../../Models/MarcasModels/MarcasModel.php';

$modelo = new MarcasModel();
$marcas = $modelo->obtenerMarcas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARCAS</title>
</head>
<body>
    <h1>Productos Registrados</h1>

    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="create.php">Crear Marca</a>
        <a href="../productos/index.php">Menu de productos</a>
        <a href="../login.php">Salir</a>
    </nav>
    <div class="container">
        <table class="tabla">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Numero de productos</th>
                <th>Pais</th>
                <th>En Stock</th>
            </tr>
            <?php if (!empty($marcas)): ?>
                <?php foreach ($marcas as $marca): ?>
                    <tr>
                        <td><?= $marca['id']?></td>
                        <td><?= $marca['nombre']?></td>
                        <td><?= $marca['descripcion']?></td>
                        <td><?= $marca['numeroProductos']?></td>
                        <td><?= $marca['pais']?></td>
                        <td><?= $marca['stock']?></td>

                        <td>
                            <a href="edit.php?id=<?=$marca['id']?>" id="edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="../../Controllers/controlleMaras/DeleteController.php?id=<?=$marca['id']?>" id="delete"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay marcas disponibles en el momento</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>