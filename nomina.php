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

</head>
<body>

<style type="text/css">
 
#j {
   width: 55px;
   font-size: 12px;
   word-wrap: break-word;
}
</style>
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
      <a href="constancia.php" class="but"  title="">Const. de Trabajo</a>
      <a href="vacasionesyreposos.php"   title="">Vacasiones</a>
                  

         	<ul class="nav">
         		<li><a href="">Nominas</a>
<ul> <p size=3>
	<li><a href="nomina.php" class="nav">Nomina</a></li>
	<li><a href="alto.php" class="nav">Alto Nivel</a></li>
	<li><a href="drect.php" class="nav">Director en Jefe</a></li>
	<li><a href="emple.php">Empleado</a></li>
	<li><a href="busobre.php">Obreros</a></li>
	<li><a href="jubi.php">Jubilados</a></li>
	<li><a href="temp.php">temporales</a></li>
	<li><a href='reporte.php?ci=".$filas["ced"]."'> Crear PDF </button></a></li>
	</p>
</ul>
</li>

         	</ul>
       

       </div>

</div>
    
	 

<!-- header ends -->


        <!-- content begins -->
                <div class="cont_top"></div>
       			<div id="content">
                          
  
 
                        <div style="clear: both; height: 400px">
                            
                                                   <center>
<table id="table">


<form action="retxt.php" method="POST">
 
 

<div> <br><center>  <h1>REGISTRO DE PERSONAL
</h1><br> </center> </div>
  
    <thead>
			<th id=th>Nombre</th>
			<th id=th>Apellido</th>
			<th id=th>Cedula</th>
			<th id=th><p id="j" >Numero de cuenta</p></th>
			<th id=th><p id="j" >Cargo</p></th>
			<th id=th><p id="j" >Salario Basico</p></p></th>
			<th id=th><p id="j" >Horas Extra</p></th>
			<th id=th>Nobturnidad</th>
			<th id=th><p id="j" >Dias feriado</p></th>
			<th id=th><p id="j" >Bono Especial</p></th>
			<th id=th><p id="j" >Salario Neto</p></th>
			<th></th>
		<th lign=right>(Cestatike):<input type="text" name="cestatike" size="3"></th> 
		

			</thead>
	
<?php
	

			INCLUDE "consult.php";
			$mostrar="SELECT * FROM RRHH.registro";
			$result=mysql_query($mostrar);
			while($filas=mysql_fetch_assoc($result))
				{

				
					"<tr>";


					ECHO "<td id=td>"; ECHO $filas['nombre']; ECHO" </td>";
					echo "<td id=td>"; ECHO $filas['apelli']; ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['ced']; ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['numcuent']; ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['carg']; ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['salario'];ECHO "</td>";

					echo "<td id=td>"; ECHO $a=number_format(($filas['salario']/30)/8*$filas['he'],2) ;ECHO "</td>";
					echo "<td id=td>"; ECHO $b=number_format($filas['salario']/30*$filas['nod']*80/100,2);ECHO "</td>";
					echo "<td id=td>"; ECHO $c=number_format(($filas['salario']/30)/2*$filas['diaf'],2);ECHO "</td>";
					echo "<td id=td>"; ECHO $u=number_format($filas['be'],2);ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['dad']=number_format($a+$b+$c+$u+$filas['salario'],2);ECHO "</td>";
					echo "<td> <a href='MOD.NOMINA.php?ci=".$filas["ced"]."'> <button type='button' > Modificar </button></a></td>";
					echo "<td> <a href='eliminar_nomina.php?ci=".$filas["ced"]."'> <button type='button' class='btn btn= danger'> Eliminar </button></a></td>";

				
					echo "</tr>";

				}

					
			?>
</form> 
 </table>

 
                             </div>
							           
                  </div>
                      <div style="clear: both; height: 10px"></div>
            
                     </div>
            
   </div>

</div>
</div>

</body>
</html>
