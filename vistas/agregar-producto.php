<?php include"layout/heade.php" ?>
		<h1> Inventario | Productos </h1>
		    
		    <!-- Formulario de ingreso -->
		    <form id="formulario-producto">
		        <input type="text" id="nombre" placeholder="Nombre del producto" required>
		        <input type="number" id="precio" placeholder="Precio ($)" step="0.01" required>
		        <button type="submit">Agregar Producto</button>
		    </form>

		    <h2>Lista de Productos</h2>
		    <!-- Contenedor donde se insertarán los productos -->
		    <div id="lista-productos"></div>

		    <script>
		    	// Seleccionar elementos del DOM
						const formulario = document.getElementById('formulario-producto');
						const listaProductos = document.getElementById('lista-productos');

						// Arreglo para almacenar los productos en memoria
						const productos = [];

						// Escuchar el evento de envío del formulario
						formulario.addEventListener('submit', function(event) {
						    event.preventDefault(); // Evitar que la página se recargue

						    // Obtener los valores de los inputs
						    const nombre = document.getElementById('nombre').value;
						    const precio = parseFloat(document.getElementById('precio').value);

						    // Crear un objeto con los datos del producto
						    const nuevoProducto = {
						        id: Date.now(), // ID único basado en el tiempo
						        nombre: nombre,
						        precio: precio
						    };

						    // Agregar al arreglo y actualizar la interfaz
						    productos.push(nuevoProducto);
						    renderizarProductos();

						    // Limpiar el formulario
						    formulario.reset();
						});

						// Función para dibujar los productos en el HTML
						function renderizarProductos() {
						    // Limpiar la lista previa para no duplicar
						    listaProductos.innerHTML = '';

						    // Recorrer el arreglo y crear los elementos visuales
						    productos.forEach(producto => {
						        const div = document.createElement('div');
						        div.className = 'producto-item';
						        div.innerHTML = `
						            <span><strong>${producto.nombre}</strong></span>
						            <span>$${producto.precio.toFixed(2)}</span>
						        `;
						        listaProductos.appendChild(div);
						    });
						}
		    </script>
	</body>
</html>