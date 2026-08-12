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
        public function __construct(){
			$cnn = new Conexion();
			$this->conexion = $cnn->get_conexion();
		}

		
			public function savePersonal($idRestaurante,$nombre,$apellidos,$nDocumento,$idTipo_Documento,$celular,$indicadores,$direccion,$idGrupo_Sanguineo,$codRH,$codSexo,$email,$cargo,$fecha_Contratacion,$estado){

			$sql = 'INSERT INTO personal (idRestaurante,nombres,apellidos,n_Documento,idTipo_Documento,celular,indicadores,direccion,idGrupo_Sanguineo,codRH,codSexo,gmail,cargo,fecha_Contratacion,estado) VALUES (:idRestaurante,:nombre,:apellidos,:nDocumento,:idTipo_Documento,:celular,:indicadores,:direccion,:idGrupo_Sanguineo,:codRH,:codSexo,:email,:cargo,:fecha_Contratacion,:estado)';

			$res = $this->conexion->prepare($sql);

			$res->bindParam(':idRestaurante',$idRestaurante);
			$res->bindParam(':nombre',$nombre);
			$res->bindParam(':apellidos',$apellidos);
			$res->bindParam(':nDocumento',$nDocumento);
			$res->bindParam(':idTipo_Documento',$idTipo_Documento);
			$res->bindParam(':celular',$celular);
			$res->bindParam(':indicadores',$indicadores);
			$res->bindParam(':direccion',$direccion);
			$res->bindParam(':idGrupo_Sanguineo',$idGrupo_Sanguineo);
			$res->bindParam(':codRH',$codRH);
			$res->bindParam(':codSexo',$codSexo);
			$res->bindParam(':email',$email);
			$res->bindParam(':cargo',$cargo);
			$res->bindParam(':fecha_Contratacion',$fecha_Contratacion);
			$res->bindParam(':estado',$estado);

			try {
				$res->execute();
				echo "<script>alert('Registro de Personal Exitoso!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
			} catch (Exception $e) {
				echo "<script>alert('Error al registrar Personal!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
			}
		}

			public function cargarPersonal($id){

		    $sql = "SELECT * FROM personal WHERE id = :id";
		    $res = $this->conexion->prepare($sql);

		    $res->bindParam(":id", $id);
		    try {
				$res->execute();
				$f = $res->fetch();				
				return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al cargar Personal!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
			}

		}


		public function cargarPersonale()
{
    $sql = "SELECT
                p.id,
                p.idRestaurante,
                p.nombres,
                p.apellidos,
                p.n_Documento,

                td.nombreDocumento AS tipo_documento,

                p.celular,
                p.indicadores,
                p.direccion,

                CONCAT(gs.nombreGrupo_Sanguineo, rh.tipoRH) AS grupo_sanguineo,

                s.nombreSexo AS sexo,

                p.gmail,

                c.nombreCargo AS cargo,

                p.fecha_Contratacion,
                CASE
    WHEN p.estado = 1 THEN 'Activo'
    ELSE 'Inactivo'
END AS estado
                

            FROM personal p

            INNER JOIN tipo_documento td
            ON p.idTipo_Documento = td.idTipo_Documento

            INNER JOIN grupo_sanguineo gs
            ON p.idGrupo_Sanguineo = gs.idGrupo_Sanguineo

            INNER JOIN rh rh
            ON p.codRH = rh.codRH

            INNER JOIN sexo s
            ON p.codSexo = s.codSexo

            INNER JOIN cargo c
            ON p.cargo = c.idCargo

            ORDER BY p.nombres ASC";

    $res = $this->conexion->prepare($sql);

    $res->execute();

    return $res->fetchAll(PDO::FETCH_ASSOC);
}
	// 		public function cargarPersonale(){
	// 	$rows= null;
		
	// 	$sql = "select * from personal ";//where descripcion LIKE '%Azul%'
	// 	$res = $this->conexion->prepare($sql);
	// 	$res->execute();
	// 	while ($resultado=$res->fetch()) {
	// 		$rows[] = $resultado;	
	// 	}

	// 		return $rows;
	// 		return $statement->fetchAll();// se quita el while y el arreglo para que funcione.
	// }



			public function EliminarPersonal($id){
		
		$sql = "Delete from personal where id = :id";
		$res = $this->conexion->prepare($sql);
		$res->bindParam(':id',$id);

		try {
				$res->execute();
				echo "<script>alert('Personal Eliminado Correctamente!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
			} catch (Exception $e) {
				echo "<script>alert('Error al eliminar personal!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
				// die($e->getMessage());
			}

		}

		public function buscarPersonal($dato){
		$rows= null;
		$buscar = "%".$dato."%";
		$sql = "SELECT * FROM personal WHERE codigo LIKE :buscar and producto like :buscar";
		$res = $this->conexion->prepare($sql);
		$res->bindParam(":buscar",$buscar);
		try {
				$res->execute();
				while ($resultado=$res->fetch()) {
					$rows[] = $resultado;
					}
					return $rows;
				echo "<script>alert('Personal Eliminado Correctamente!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
			} catch (Exception $e) {
				echo "<script>alert('Error al eliminar personal!!')</script>";
				echo "<script>location.href='../vistas/seepersonal.php'</script>";
				// die($e->getMessage());
			}

		}


		public function modificarPersonal($campo, $valor, $id){

			$sql = "UPDATE personal SET $campo = :valor WHERE id = :id";
			$res = $this->conexion->prepare($sql);


    if(!$res){
        return "Error al preparar la consulta";
    }

    $res->bindParam(':valor', $valor);
    $res->bindParam(':id', $id);

    if($res->execute()){
        return "Producto modificado exitosamente";
    }else{
        return "Error al modificar el producto";
    }

}


    public function listarRestaurantes() {
        $sql = "SELECT * FROM restaurante ORDER BY nombre_Comercial";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarTipoDocumento() {
        $sql = "SELECT * FROM tipo_documento ORDER BY nombreDocumento";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarGruposSanguineos() {
        $sql = "SELECT * FROM grupo_sanguineo ORDER BY nombreGrupo_Sanguineo";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarSexo() {
        $sql = "SELECT * FROM sexo ORDER BY nombreSexo";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarRH() {
        $sql = "SELECT * FROM rh ORDER BY tipoRH";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function listarEstado() {
    //     $sql = "SELECT * FROM estado ORDER BY nombreEstado";
    //     $res = $this->conexion->prepare($sql);
    //     $res->execute();
    //     return $res->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function listarCargo() {
        $sql = "SELECT * FROM cargo ORDER BY nombreCargo";
        $res = $this->conexion->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}	//Cierra  clase consultas 









		// public function listarGruposSanguineos(){
		//     $sql = "SELECT * FROM grupo_sanguineo ORDER BY nombreGrupo_Sanguineo";
		//     $res = $this->conexion->prepare($sql);
		//     $res->execute();

		//     return $res->fetchAll(PDO::FETCH_ASSOC);
		// }

		// public function listarTipoDocumento(){
		// 	$sql = "SELECT * FROM tipo_documento ORDER BY nombreDocumento";
		// 	$res = $this->conexion->prepare($sql);
		//     $res->execute();

		//     return $res->fetchAll(PDO::FETCH_ASSOC);

		// }

		

	




 ?>