<?php    

// Recibimos por POST los datos procedentes del formulario    

$id = $_POST["id"];
$nombre = $_POST["nombre"];    
$apellido = $_POST["apellido"];    
$numero = $_POST["numero"];
$sabor = $_POST["sabor"];
$tipoCono = $_POST["TipoDeCono"];
$tipoHelado = $_POST["TipoDeHelado"];
$medida = $_POST["Medida"];
$precio = $_POST["Precio"];

// Abrimos la conexion a la base de datos    
include("abre_conexion.php");    

$_GRABAR_SQL = "INSERT INTO $Usuario (nombre,apellido) VALUES ('$nombre','$apellido')";
$_GRABAR = "INSERT INTO $helado (sabor,TipoDeCono,TipoDeHelado,Medida,Precio) VALUES ('$sabor','$tipoCono','tipoHelado','medida','precio')";   
mysql_query($_GRABAR_SQL);   
mysql_query($_GRABAR);

// Cerramos la conexion a la base de datos    
include("cierra_conexion.php");    

// Confirmamos que el registro ha sido insertado con exito    

echo "    
<p>Los datos han sido guardados con exito.</p>    

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>    
";    
?>