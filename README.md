#  Sistema de Inventario y Ventas

##  Descripción

Sistema web desarrollado en PHP con arquitectura MVC que permite gestionar productos y realizar ventas con control de stock.



##  Funcionalidades

* Crear productos
* Listar productos
* Editar productos
* Eliminar productos
* Módulo de ventas
* Control de stock automático



##  Requisitos

* PHP 7 o superior
* XAMPP / WAMP / Laragon
* Navegador web



##  Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/joaguirre-prog/inventario-ventas.git
```

2. Copiar en la carpeta del servidor:

```bash
C:\xampp\htdocs\
```

3. Asegurarse de que exista el archivo:

```bash
/storage/productos.json
```

Con el siguiente contenido:

```json
[]
```

4. Ejecutar en el navegador:

```bash
http://localhost/inventario-ventas/public/
```



##  Capturas del sistema

### Inventario

<img width="637" height="372" alt="image" src="https://github.com/user-attachments/assets/0aaf60ce-e20c-43f1-9b90-9a2772c30a08" />


### Edición de producto

(Aquí agregar captura)

### Ventas

(Aquí agregar captura)



## Usuario de prueba

No requiere autenticación.

---

##  Arquitectura

El sistema sigue el patrón MVC:

* Modelo: Manejo de datos (JSON)
* Vista: Interfaz de usuario
* Controlador: Lógica del sistema



##  Autor

Joseph Aguirre
