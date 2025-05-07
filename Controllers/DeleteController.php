<?php
require_once __DIR__ .  '/../Models/ProductoModel.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $modelo = new ProductoModel();
    $resultado = $modelo->eliminarProducto($id);

    if ($resultado) {
        header("Location: ../Views/productos/index.php?mensaje=Producto eliminado con éxito");
    } else {
        header("Location: ../Views/productos/index.php?mensaje=Error al eliminar el producto");
    }
} else {
    header("Location: ../Views/productos/index.php?mensaje=ID no proporcionado");
}

?>