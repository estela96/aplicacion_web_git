CREATE DATABASE icecream;

USE icecream;

CREATE TABLE Usuario(
    IdUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (45),
    apellido VARCHAR (45),
    numero VARCHAR (10)
);

CREATE TABLE helado(
Id INT PRIMARY KEY AUTO_INCREMENT,
sabor VARCHAR(45),
tipoCon VARCHAR(45),
tipoHelado VARCHAR(45),
tipoTam VARCHAR(45),
Precio INT ,
IdUsuario INT,
INDEX (IdUsuario),
FOREIGN KEY (IdUsuario) references Usuario (IdUsuario)

);

