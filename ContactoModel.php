<?php
class ContactoModel {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }
    public function guardarMensaje($nombre, $email, $mensaje) {
        $stmt = $this->conn->prepare("INSERT INTO mensajes_contacto (nombre, email, mensaje) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $email, $mensaje]);
    }
}
?>
