<?php 
            INCLUDE "consult.php";
			$mostrar="SELECT * FROM RRHH.registro";
			$result=mysql_query($mostrar);
			while($filas=mysql_fetch_assoc($result)) {

$filas['nombre'];
$filas['apelli'];
$filas['ced'];
$filas['numcuent'];
$filas['carg'];
$filas['salario'];

$nombre = $filas['nombre'];
$apellido = $filas['apelli'];
$cedula = $filas['ced'];
$NC = $filas['numcuent'];
$cargo = $filas['carg'];
$salario = $filas['salario'];

$file= fopen('C:\Users\Tomas\Desktop\tct\nominas.txt','a+');

$tex = $nombre.

"<tr>";
fwrite($file, "\n");
"<td>";fwrite($file, $nombre);"</td>";
"<td>";fwrite($file, $apellido);"</td>";
"<td>";fwrite($file, $cedula);"</td>";
"<td>";fwrite($file, $NC);"</td>";
"<td>";fwrite($file, $cargo);"</td>";
"<td>";fwrite($file, $salario);"</td>";

 

			}


echo "SU ARCHIVO SE CREO EXITOSAMENTE";

fclose($file);


?>