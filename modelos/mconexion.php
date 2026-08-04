<?php 	

		class Consultas{

		public function saveProducto($codigo, $familia, $producto, $unidad, $cantidad, $coste_unidad, $valor_inventario){

	    $modelo = new Conexion();
	    $conexion = $modelo->get_conexion();

	    $sql = "INSERT INTO Productos
	            (codigo, familia, producto, unidad,cantidad, coste_unidad, valor_inventario)
	            VALUES
	            (:codigo, :familia, :producto, :unidad, :cantidad, :coste_unidad, :valor_inventario)";

	    $statement = $conexion->prepare($sql);

	    $statement->bindParam(':codigo', $codigo);
	    $statement->bindParam(':familia', $familia);
	    $statement->bindParam(':producto', $producto);
	    $statement->bindParam(':unidad', $unidad);
	    $statement->bindParam(':cantidad',$cantidad);
	    $statement->bindParam(':coste_unidad',$coste_unidad);
	    $statement->bindParam(':valor_inventario', $valor_inventario);

	    if(!$statement){
	        return "Error al crear el registro";
	    }else{
	        $statement->execute();
	        return "Registro creado correctamente";
	    }
	}

			public function cargarProductos(){
		$rows= null;
		$modelo = new Conexion();
		$conexion = $modelo->get_conexion();
		$sql = "select * from Productos ";//where descripcion LIKE '%Azul%'
		$statement = $conexion->prepare($sql);
		$statement->execute();
		while ($resultado=$statement->fetch()) {
			$rows[] = $resultado;	
		}

			return $rows;
			// return $statement->fetchAll();// se quita el while y el arreglo para que funcione.
	}



public function cargarProducto($id){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "SELECT * FROM productos WHERE id = :id";

    $statement = $conexion->prepare($sql);
    $statement->bindParam(":id", $id);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);

}
	       public function buscarProducto($palabra){
		$rows= null;
		$modelo = new Conexion();
		$conexion = $modelo->get_conexion();
		// $nombre="%".$nombre."%";
		// $sql = "select * from productos where nombre like :nombre ";

		$buscar = "%".$palabra."%";

		$sql = "SELECT * FROM Productos WHERE codigo LIKE :buscar and producto like :buscar" ;
		$statement = $conexion->prepare($sql);
		$statement->bindParam(":buscar",$buscar);
		$statement->execute();
		while ($resultado=$statement->fetch()) {
			$rows[] = $resultado;
			}
			return $rows;	
	}

			public function EliminarProducto($id){
		$modelo = new Conexion();
		$conexion = $modelo->get_conexion();
		$sql = "delete from Productos where id = :id";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':id',$id);

		if(!$statement){
			return "Error al eliminar producto";
		}else{
			$statement->execute();
			return "Producto eliminado correctamente";
		}
		
	}

		public function modificarProducto($campo, $valor, $id){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE Productos SET $campo = :valor WHERE id = :id";

    $statement = $conexion->prepare($sql);

    if(!$statement){
        return "Error al preparar la consulta";
    }

    $statement->bindParam(':valor', $valor);
    $statement->bindParam(':id', $id);

    if($statement->execute()){
        return "Producto modificado exitosamente";
    }else{
        return "Error al modificar el producto";
    }

}





	public function saveMasivo($codigo,$familia,$producto,$unidad,$cantidad,$coste_unidad,$valor_inventario){

		 	$modelo = new Conexion();
   			$conexion = $modelo->get_conexion();
			$sql = 'INSERT INTO productos (codigo,familia,producto,unidad,cantidad,coste_unidad,valor_inventario) VALUES (:codigo,:familia,:producto,:unidad,:cantidad,:coste_unidad,:valor_inventario)';

			$res = $conexion->prepare($sql);
			$res->bindParam(':codigo', $codigo);
			$res->bindParam(':familia', $familia);
			$res->bindParam(':producto', $producto);
			$res->bindParam(':unidad', $unidad);
			$res->bindParam(':cantidad', $cantidad);
			$res->bindParam(':coste_unidad', $coste_unidad);
			$res->bindParam(':valor_inventario', $valor_inventario);
			
			

			try {
				$res->execute();
				echo "<script>alert('Carga Masiva de productos Correctamente!!')</script>";
				echo "<script>location.href='../vistas/verproductos.php'</script>";
			} catch (Exception $e) {
				echo "<script>alert('Error al cargar!!')</script>";
				echo "<script>location.href='../vistas/cargaMasiva.php'</script>";
			}


		}
	

	}


 ?>