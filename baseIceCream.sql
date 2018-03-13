CREATE DATABASE icecream;

USE icecream;
 -- Se crea una tabla en el cual se guardarán los datos del usuario
CREATE TABLE Usuario(
    IdUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (45),
    apellido VARCHAR (45) 
     -- Se elimino el campo numero
);
 -- Se crea la tabla de helado
CREATE TABLE helado(
Id INT PRIMARY KEY AUTO_INCREMENT,
sabor VARCHAR(45),
tipoCon VARCHAR(45),
tipoHelado VARCHAR(45),
tipoTam VARCHAR(45),
Precio INT ,
IdUsuario INT, -- Se manda llamar el IdUsuario de la tabla Usuario
INDEX (IdUsuario),
FOREIGN KEY (IdUsuario) references Usuario (IdUsuario) -- Se le hace referencia como una llave foranea.

);

