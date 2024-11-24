<?php 
	include ("consult.php");
		
		$nombre= $_POST ['nomb'];
		$apellido= $_POST['apel'];
		$cedula= $_POST ['cedula'];
		$nrc= $_POST ['ncuent'];
		$cargo= $_POST ['car'];
		$salario= $_POST ['sala'];

//$mostrar="SELECT * FROM `dbprotocolo`.`registroe` WHERE cedula=$cedu  ";
//$sql = "UPDATE `dbprotocolo`.`registroe` SET `cedula` = $cedu ' WHERE `registroe`.`id` = 216;";
		$guardar = "UPDATE `RRHH`.`registro` SET nombre='$nombre', apelli='$apellido', ced='$cedula', numcuent='$nrc', carg='$cargo', salario='$salario' WHERE ced='$cedula'";


		$resultado=mysql_query($guardar) or die ("NO ACTUALIZADO");

		if ($resultado) {
			echo '<script>alert ("se han Guardado los Cambios Exitosamente"); window.location="nomina.php"</script>';
		} else {
			echo "<scrip>alert('No se pudieron guardar los cambios'); window.history.go(-1);</script>";
		}
?>

