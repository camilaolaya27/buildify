<?php
require_once __DIR__ . '/../Config/db.php';

class CreateModel {
    private $conexion;

    public function __construct() {
        $db = new Database();
        $this->conexion = $db->conectar();
    }

    public function crearMarca($nombre, $descripcion, $numeroProductos, $pais, $stock) {
        $stmt = $this->conexion->prepare("INSERT INTO marcas (nombre, descripcion, numeroProductos, pais, stock) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisi", $nombre, $descripcion, $numeroProductos, $pais, $stock);
        return $stmt->execute();
    }
}
?>