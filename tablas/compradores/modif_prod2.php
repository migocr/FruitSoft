<?php
	
	ModificarProducto($_POST['comprador_id'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'] );

	function ModificarProducto($id_comp, $nombre, $direcc, $tel)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE compradores SET nombre='".$nombre."', direccion='".$direcc."', telefono='".$tel."' WHERE comprador_id='".$id_comp."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>