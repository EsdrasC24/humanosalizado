<?php include ("consult.php");
	/*	$nombre= $_POST ['nomb'];
		$apellido= $_POST['apel'];
		$cedula= $_POST ['cedula'];
		$nrc= $_POST ['ncuent'];
		$cargo= $_POST ['car'];
		$salario= $_POST ['sala'];
	*/	
$mostrar="DELETE FROM RRHH.registro WHERE ced= $_GET[ci]  ";
	$result=mysql_query($mostrar) OR die("NO ELIMINADO") ;

		//$resultado=mysql_query($guardar,$conex) ;
if ($result) {
			echo '<script>alert ("se han Guardado los Cambios Exitosamente"); window.location="nomina.php"</script>';
		} else {
			echo "<scrip>alert('No se pudieron guardar los cambios'); window.history.go(-1);</script>";
		}
		?>

		?>