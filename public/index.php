
<?php
require_once '../config/database.php';
require_once '../app/controllers/ProductoController.php';

$controller = new ProductoController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($action == 'listar') {
    $controller->listar();
} elseif ($action == 'crear') {
    $controller->crear();
} elseif ($action == 'editar') {
    $controller->editar($id);
} elseif ($action == 'eliminar') {
    $controller->eliminar($id);
}
