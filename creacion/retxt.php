<?php 


$file= fopen('nominas.txt','a+');

$nombre = $_REQUEST['ntx'];
$apellido = $_REQUEST['atx'];
$cedula = $_REQUEST['ctx'];
$NC = $_REQUEST['ntx'];
$cargo = $_REQUEST['catx'];
$salario = $_REQUEST['stx'];

fwrite($file, $nombre);
fwrite($file, $apellido);
fwrite($file, $cedula);
fwrite($file, $NC);
fwrite($file, $cargo);
fwrite($file, $salario);

echo "SU ARCHIVO SE CREO EXITOSAMENTE";

fclose($file);

?>