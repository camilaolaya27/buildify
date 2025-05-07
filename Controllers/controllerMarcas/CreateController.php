<?php
require_once __DIR__ . '../../Models/MarcasModels/CreateModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $numeroProductos = $_POST['numeroProductos'];
    $pais = $_POST['pais'];
    $stock = $_POST['stock'];

    $modelo = new CreateModel();
    $resultado = $modelo->crearMarca($nombre, $descripcion, $numeroProductos, $pais, $stock);

    if ($resultado) {
        header("Location: ../../Views/marcas/create.php?mensaje=Marca creado con éxito");
    } else {
        header("Location: ../../Views/marcas/create.php?mensaje=Error al crear la marca");
    }
}
?>