<?php
require_once __DIR__ .  '../../Models/MarcasModel/MarcasModel.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $modelo = new MarcaModel();
    $resultado = $modelo->eliminarMarca($id);

    if ($resultado) {
        header("Location: ../../Views/marcas/index.php?mensaje=Marca eliminado con éxito");
    } else {
        header("Location: ../../Views/marcas/index.php?mensaje=Error al eliminar la marca");
    }
} else {
    header("Location: ../../Views/marcas/index.php?mensaje=ID no proporcionado");
}

?>