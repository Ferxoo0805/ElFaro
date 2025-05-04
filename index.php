<?php
$ruta = $_GET['ruta'] ?? 'home'; 

if ($ruta === 'home') {
    include 'views/home.php';
} elseif ($ruta === 'contacto') {
    include 'views/contacto.php';
} elseif ($ruta === 'registro') {
    include 'views/registro.php';
} elseif ($ruta === 'deporte') {
    include 'views/deporte.php';
} elseif ($ruta === 'negocios') {
    include 'views/negocios.php';
} elseif ($ruta === 'tecnologia') {
    include 'views/tecnologia.php';
} else {
    echo "Página no encontrada";
}
