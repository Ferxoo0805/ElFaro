<?php
class UserModel {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }
    public function registrar($nombre, $email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $email, password_hash($password, PASSWORD_DEFAULT)]);
    }
}
?>
