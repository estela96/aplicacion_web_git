
$(document).ready(function() {
			// obtener datos
			function obtener_datos() {
				$.ajax({
					url: "php/mostrar_datos.php",
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
				var sabor_add = $("#sabor_add").text();
				var tipocono_add = $("#tipocono_add").text();
				var tipohelado_add = $("#tipohelado_add").text();
				var tipotamano_add = $("#tipotamano_add").text();
				var precio_add = $("#precio_add").text();

				//insertamos con Ajax
				$.ajax({
					url: "php/insertar.php",
					method: "POST",
					data: {sabor: sabor_add, tipo_cono: tipocono_add, tipo_helado: tipohelado_add, tipo_tamano: tipotamano_add, precio: precio_add},
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
					url: "php/actualizar.php",
					method: "POST",
					data: {id: id, texto: texto, columna: columna},
					success: function(data){
						obtener_datos();
					}
				})

			}
//blur es cuando salgamos del campo.
//Se debe de hacer uno para cada campo.
//# estamos seleccionando el id del tr de la tablaen el archivo de mostrar_datos.php solo del sabor, se debe crear otro para los demas valores
//Se utiliza el sabor de data que le pusimos a la columna de la tabla en mostrar_datos.php
			$(document).on("blur", "#sabor", function(){
				var id = $(this).data("id_sabor");
				var sabor = $(this).text();

				actualizar_datos(id, sabor, "sabor");


			})
			//obtener datos para el tipo de cono
			$(document).on("blur", "#tipo_cono",function(){
				var id = $(this).data("id_cono");
				var tipo_cono = $(this).text();

				actualizar_datos(id,tipo_cono, "tipoCon");


			})

			//obtener datos para el tipo de helado
			$(document).on("blur", "#tipo_helado",function(){
				var id = $(this).data("id_tipohelado");
				var tipo_helado = $(this).text();

				actualizar_datos(id,tipo_cono, "tipoHelado");


			})

			//Obtener los datos para el tipo de tamaño
			$(document).on("blur", "#tipo_tamano",function(){
				var id = $(this).data("id_tipotama");
				var tipo_tamano = $(this).text();

				actualizar_datos(id,tipo_tamano, "tipoTam");


			})

			//Obtener los datos para el precio
			$(document).on("blur", "#precio",function(){
				var id = $(this).data("id_precio");
				var tipo_tamano = $(this).text();

				actualizar_datos(id,tipo_tamano, "Precio");


			})


			//ELiminar datos

			$(document).on("click","#eliminar", function(){
				if(confirm("Desea eliminar estos datos")){
					//Obtener valor en una variable
					var id = $(this).data("id");

					$.ajax({
					url: "php/eliminar.php",
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