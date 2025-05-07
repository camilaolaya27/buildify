<?php
require_once __DIR__ . '/../Models/ProductoModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];

    $modelo = new ProductoModel();
    $modelo->actualizarProducto($id, $nombre, $descripcion, $precio, $cantidad, $categoria, $marca);

    header("Location: ../Views/productos/index.php");
    exit;
}
