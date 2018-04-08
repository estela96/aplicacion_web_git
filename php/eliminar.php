<?php 

include 'conexion.php';

$id = $_POST["id"];

$consulta = mysqli_query($conexion, "DELETE FROM cat_helados WHERE id = $id");

if (!$consulta) {
	echo "Error al eliminar los datos";
	exit();
}else{
	echo "Los datos se han eliminado";
}
 ?>
