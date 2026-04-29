
<?php

class Producto {

    private static $file = __DIR__ . "/../../storage/productos.json";

    public static function obtenerTodos() {
        if (!file_exists(self::$file)) {
            return [];
        }

        $json = file_get_contents(self::$file);
        $data = json_decode($json, true);

        if (!is_array($data)) {
            return [];
        }

        return $data;
    }

    public static function guardar($data) {
        $productos = self::obtenerTodos();

        $productos[] = [
            'nombre' => $data['nombre'] ?? '',
            'precio' => $data['precio'] ?? 0,
            'stock'  => $data['stock'] ?? 0
        ];

        file_put_contents(self::$file, json_encode($productos, JSON_PRETTY_PRINT));
    }

    public static function eliminar($id) {
        $productos = self::obtenerTodos();

        if (isset($productos[$id])) {
            unset($productos[$id]);
        }

        $productos = array_values($productos);

        file_put_contents(self::$file, json_encode($productos, JSON_PRETTY_PRINT));
    }

    public static function actualizar($data) {
        $productos = self::obtenerTodos();

        $id = $data['id'];

        if (isset($productos[$id])) {
            $productos[$id] = [
                'nombre' => $data['nombre'] ?? '',
                'precio' => $data['precio'] ?? 0,
                'stock'  => $data['stock'] ?? 0
            ];
        }

        file_put_contents(self::$file, json_encode($productos, JSON_PRETTY_PRINT));
    }

    // 🔥 VENTAS
    public static function descontarStock($data) {
        $productos = self::obtenerTodos();

        $id = $data['id'];
        $cantidad = $data['cantidad'];

        if (!isset($productos[$id])) {
            die("Producto no existe");
        }

        if ($cantidad <= 0) {
            die("Cantidad inválida");
        }

        if ($productos[$id]['stock'] < $cantidad) {
            die("Stock insuficiente");
        }

        // Descontar stock
        $productos[$id]['stock'] -= $cantidad;

        file_put_contents(self::$file, json_encode($productos, JSON_PRETTY_PRINT));
    }
}


