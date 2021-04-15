<?php
	EliminarProducto($_GET['comprador_id']);

	function EliminarProducto($comprador_id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM compradores WHERE comprador_id='".$comprador_id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Comprador Eliminado!!");
	window.location.href='index.php';
</script>