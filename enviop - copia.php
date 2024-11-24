<?php
$idconnect=mysql_connect("localhost","root","");
if (!$idconnect){
	die("No se Puede Conectar a".mysql_error());
}
$sele=mysql_select_db("rrhh",$idconnect);
if (!$sele){
	die("No se Pudo Seleccionar la base de datos".mysql_error());
}




$dia=date('d');
$mes=date('m');
$anio=date('Y');
$fec= "".$dia."-".$mes."-".$anio;
$meses[0]="ENERO";
$meses[1]="FEBRERO";
$meses[2]="MARZO";
$meses[3]="ABRIL";
$meses[4]="MAYO";
$meses[5]="JUNIO";
$meses[6]="JULIO";
$meses[7]="AGOSTO";
$meses[8]="SEPTIEMBRE";
$meses[9]="OCTUBRE";
$meses[10]="NOVIEMBRE";
$meses[11]="DICIEMBRE";
//INCLUDE "consult.php";
$mostrar="SELECT * FROM RRHH.registro WHERE ced= $_POST[ci]; ";
      $result=mysql_query($mostrar);

      
      $filas=mysql_fetch_assoc($result) OR die("<script>alert ('NO SE ENCUENTRA REGISTRADO'); window.location='Constancia.php'</script>;");
$content_aux="<html>
<head>
	<style type=text/css>
		div { margin: 1em 2em 3em 3em ;} 



	</style>

</head>

<body><br><br><br><br>
<div align='center'><b>República Bolivariana de Venezuela <br>
Estado Bolivariano de Guarico<br>
Alcaldia del Municipio Ortiz<br></b>
</div><br><br><br>
      <br> <div align='center'><h1>CONSTANCIA DE TRABAJO</h1></div>
      <div align='JUSTIFY'> 
     <table align='center' border='0' style='line-height: 1.5;''>
     <tr><td style='width:650px;'>
 &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Quien suscribe, Lcda. Beatriz Luquez, Directora de Recursos Humanos  de la Alcaldía Bolivariana del Municipio Ortiz, 
 Estado Guárico, hace constar por medio de la presente que  el Ciudadano<b>" .$filas['nombre']. "" .$filas['apelli']. "</b>, titular de la C.I. Nº <b>" .$filas['ced']. "</b>, 
 presto sus servicios  desde el <b>" .$filas['feching']. "</b> hasta <b>".$fec."</b>, ejerciendo el cargo de: <b>" .$filas['carg']. "</b>,
 devengando un Sueldo Mensual de: <b>" .$filas['salario']. "</b> BOLIVARES FUERTES <br><br><br><br>
 &nbsp;&nbsp;Constancia que se expide en Ortiz, a petición de la parte interesada, a los 09 días del mes de Diciembre de 2.021.<br><br><br><br><br>
</td>
</tr><br><br><br><br><br><br>
<tr><br><br><br><br>
<td style='width:650px;'><div align='center'><b> __________________________<br>Lcda Beatriz Luquez<br>
Directora de Recursos Humanos<br>
Según Resolución Nº 073-2021<br>
Gaceta Municipal Nº 1532 de fecha 07-12-2021</b>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<page backtop='20mm' backbottom='20mm' backleft='20mm' backright='20mm'>
	<page_header>

<img src='Sin título.png' width=200 height=210>
";
/*do
{
$content_aux=$content_aux."<table border=0 cellspacing=0 width=400>
<tr>
<td width=100 align=left valign=top>".($Result1['nombre'])."</td>
<td width=100 align=center valign=top> ".$Result1['apelli']."</td>
<td width=100 align=center valign=top> ".$Result1['ced']."</td>

<td width=100 align=center valign=top> ".$Result1['carg']."</td>
<td width=120 align=center valign=top> ".$Result1['salario']."</td>
</tr> </table>";
}
while($Result1=mysql_fetch_array($mostrar));*/
    

    require_once('html2pdf/html2pdf.class.php');

$html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 3);
 $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->WriteHTML($content_aux);
    $html2pdf->Output('Constanciatrabajo'  .$filas['carg'].'.pdf');


?>
