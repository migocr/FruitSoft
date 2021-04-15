<?php
	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM ventas WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("¡Venta Eliminada!");
	window.location.href='index.php';
</script>