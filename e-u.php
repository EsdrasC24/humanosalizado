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
$sql=sprintf("SELECT * FROM RRHH.registro ");
$rs=mysql_query($sql,$idconnect) or die(mysql_error());
      //$filas=mysql_query($mostrar);
if($Result1= mysql_fetch_assoc($rs))
{

                
$content_aux="
<!DOCTYPE html>
<html >
<head>

    <style type=text/css>
        div { margin: 1em 2em 3em 3em ;} 
#j {
   width: 65px;
   font-size: 12px;
   word-wrap: break-word;
}
    </style>
</head>
<body>
<br><br><br><br>
<div align='center'><b>Republica Bolivariana de Venezuela <br>
Estado Bolivariano de Guarico<br>
Alcaldia del Municipio Ortiz<br></b>
</div>

<br>
        <div align='center'>
            <h1>REPORTE DE NOMINA</h1>
        </div>
            <div align='center'> 
   
 <table border=2 style='margin-right: 100px; margin-left: 100px; line-height: 1.5;' >
  
    <tr>
            <td id='j'>Nombre</td>
            <td id='j'>Apellido</td>
            <td id='j'>Cedula</td>
            <td id='j'>Numero de <BR>cuenta</td>
            <td id='j'>Cargo</td>
            <td id='j'>Salario <BR>Basico</td>
            <td id='j'>Horas <BR>Extra</td>
            <td id='j'>Nobturnidad</td>
            <td id='j'>Dias <BR>feriado</td>
            <td id='j'>Bono <BR>Especial</td>
            <td id='j'>Salario Neto</td>
            
        <td id='j'>(Cestatike)</td> 
        

            </tr>
</table>
            <br><br><br><br><br><br><br><br><br>";
               
do
{

$content_aux=$content_aux."<table>
               
                   <tr>


                    <td id=td>  ".$Result1['nombre']."     </td>
                    <td id=td>  ".$Result1['apelli']."    </td>
                    <td id=td>  ".$Result1['ced']."       </td>
                    <td id=td>  ".$Result1['numcuent']."  </td>
                    <td id=td>  ".$Result1['carg']."     </td>
                    <td id=td>  ".$Result1['salario']."   </td>

                    <td id=td>  ".$a=number_format(($Result1['salario']/30)/8*$Result1['he'],2)."       </td>
                    <td id=td>  ".$b=number_format($Result1['salario']/30*$$Result1['nod']*80/100,2)."   </td>
                    <td id=td>  ".$c=number_format(($Result1['salario']/30)/2*$Result1['diaf'],2)."     </td>
                    <td id=td>  ".$u=number_format($Result1['be'],2)."                                </td>
                    <td id=td>  ".$Result1['dad']."      </td>
                     
                   
                
                  </tr>";


while($Result1=mysql_fetch_array($rs));
    require_once('html2pdf/html2pdf.class.php');
    

$content = "<page backtop='20mm' backbottom='20mm' backleft='20mm' backright='20mm'>
    <page_header>

<img src='images/imagen2.jpg' width=100 height=110>
<p align=center> <b>PIROTECNICA BIANGELLI CA, RIF: J-30782792-0 NIT 0184204304 <H5>Oficina Administrativa: Av Romullo Gallegos,<br>Edif Bajo Grande, Piso 10,Ofic.103<br>El Marques, Caracas</h5> </b></p>
</page_header>

      <page_footer> 
           <p align=center> <b>PIROTECNICA, Ortiz, Municipio Ortiz, del Estado Guarico ".$fec." </b></p>
      </page_footer><br><br><br><br><br><br><br><br><br><p align=center>
      <b>REPORTE DE NOMINA</b></p><br><br>

<table border=0 cellspacing=0 bgcolor=beige>
<br>
<tr><td valign=top>".$content_aux."</td></tr>
</table>
<br><br><br><br><br>
<table border=0 cellspacing=0>

<tr>
<br><br><br><br>
      <td width=100 align=center valign=top>&nbsp;</td>
<td width=400 align=center valign=top><br><br><br></td>

      <td colspan=2 align=left valign=top >&nbsp;</td>
</tr>
<tr>
<br><br>
      <td width=100 align=center valign=top>&nbsp;</td>
      
</tr>
</page>

            
 </table>
 </body>
</html>";



$html2pdf = new HTML2PDF('p', 'A4', 'fr', FALSE, 'UTF-8', 3);
 $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('Constanciatrabajo'  .$filas['carg'].'.pdf');
}

?>