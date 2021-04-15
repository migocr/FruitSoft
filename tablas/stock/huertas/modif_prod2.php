<?php
	
	ModificarProducto($_POST['id'], $_POST['nombre'],$_POST['localizacion'],$_POST['fruta'],$_POST['hectareas'] );

	function ModificarProducto($id, $nom,$loca,$frut, $hec)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE huertas SET nombre='".$nom."', localizacion='".$loca."', fruta='".$frut."',hectareas='".$hec."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>