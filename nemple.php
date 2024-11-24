  <?php
  
 include ("consult.php");
$he= $_GET ['he'];
$nodt= $_GET ['nod'];
$diaf= $_GET ['diaf'];
$be= $_GET ['be'];
$dad= $_GET ['dad'];   
$cedula= $_GET ['ci'];
      //$cap = $_POST[ci];
   
  
 /* $sql = "INSERT INTO `rrhh`.`registro` (`he`, `nod`, `diaf`, `be`, `dad`) VALUES ('$_POST[he]','$_POST[nod]','$_POST[diaf]','$_POST[be]','$_POST[dad]'";
  $resultado=mysql_query($sql) or die ("NO ACTUALIZADO");*/


  $sql = "UPDATE `rrhh`.`registro` SET `he` = $he, `nod` = $nodt, `diaf` = $diaf, `be` = $be, `dad` = $dad WHERE ced='$cedula';";

 $resultado=mysql_query($sql) or die ("NO ACTUALIZADO");
  		
  header("location:emple.php")
 /*   $sqlt = "INSERT INTO RRHH.registroe (nombre, apelli, ced, rif, numcuent, gintru, fechnac, feching, carg, salario)
 VALUES ('$_POST[Nomb]','$_POST[Apell]','$_POST[ci]','$_POST[dir]','$_POST[no]','$_POST[su]','$_POST[es]','$_POST[oe]','$_POST[me]','$_POST[ne]');";
   */
 



?>