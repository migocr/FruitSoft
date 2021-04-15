<?php 
$conn = mysqli_connect("localhost", "root", "", "prueba");

$mango = "Mango Ataulfo";
$r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'mango ataulfo'");
$f = mysqli_fetch_assoc($r);
echo "<p>Total de mango ataulfo vendido: .</p>" ; echo $f["suma"];


 echo '<div class="centrado">$f["suma"]</div> ';


        
?>


