
<?php
  $nombre = $_POST['Nomb'];
  $apelli = $_POST['Apell'];
  $ced = $_POST['ci'];
  $rif = $_POST['dir'];
  $numcuent = $_POST['no'];
  $gintru = $_POST['su'];
  $fechnac = $_POST['es'];
  $feching = $_POST['oe'];
  $carg = $_POST['me'];
  $salario = $_POST['ne'];
  $correo = $_POST['correo'];
  $tef = $_POST['telf'];
 

  $servidor ="localhost";
  $nombrusu = "root";
  $contas = "";
  $bd = "RRHH";

  $conex = new mysqli ($servidor, $nombrusu, $contas);
  $bd = mysqli_select_db( $conex, $bd); 

    
  $sql = "INSERT INTO `rrhh`.`registro` (`nombre`, `apelli`, `ced`, `rif`, `numcuent`, `gintru`, `fechnac`, `feching`, `carg`, `salario`, correo, telf) VALUES ('$_POST[Nomb]','$_POST[Apell]','$_POST[ci]','$_POST[dir]','$_POST[no]','$_POST[su]','$_POST[es]','$_POST[oe]','$_POST[me]','$_POST[ne]', '$_POST[correo]', '$_POST[telf]');";
  
 /*   $sqlt = "INSERT INTO RRHH.registroe (nombre, apelli, ced, rif, numcuent, gintru, fechnac, feching, carg, salario)
 VALUES ('$_POST[Nomb]','$_POST[Apell]','$_POST[ci]','$_POST[dir]','$_POST[no]','$_POST[su]','$_POST[es]','$_POST[oe]','$_POST[me]','$_POST[ne]');";
   */
   $conex->query($sql, $bd);


if ($conex) {
      echo '<script>alert ("se han Guardado los datos Exitosamente"); window.location="registrar.php"</script>';
    } else {
      echo "<scrip>alert('No se pudieron guardar los datos'); window.history.go(-1);</script>";
    }

?>



    


    







      