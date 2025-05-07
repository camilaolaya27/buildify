<?php
require_once __DIR__ . '../../Models/MarcasModels/MarcasModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $numeroProductos = $_POST['numeroProductos'];
    $pais = $_POST['pais'];
    $stock = $_POST['stock'];

    $modelo = new MarcaModel();
    $modelo->actualizarMarca($id, $nombre, $descripcion, $numeroProductos, $pais, $stock);

    header("Location: ../../Views/marcas/index.php");
    exit;
}

?>