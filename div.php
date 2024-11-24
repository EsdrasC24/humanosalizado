

<?php
ob_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>pdf</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- Begin JavaScript -->
<script type="text/javascript" src="lib/jquery.1.4.2.js"></script>
  <script type="text/javascript" src="lib/jquery.custom.js"></script>
<script type="text/javascript" src="lib/compressed.js"></script>

</head>
<body>



<div> <br><center>  <h1>REGISTRO DE PERSONAL
</h1><br> </center> </div>
  <table>
    <thead>
			<th id=th>Nombre</th>
			<th id=th>Apellido</th>
			<th id=th>Cedula</th>
			<th id=th>Numero de cuenta</th>
			<th id=th>Cargo</th>
			<th id=th>Salario Basico</th>
			<th id=th>H.extra</th>
			<th id=th>Nobturnidad</th>
			<th id=th>D.feriado</th>
			<th id=th>B.especial</th>
			<th id=th>Salario Neto</th>
			<th></th>
		
		

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
					echo "<td id=td>"; ECHO $a=($filas['salario']/30)/8*$filas['he'];ECHO "</td>";
					echo "<td id=td>"; ECHO $b=($filas['salario']/30)*($filas['nod']*80)/100;ECHO "</td>";
					echo "<td id=td>"; ECHO $c=($filas['salario']/30)/2*$filas['diaf'];ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['be'];ECHO "</td>";
					echo "<td id=td>"; ECHO $filas['dad']=$a+$b+$c;ECHO "</td>";
					
					echo "</tr>";

				}

					
			?>
</table>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nombre </th>
      <th scope="col">Apellido</th>
      <th scope="col">C.I</th>
      <th scope="col">N.Cuenta</th>
      <th scope="col">Cargo</th>
      <th scope="col">Salario</th>
      <th scope="col">H.extra</th>
      <th scope="col">Nocturnidad</th>
      <th scope="col">D.feriado</th>
      <th scope="col">B.espesial</th>
      <th scope="col">salario neto</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     <?php <td>$filas['nombre'];</td>?>
     <?php <td>Otto</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>
     <?php <td>@mdo</td>?>

    
    </tr>
  </tbody>
</table>
</div>

</div>
</div>


</body>
</html>

<?php
	
$html=ob_get_clean();
echo $html;

require_once 'dompdf-master/include/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$option = $dompdf->getOptions();

$option->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($option)

?>
