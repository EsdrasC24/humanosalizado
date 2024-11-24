




<?php
  $servidor ="localhost";
  $nombrusu = "root";
  $contas = "";
  $bd = "RRH";

  $conex = new mysqli ($servidor, $nombrusu, "");

    $sql = "CREATE DATABASE RRH;";
    $conex->query($sql);
    $bd = mysqli_select_db( $conex, $bd); 


    
    $sqlt = "CREATE table RRH.registro (nombre VARCHAR(15) NOT NULL, apelli VARCHAR(15) NOT NULL, ced VARCHAR(9)NOT NULL PRIMARY KEY, rif VARCHAR(11) NOT NULL, numcuent VARCHAR(20) NOT NULL, gintru VARCHAR(9) NOT NULL, fechnac date (8) NOT NULL, feching date NOT NULL, carg VARCHAR(16) NOT NULL, salario VARCHAR(8) NOT NULL);";
    

    $conex->query($sqlt, $bd);

?>