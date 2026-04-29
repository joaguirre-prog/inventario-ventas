
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../app/controllers/ProductoController.php";

$controller = new ProductoController();

$accion = $_GET['accion'] ?? 'listar';

if ($accion == 'crear') {
    $controller->crear($_POST);

} elseif ($accion == 'eliminar') {
    $controller->eliminar($_GET['id']);
//editar
} elseif ($accion == 'editar') {
    $controller->editar($_GET['id']);

} elseif ($accion == 'actualizar') {
    $controller->actualizar($_POST);

} elseif ($accion == 'ventas') {
    $controller->ventas();

} elseif ($accion == 'procesarVenta') {
    $controller->procesarVenta($_POST);
//listar
} else {
    $controller->listar();
}






