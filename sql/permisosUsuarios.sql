-- Adrián Risco Sánchez

-- CREACIÓN DE USUARIOS Y PERMISOS

-- Usuario 'admin': Este usuario será el administrador de la base de datos y podrá realizar cualquier operación (INSERT, UPDATE, DELETE, CREATE, DROP, ALTER…).
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin123'; 

-- Usuario 'editor': Este usuario puede leer y modificar datos (SELECT, UPDATE) tiene más permisos pero no puede crear, modificar o borrar estructura de bbdd por seguridad.
CREATE USER 'editor'@'localhost' IDENTIFIED BY 'editor123'; 

-- Usuario 'usuario': Este usuario solo tendrá permisos de lectura (SELECT). Este usuario no puede modificar la base de datos lo cuál lo hace seguro si no quieres que modifique filas o estructura de la tabla.
CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'usuario123'; 


-- ASIGNACIÓN DE PERMISOS

-- Usuario admin: administra la base de datos, puede crear, modificar y eliminar tablas y datos.
GRANT ALL PRIVILEGES ON deportes.* TO 'admin'@'localhost';

-- Usuario editor: puede ver, modificar y borrar datos existentes sin alterar la estructura de la base de datos.
GRANT SELECT, UPDATE, DELETE ON deportes.* TO 'editor'@'localhost';

-- Usuario usuario: El usuario de cualquiera que entre a la web tiene los permisos suficientes para ver la web y para inscribirse.
GRANT SELECT, UPDATE ON deportes.* TO 'usuario'@'localhost';
