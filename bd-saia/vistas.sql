CREATE VIEW vw_usuarios
AS SELECT * FROM roles
INNER JOIN usuarios ON roles.id = usuarios.id_rol;

CREATE VIEW vw_productos
AS SELECT * FROM productos;

CREATE VIEW vw_clientes
AS SELECT * FROM clientes;