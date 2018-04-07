<?php 
# Creando una conexión con la Base de datos a utilizar y la tabla, con los datos que tenemos guardados en el servidor de base de datos

$conexion = mysqli_connect("localhost","root", "1234", "icecream");

#si la conexión fallo, entonces nos muestre un error
if (!$conexion) {
	echo "no se ha podido conectar a bd" . mysqli_error();
	exit();

}

?>