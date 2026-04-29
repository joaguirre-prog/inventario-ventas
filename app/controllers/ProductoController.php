
<?php
require_once __DIR__ . "/../models/Producto.php";

class ProductoController {

    public function listar() {
        $productos = Producto::obtenerTodos();
        require __DIR__ . "/../views/listar.php";
    }

    public function crear($data) {
        Producto::guardar($data);
        header("Location: index.php");
        exit;
    }

    public function eliminar($id) {
        Producto::eliminar($id);
        header("Location: index.php");
        exit;
    }

    public function editar($id) {
        $productos = Producto::obtenerTodos();

        if (!isset($productos[$id])) {
            die("Producto no encontrado");
        }

        $producto = $productos[$id];
        require __DIR__ . "/../views/editar.php";
    }

    public function actualizar($data) {
        Producto::actualizar($data);
        header("Location: index.php");
        exit;
    }

    // 🔥 VENTAS
    public function ventas() {
        $productos = Producto::obtenerTodos();
        require __DIR__ . "/../views/ventas.php";
    }

    public function procesarVenta($data) {
        Producto::descontarStock($data);
        header("Location: index.php?accion=ventas");
        exit;
    }
}







