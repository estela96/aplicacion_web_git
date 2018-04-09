<?php 
#Incluimos el archivo de conexión con nuestra base de datos
include 'conexion.php';
#Obtenemos los valores de la tabla
$nombre = $_POST["nombre"];
$apellidop= $_POST["apellidop"];
$apellidom = $_POST["apellidom"];
$idhelado= $_POST["idhelado"];

#Aplicamos la sentencia de ingresar datos
$consulta = mysqli_query($conexion, "INSERT INTO usuarios(nombre, apellido_paterno,apellido_materno, id_Helado) VALUES ('$nombre','$apellidop', '$apellidom', $idhelado)");

#INSERT INTO usuarios(nombre, apellido_paterno,apellido_materno, id_Helado) VALUES ("Rosa","Alvarado", "Montes", 1);
if(!$consulta)
{
	echo "Error al insertar datos". mysql_error();
}else{
	echo "Se han insertado los datos";
}
 ?>


