
$(document).ready(function() {
			// obtener datos
			function obtener_datos() {
				$.ajax({
					url: "../php/mostrar_datosProductos.php",
					method: "POST",
					success: function(data){
						$("#result").html(data)
					}
				})
			}

			obtener_datos();

			//Agregar datos

			$(document).on("click","#add", function(){
				//Nombre de la variable es el id que le pusimos a la columna de tr en donde el usuario agrega datos
				//con el # seleccionamos el valor
				var nombre_add = $("#nombre_add").text();
				var apellidop_add = $("#apellidop_add").text();
				var apellidom_add = $("#apellidom_add").text();
				var idhelado_add = $("#idhelados_add").text();

				//insertamos con Ajax
				$.ajax({
					url: "../php/insertarProductos.php",
					method: "POST",
					data: {nombre: nombre_add, apellidop: apellidop_add, apellidom: apellidom_add, idhelado: idhelado_add},
					success: function(data){
						obtener_datos();
						alert(data);
					}
				})
			})
			//Actualizar datos
			//Se crea funcion de actualizar datos

			function actualizar_datos(id, texto,columna){
				$.ajax({
					url: "../php/actualizarProductos.php",
					method: "POST",
					data: {id: id, texto: texto, columna: columna},
					success: function(data){
						obtener_datos();
					}
				})

			}
//blur es cuando salgamos del campo.
//Se debe de hacer uno para cada campo.
//# estamos seleccionando el id del tr de la tabla en el archivo de mostrar_datosProductos.php, se debe crear otro para los demás valores
//Se utiliza el sabor de data que le pusimos a la columna de la tabla en mostrar_datos.php
//No se tomo en cuenta el id_helados porque se supone que es algo que no se puede modificar...
			$(document).on("blur", "#nombre", function(){
				var id = $(this).data("id_nombre");
				var nombre = $(this).text();

				actualizar_datos(id, nombre, "nombre");


			})
			//obtener datos para los apellidos
			$(document).on("blur", "#apellidop",function(){
				var id = $(this).data("id_apellidop");
				var apellidop = $(this).text();

				actualizar_datos(id,apellidop, "apellido_paterno");


			})

			$(document).on("blur", "#apellidom",function(){
				var id = $(this).data("id_apellidom");
				var apellidom = $(this).text();

				actualizar_datos(id,apellidom, "apellido_materno");


			})

			//ELiminar datos

			$(document).on("click","#eliminar", function(){
				if(confirm("Desea eliminar estos datos")){
					//Obtener valor en una variable
					var id = $(this).data("id");

					$.ajax({
					url: "../php/eliminarProductos.php",
					method: "POST",
					data: {id: id},
					success: function(data){
						obtener_datos();
						alert(data);
					}
				})
}

			})
			


});