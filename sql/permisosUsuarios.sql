
-- CREACIÓN DE USUARIOS Y PERMISOS

-- Usuario 'admin':
-- Este usuario será el administrador de la base de datos y podrá realizar cualquier operación (INSERT, UPDATE, DELETE, CREATE, DROP, ALTER…).
-- Solo debe usarse para tareas administrativas.
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin123'; 

-- Usuario 'lector':
-- Este usuario solo tendrá permisos de lectura (SELECT). Este usuario no puede modificar la base de datos lo cuál lo hace seguro si no quieres que modifique filas o estructura de la tabla.
CREATE USER 'lector'@'localhost' IDENTIFIED BY 'lector123'; 

-- Usuario 'editor':
-- Este usuario puede leer y modificar datos (SELECT, UPDATE) pero no puede crear o borrar tablas este usuario tiene más permisos pero no puede modificar estructura de bbdd por seguridad.
CREATE USER 'editor'@'localhost' IDENTIFIED BY 'editor123'; 


-- ASIGNACIÓN DE PERMISOS

-- Usuario admin: todos los permisos sobre la base de datos "deportes".
-- Explicación: administra la base de datos, puede crear, modificar y eliminar tablas y datos.
GRANT ALL PRIVILEGES ON deportes.* TO 'admin'@'localhost';

-- Usuario lector: solo permisos de lectura (SELECT).
-- Explicación: usuarios que solo necesitan consultar datos, minimizando riesgos.
GRANT SELECT ON deportes.* TO 'lector'@'localhost';

-- Usuario editor: permisos de lectura y actualización (SELECT + UPDATE)
-- Explicación: puede modificar datos existentes sin alterar la estructura de la base de datos.
GRANT SELECT, UPDATE ON deportes.* TO 'editor'@'localhost';