<?php
require_once 'models/ContactoModel.php';

class ContactoController {
    private $model;
    public function __construct($db) {
        $this->model = new ContactoModel($db);
    }

    public function procesarFormulario($nombre, $email, $mensaje) {
        return $this->model->guardarMensaje($nombre, $email, $mensaje);
    }
}
?>
