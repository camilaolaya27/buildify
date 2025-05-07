<?php
require_once __DIR__ . '/../Config/db.php';

class CreateModel {
    private $conexion;

    public function __construct() {
        $db = new Database();
        $this->conexion = $db->conectar();
    }

    public function crearProducto($nombre, $descripcion, $precio, $cantidad, $categoria, $marca) {
        $stmt = $this->conexion->prepare("INSERT INTO productos (nombre, descripcion, precio, cantidad, categoria, marca) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdiss", $nombre, $descripcion, $precio, $cantidad, $categoria, $marca);
        return $stmt->execute();
    }

}



?>