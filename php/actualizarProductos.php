<?php 

include 'conexion.php';

$id = $_POST["id"];
$texto = $_POST["texto"];
$columna = $_POST["columna"];

$consulta = mysqli_query($conexion, "UPDATE usuarios SET $columna = '$texto' WHERE id = $id");

if(!$consulta)
{
	echo "Error al actualizar datos". mysql_error();
}else{
	echo "Se han actualizado los datos";
}
 ?>
