<?php
	
	ModificarProducto($_POST['id'], $_POST['nombre'], $_POST['hectareas'], $_POST['variedad'] );

	function ModificarProducto($id, $nom, $hec, $var)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE fruta SET nombre='".$nom."', hectareas='".$hec."', variedad='".$var."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>