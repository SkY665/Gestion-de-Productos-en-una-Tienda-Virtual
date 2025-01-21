# Gestión de Productos en una Tienda Virtual

Aplicacion desarrollada en php aplicando la separacion 
de responsabilidades entre modelo, vista y controlador, además de realizar operaciones
CRUD (Crear, Leer, Actualizar, Eliminar).

Para poder ejecutarla primero se debe instalar XAMPP a traves de este link
https://www.apachefriends.org/es/download.html

Despues de realizar dicha instalacion tendra que activar los servicios Mysql Database y Apache Web Server.

Recuerde que la aplicacion debe estar en la carpeta htdocs de la carpeta XAMPP en su disco C para poder ingresar a la aplicacion.

Ahora tendra que ingresar a esta url para poder ingresar a la aplicacion de crear
http://localhost/tienda_virtual/app/views/productos/crear.php

De igual forma si quiere ejecutar diferentes operaciones desde nuestra aplicacion debera ingresar a esta ruta, en donde podra elegir que aplicacion usar
http://localhost/tienda_virtual/app/views/productos/

Despues de que haya creado el producto ingrese a esta ruta 
http://localhost/phpmyadmin/

Ingrese al la seccion SQL y ejecute este query para obversar el producto que haya creado
SELECT * FROM productos;

Despues de realiazar estos pasos usted habra podido crear un producto con nuestra aplicacion.
