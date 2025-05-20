<?php
require_once 'config/database.php';

// Cargar controladores requeridos
require_once 'controllers/ArticuloController.php';
require_once 'controllers/ContactoController.php';
require_once 'controllers/RegistroController.php';
// Agrega aquí más controladores si tienes

// Obtener la URL desde .htaccess
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'articulo/mostrar';
$params = explode('/', $url);

// Controlador y acción
$controllerName = ucfirst($params[0]) . 'Controller';
$method = $params[1] ?? 'mostrar';

// Verificar existencia del controlador
if (file_exists("controllers/{$controllerName}.php")) {
    require_once "controllers/{$controllerName}.php";

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        if (method_exists($controller, $method)) {
            // Llama al método con parámetros adicionales si existen
            call_user_func_array([$controller, $method], array_slice($params, 2));
        } else {
            echo "Método '$method' no encontrado en $controllerName.";
        }
    } else {
        echo "Controlador '$controllerName' no encontrado.";
    }
} else {
    echo "Archivo de controlador '$controllerName.php' no encontrado.";
}
?>
