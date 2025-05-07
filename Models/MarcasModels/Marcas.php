<?php
require_once __DIR__ . '../../Config/db.php';

class MarcaModelo {
    private $db;

    public function __construct() {
        $conexion = new Database();
        $this->db = $conexion->conectar();
    }

    public function obtenerMarca($nombre) {
        $stmt = $this->db->prepare("SELECT * FROM marcas WHERE nombre = ?");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
