<!DOCTYPE html>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>vacasiones y reposos</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- Begin JavaScript -->
<script type="text/javascript" src="lib/jquery.1.4.2.js"></script>
  <script type="text/javascript" src="lib/jquery.custom.js"></script>
<script type="text/javascript" src="lib/compressed.js"></script>

<body>

<script type="text/javascript"> function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;       
} </script>

<div id="bg_img">
<div id="main">
<div id="main_img">
<!-- header begins -->

  <div id="buttons">
      <a href="indexx.php" class="but"  title="">Inicio</a>
      <a href="registrar.php" title="">Registrar</a>
      <a href="constancia.php" class="but"  title="">Const. Trabajo</a>
      <a href="vacasionesyreposos.php"   title="">Vacasiones</a>
      <a href="permisos.php"  class="but" title="">Permisos</a>
      <a href="nomina.php" title="">Nomina</a> 

       </div>

</div>
    
<!-- header ends -->


        <!-- content begins -->
                <div class="cont_top"></div>
       			<div id="content">
                      
                        <div style="clear: both; height: 400px">
                            
                              

<CENTER>
	<div id="contenido">
		
	<table style=" width: 800px; border-collapse: separate; border-spacing: 26px 13px;">
			<br><center>  <h1>Actualizacion de Nomina
</h1><br> </center> 
<form action="guardar_nomina.php" method="POST">
<?php 
				include "consult.php";
			
$mostrar="SELECT * FROM RRHH.registro WHERE ced= $_GET[ci]  ";
	$result=mysql_query($mostrar)  ;
		
while($row=mysql_fetch_assoc($result))
				{
					/*echo "<tr>";
					echo "<td> <input type='text' name= 'nomb' value=' ";  echo $row['nombre'];  echo " '</td>";
					echo "<td> <input type='text' name= 'apel'  value=' "; echo $row['apelli']; 	 echo " '</td>";
					echo "<td> <input type='text' name= 'cedula' value=' "; echo $row['ced'];	 	 echo " '</td>";
					echo "<td> <input type='text' name= 'ncuent' value=' "; echo $row['numcuent']; echo " '</td>";
					echo "<td> <input type='text'  name= 'car' value=' "; echo $row['carg']; 	 echo " '</td>";
					echo "<td> <input type='text' name= 'sala' value=' "; echo $row['salario'];	 echo " '</td>";
					echo "</tr>";
				}*/

			?>
							<CENTER><tr >
					<td>Nombre:</td>
					<td><input  type= "text" size= 15 require value=" <?php echo $row['nombre'];?> " name="nomb"></td></tr>
					<tr >
					<td>Apellidos:</td>
					<td><input type="text" class="table__item" value="<?php echo $row["apelli"];?>" name="apel"></td></tr>
					
					<input  type= "hidden" size= 15 require  value=" <?php echo $row['ced'];?> " 
					name="cedula">

					<tr>
					<td>Nro de Cuenta:</td>
					<td><input type="text" class="table__item" value="<?php echo $row["numcuent"];?>" name="ncuent"></td></tr>
					<tr>
					<td>Cargo:</td>
					<td><input type="text" class="table__item" value="<?php echo $row["carg"];?>"  name="car"></td></tr>
					<tr><td>Salario:</td>
					<td><input type="text" class="table__item" value="<?php echo $row["salario"];?>" name="sala"></td></tr>
					
					</tr>	
					</CENTER>
							<?php } 

							?>
		</table>
				<input type="submit" value="GUARDAR">
		</CENTER>
	
	</form>
	</div>
	</body>
</html>