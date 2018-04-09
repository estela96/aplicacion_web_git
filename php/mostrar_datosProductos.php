<?php 
//incluimos el archivo de conexión
include 'conexion.php';

//Hacemos una consulta con mysql en la tabla que queremos mostrar
$consulta = mysqli_query($conexion, "SELECT * FROM  usuarios");

//Mostramos y creamos una tabla con los datos que tenemos en la base de datos de la tabla
echo "

<table border= '1px' align='center'>
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERNO</th>
			<th>ID HELADO</th>
			<th>ELIMINAR</th>
		</tr>
	</thead>

";
//Consultar y mostrar hasta que no haya más datos de la base de datos en la tabla de html, agregamos adicionalmente un campo donde irá el botón de eliminar
	while ($registro = mysqli_fetch_array($consulta)) {
		echo "
		<tr>
			<td>".$registro["id"]."</td>
			<td id='nombre' data-id_nombre='".$registro["id"]."'contenteditable >".$registro["nombre"]."</td>
			<td id='apellidop' data-id_apellidop='".$registro["id"]."' contenteditable >".$registro["apellido_paterno"]."</td>
			<td id='apellidom' data-id_apellidom='".$registro["id"]."' contenteditable >".$registro["apellido_materno"]."</td>
			<td id='idhelados' data-id_helados='".$registro["id"]."' contenteditable >".$registro["id_Helado"]."</td>

			<td><button id='eliminar' data-id='".$registro["id"]."'>Eliminar</button></td>

		</tr>
		";
	}
//Poner una fila con sus columnas editables donde el usuario puede agregar a más usuarios
	echo "
		<tr>
			<td></td>
			<td id='nombre_add' contenteditable></td>
			<td id='apellidop_add' contenteditable></td>
			<td id='apellidom_add' contenteditable></td>
			<td id='idhelados_add' contenteditable></td>

			<td><button id='add'>Agregar</td>
		</tr>
	";
//Cerramos la tabla
echo "</table>";
 ?>