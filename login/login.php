
 
<?php
 
	if(isset($_POST["enviar"])) {
 
		require("conexion.php");
 
			$loginNombre = $_POST["user"];
			$loginPassword = ($_POST["pw"]);
 
			$consulta = "SELECT * FROM admin WHERE user='$loginNombre' AND pw='$loginPassword'";
 
			if($resultado = $mysqli->query($consulta)) {
				while($row = $resultado->fetch_array()) {
 
					$userok = $row["user"];
					$passok = $row["pw"];
				}
				$resultado->close();
			}
			$mysqli->close();
 
 
			if(isset($loginNombre) && isset($loginPassword)) {
 
				if($loginNombre == $userok && $loginPassword == $passok) {
 
					session_start();
					$_SESSION["logueado"] = TRUE;
					header("Location: admin.php");
 
				}
				else {
					Header("Location: index.php?error=login");
				}
 
			}
 
		} else {
			header("Location: index.php");
		}
 
 ?>