<?php
require_once __DIR__ . '/../Config/db.php';

class ProductoModel {
    private $conexion;

    public function __construct() {
        $db = new Database();
        $this->conexion = $db->conectar();
    }

    public function obtenerProductos() {
        $resultado = $this->conexion->query("SELECT * FROM productos");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function eliminarProducto($id) {
        $stmt = $this->conexion->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    // Metodos para editar productos 
    public function obtenerProductoPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    
    public function actualizarProducto($id, $nombre, $descripcion, $precio, $cantidad, $categoria, $marca) {
        $stmt = $this->conexion->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=?, cantidad=?, categoria=?, marca=? WHERE id=?");
        $stmt->bind_param("ssdissi", $nombre, $descripcion, $precio, $cantidad, $categoria, $marca, $id);
        $stmt->execute();
    }
}
