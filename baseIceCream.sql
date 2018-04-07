CREATE DATABASE icecream;

USE icecream;

-- Tabla de los helados
CREATE TABLE cat_helados(
id INT PRIMARY KEY AUTO_INCREMENT,
sabor VARCHAR(45),
tipoCon VARCHAR(45),
tipoHelado VARCHAR(45),
tipoTam VARCHAR(45),
Precio VARCHAR(45) 
);
-- Creamos la tabla usuarios con mejor diseño que el anterior

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (45),
    apellido_paterno VARCHAR (45),
    apellido_materno VARCHAR(10),
    id_Helado INT, 	
    INDEX (id_Helado),	
    FOREIGN KEY (id_Helado) REFERENCES cat_helados (id)
);

-- Insertar datos en el catalogo de Helados y usuarios para pruebas-.-
INSERT INTO cat_helados(sabor, tipoCon, tipoHelado,tipoTam,Precio) VALUES ("Limón", "Vaso","Yogurt","Chico", "$15.00");
INSERT INTO cat_helados(sabor, tipoCon, tipoHelado,tipoTam,Precio) VALUES ("Limón", "Vaso","Yogurt","Mediano", "$20.00");
INSERT INTO cat_helados(sabor, tipoCon, tipoHelado,tipoTam,Precio) VALUES ("Limón", "Vaso","Yogurt","Grande", "$25.00");

INSERT INTO usuarios(nombre, apellido_paterno,apellido_materno, id_Helado) VALUES ("Rosa","Alvarado", "Montes", 1);
INSERT INTO usuarios(nombre, apellido_paterno,apellido_materno, id_Helado) VALUES ("Rosa","Alvarado", "Montes", 1);
INSERT INTO usuarios(nombre, apellido_paterno,apellido_materno, id_Helado) VALUES ("Rosa","Alvarado", "Montes", 1);
