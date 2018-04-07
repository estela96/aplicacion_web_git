<?php 
//incluimos el archivo de conexión
include 'conexion.php';

//Hacemos una consulta con mysql en la tabla que queremos mostrar
$consulta = mysqli_query($conexion, "SELECT * FROM  cat_helados");

//Mostramos y creamos una tabla con los datos que tenemos en la base de datos de la tabla
echo "

<table border= '1px' align='center'>
	<thead>
		<tr>
			<th>ID</th>
			<th>SABOR</th>
			<th>TIPO DE CONO</th>
			<th>TIPO DE HELADO</th>
			<th>TAMAÑO</th>
			<th>PRECIO</th>
			<th>ELIMINAR</th>
		</tr>
	</thead>

";
//Consultar y mostrar hasta que no haya más datos de la base de datos en la tabla de html, agregamos adicionalmente un campo donde irá el botón de eliminar
	while ($registro = mysqli_fetch_array($consulta)) {
		echo "
		<tr>
			<td>".$registro["id"]."</td>
			<td id='sabor' data-id_sabor='".$registro["id"]."'contenteditable >".$registro["sabor"]."</td>
			<td id='tipo_cono' data-id_cono='".$registro["id"]."' contenteditable >".$registro["tipoCon"]."</td>
			<td id='tipo_helado' data-id_tipohelado='".$registro["id"]."' contenteditable >".$registro["tipoHelado"]."</td>
			<td id='tipo_tamano' data-id_tipotama='".$registro["id"]."' contenteditable >".$registro["tipoTam"]."</td>
			<td id='precio' data-id_precio='".$registro["id"]."' contenteditable >".$registro["Precio"]."</td>


			<td><button id='eliminar' data-id='".$registro["id"]."'>Eliminar</button></td>


		</tr>
		";
	}
//Poner una fila con sus columnas editables donde el usuario puede agregar a más usuarios
	echo "
		<tr>
			<td></td>
			<td id='sabor_add' contenteditable></td>
			<td id='tipocono_add' contenteditable></td>
			<td id='tipohelado_add' contenteditable></td>
			<td id='tipotamano_add' contenteditable></td>
			<td id='precio_add' contenteditable></td>

			<td><button id='add'>Agregar</td>
		</tr>
	";
//Cerramos la tabla
echo "</table>";
 ?>