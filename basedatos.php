




<?php

  $servidor ="localhost";
  $nombrusu = "root";
  $contas = "";
  $bd = "RRHH";

  $conex = new mysqli ($servidor, $nombrusu, "");

    $sql = "CREATE DATABASE RRHH;";
    $conex->query($sql);
    $bd = mysqli_select_db( $conex, $bd); 

    
    $sqlt = "CREATE table RRHH.registro (nombre VARCHAR(15) NOT NULL, apelli VARCHAR(15) NOT NULL, ced INT(9)NOT NULL PRIMARY KEY, rif VARCHAR(11) NOT NULL, numcuent INT(20) NOT NULL, gintru VARCHAR(9) NOT NULL, fechnac INT (8) NOT NULL, feching INT (8) NOT NULL, carg VARCHAR(16) NOT NULL, salario INT(8) NOT NULL);";
    
    $sql = "ALTER TABLE `RRHH`.`registro` CHANGE `fechnac` `fechnac` VARCHAR(11) NOT NULL, CHANGE `feching` `feching` VARCHAR(11) NOT NULL";

    $conex->query($sql, $bd);


    $conex->query($sqlt, $bd);

?>