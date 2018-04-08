<?php 

include 'conexion.php';

$sabor = $_POST["sabor"];
$tipo_cono= $_POST["tipo_cono"];
$tipo_helado = $_POST["tipo_helado"];
$tipo_tamano= $_POST["tipo_tamano"];
$precio = $_POST["precio"];

$consulta = mysqli_query($conexion, "INSERT INTO cat_helados(sabor, tipoCon, tipoHelado, tipoTam, Precio) VALUES ('$sabor','$tipo_cono', '$tipo_helado', '$tipo_tamano', '$precio')");

#INSERT INTO cat_helados() VALUES ("Limón", "Vaso","Yogurt","Chico", "$15.00");
if(!$consulta)
{
	echo "Error al insertar datos". mysql_error();
}else{
	echo "Se han insertado los datos";
}
 ?>


