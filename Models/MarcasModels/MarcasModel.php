<?php
require_once __DIR__ . '/../Config/db.php';

class MarcaModel {
    private $conexion;

    public function __construct() {
        $db = new Database();
        $this->conexion = $db->conectar();
    }

    public function obtenerMarcas() {
        $resultado = $this->conexion->query("SELECT * FROM marcas");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function eliminarMarca($id) {
        $stmt = $this->conexion->prepare("DELETE FROM marcas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function obtenerMarcaPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM marcas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    
    public function actualizarMarca($id, $nombre, $descripcion, $numeroProductos, $pais, $stock) {
        $stmt = $this->conexion->prepare("UPDATE marcas SET nombre=?, descripcion=?, numeroProductos=?, pais=?, stock=? WHERE id=?");
        $stmt->bind_param("ssisi", $nombre, $descripcion, $numeroProductos, $pais, $stock, $id);
        $stmt->execute();
    }
}

?>