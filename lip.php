<?php 
	include ("consult.php");
		
		$nombre= $_POST [''];
		$apellido= $_POST[''];
		$cedula= $_POST [''];
		$nrc= $_POST [''];
		$cargo= $_POST [''];
		$salario= $_POST [''];

//$mostrar="SELECT * FROM `dbprotocolo`.`registroe` WHERE cedula=$cedu  ";
//$sql = "UPDATE `dbprotocolo`.`registroe` SET `cedula` = $cedu ' WHERE `registroe`.`id` = 216;";
		$guardar = "UPDATE `RRHH`.`registro` SET he='$nombre', nod='$apellido', diaf='$cedula', be='$nrc', dad='$cargo', ";


		$resultado=mysql_query($guardar) or die ("NO ACTUALIZADO");

		if ($resultado) {
			echo '<script>alert ("se han Guardado los Cambios Exitosamente"); window.location="nomina.php"</script>';
		} else {
			echo "<scrip>alert('No se pudieron guardar los cambios'); window.history.go(-1);</script>";
		}
?>

