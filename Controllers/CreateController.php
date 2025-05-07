<?php
require_once __DIR__ . '/../Models/CreateModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];

    $modelo = new CreateModel();
    $resultado = $modelo->crearProducto($nombre, $descripcion, $precio, $cantidad, $categoria, $marca);

    if ($resultado) {
        header("Location: ../Views/productos/create.php?mensaje=Producto creado con éxito");
    } else {
        header("Location: ../Views/productos/create.php?mensaje=Error al crear el producto");
    }
}
?>