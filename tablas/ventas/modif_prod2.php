<?php
	
	ModificarProducto($_POST['id'], $_POST['fruta'], $_POST['calidad'], $_POST['cantidad'], $_POST['origen'], $_POST['pago'], $_POST['precio_unitario']
	, $_POST['total'], $_POST['comprador'], $_POST['fecha'] );

	function ModificarProducto($id, $frut, $cali, $cant,$ori,$tipo_pag, $pu,$tot,$comp,$date)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE ventas SET fruta='".$frut."', calidad='".$cali."', cantidad='".$cant."',origen='".$ori."',pago='".$tipo_pag."',precio_unitario='".$pu."',total='".$tot."',comprador='".$comp."',fecha='".$date."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='index.php';
</script>