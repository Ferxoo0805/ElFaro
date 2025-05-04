<?php
require_once 'models/UserModel.php';
class UserController {
    private $model;
    public function __construct($db) {
        $this->model = new UserModel($db);
    }
    public function registrarUsuario($nombre, $email, $password) {
        return $this->model->registrar($nombre, $email, $password);
    }
}
?>
