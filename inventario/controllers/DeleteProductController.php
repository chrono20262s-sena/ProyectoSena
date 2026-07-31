<?php 
require_once ('../models/mdb.php');
	require_once ('../models/mconexion.php');
	


	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$consultas=new Consultas();
		$mensaje = $consultas->EliminarProducto($id);
		echo "<script>
				alert('$mensaje');
				location.href='../views/verproductos.php';
				</script>";
		// echo "<div><a href='../verproductos.php'>Volver a mis productos</a></div>";
	}


	

 ?>