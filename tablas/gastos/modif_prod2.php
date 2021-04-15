<?php
	
	ModificarProducto($_POST['id'], $_POST['concepto'], $_POST['factura'], $_POST['fecha'], $_POST['total'] );

	function ModificarProducto($id, $concepto, $fac, $fec,$tot)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE gastos SET concepto='".$concepto."', factura='".$fac."', fecha='".$fec."',total='".$tot."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>