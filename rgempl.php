<?php 
	include ("consult.php");
		
		$nombre= $_POST ['he'];
		$apellido= $_POST['nod'];
		$cedula= $_POST ['cedula'];
		$nrc= $_POST ['diaf'];
		$cargo= $_POST ['be'];
		$salario= $_POST ['dad'];

//$mostrar="SELECT * FROM `dbprotocolo`.`registroe` WHERE cedula=$cedu  ";
//$sql = "UPDATE `dbprotocolo`.`registroe` SET `cedula` = $cedu ' WHERE `registroe`.`id` = 216;";
		$guardar = "UPDATE `RRHH`.`registro` SET he='$nombre', nod='$apellido', ced='$cedula', diaf='$nrc', be='$cargo', dad='$salario' WHERE ced='$cedula'";


		$resultado=mysql_query($guardar) or die ("NO ACTUALIZADO");

		if ($resultado) {
			echo '<script>alert ("se han Guardado los Cambios Exitosamente"); window.location="nomina.php"</script>';
		} else {
			echo "<scrip>alert('No se pudieron guardar los cambios'); window.history.go(-1);</script>";
		}
?>

