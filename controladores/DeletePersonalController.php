<?php 
require_once ('../modelos/mdb.php');
	require_once ('../modelos/mconexion.php');
	


	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$consultas=new Consultas();
		$mensaje = $consultas->EliminarPersonal($id);
		echo "<script>
				alert('$mensaje');
				location.href='../vistas/seepersonal.php';
				</script>";
		// echo "<div><a href='../verproductos.php'>Volver a mis productos</a></div>";
	}


	

 ?>