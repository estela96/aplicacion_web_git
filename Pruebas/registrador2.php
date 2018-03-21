<?php
$connect = mysql_connect("localhost", "user","password");//se deben poner el usuario y password correspondientes de la persona que lo ocupe.
mysql_database("baseIceCream",$connect);
if ($connect) {
		echo "conexion exitosa. <br />";
		$id = $_POST["id"];
		$nombre = $_POST["nombre"];    
		$apellido = $_POST["apellido"];    
		$numero = $_POST["numero"];
		$sabor = $_POST["sabor"];
		$tipoCono = $_POST["TipoDeCono"];
		$tipoHelado = $_POST["TipoDeHelado"];
		$medida = $_POST["Medida"];
		$precio = $_POST["Precio"];		

		$consulta="insert into Usuario values ('$nombre','$apellido','$numero')";
		$consulta2="insert into helado values ('$sabor','$TipoDeCono','$TipoDeHelado','$Medida','$Precio')";
		
		$resultado=mysqli_query($connect,$consulta);
		$resultado2=mysqli_query($connect,$consulta2);
		
		if ($resultado) {
			echo "perfil almacenado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		if ($resultado2) {
			echo "perfil helados almacenado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		if (mysqli_close($connect)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexión";
		}
}
?>