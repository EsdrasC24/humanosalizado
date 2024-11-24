<?php
 				$servidor ="localhost";
				$nombredeusuario ="root";
				$password ="";
				$db ="RRHH";

				$conex = mysql_connect ($servidor, $nombredeusuario, $password);
				$sdb = mysql_select_db( $db, $conex );

  	//$db = mysqli_select_db( $conection, $db);
	//$conect = mysql_connect("localhost", "root", "");
	//mysql_select_db("dbprotocolo", $conect);
	//mysql_query("SET NAMES 'utf8'");

 ?>


