<?php
	
	ModificarProducto($_POST['id'], $_POST['nombre'], $_POST['puesto'], $_POST['sueldo'], $_POST['direccion'], $_POST['telefono'],$_POST['fecha'] );

	function ModificarProducto($id, $nom, $pue, $sue,$dire,$tel,$date)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE empleados SET nombre='".$nom."', puesto='".$pue."', sueldo='".$sue."',direccion='".$dire."',telefono='".$tel."',fecha='".$date."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>