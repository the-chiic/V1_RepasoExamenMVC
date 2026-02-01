-- Adrián Risco Sánchez

-- CREACIÓN DE USUARIOS Y PERMISOS

-- Usuario 'admin': Este usuario será el administrador de la base de datos.
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin123'; 

-- Usuario 'usuario': Este usuario será el usuario de cualquiera que entre a la web.
CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'usuario123'; 


-- ASIGNACIÓN DE PERMISOS

-- Usuario 'admin': Administra la base de datos, puede crear, modificar y eliminar tablas y datos.
GRANT ALL PRIVILEGES ON deportes.* TO 'admin'@'localhost';

-- Usuario 'usuario': El usuario de cualquiera que entre a la web tiene los permisos suficientes para ver la web y para inscribirse.
GRANT SELECT, UPDATE ON deportes.* TO 'usuario'@'localhost';
