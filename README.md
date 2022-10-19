## Sobre el proyecto
Este proyeecto se creo desde un framework Laravel su versión 9.36.2, trabajando con PHP >= 8.0.2, su motor de base de datos MySQL en su versión 5.7.36, trabajando con apache en su versión 2.4.51.

Se desarrolla un sistema de inventario donde se puede crear productos indicando:

- Nombre de producto
- Referencia
- Precio
- Peso
- Categoría
- Stock

Por otro lado también se podra vender algún producto creado dentro del inventario, indicando el producto y la cantidad, esto por una lado validara si hay stock suficiente para hacer la venta o si por lo contrario no hay. Se solicitaran los siguientes datos para generar la venta: 

- Producto
- Cantidad

## Requisitos necesarios para instalación del proyecto

- Versión de PHP >= 8.0.2
- Composer
- Gestor de bases de datos MySQL

## Pasos para inicar el proyecto

- Ejecutar composer install
- Crear base de datos llamada "cafeteria"
- Ejecutar Migraciones comando "php artisan migrate:fresh --seed"
- Ejecutar comando "php artisan sweetalert:publish"
- Ejecutar comando "php artisan serve"




**Desarrollado por:**  Héctor Julán Cogua Morera
