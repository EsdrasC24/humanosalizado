

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

<div id="content">
    

<!-- header ends -->


        <!-- content begins -->
                <div class="cont_top"></div>
              <div id="content">

                  <div style="clear: both; height: 400px">
                      

                        <div>

                        
                         <form action="MOD.NOMINA - copia.php" method="POST">
                            <center>
<table>

<div> <br><center>  <h1>NOMINA DE EMPLEADO
</h1><br> </center> </div>
  <td>
    <thead>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cedula</th>
      <th>Numero de cuenta</th>
      <th>Cargo</th>
      <th>Salario</th>
      <th></th>
    
      </thead>
  </td>
<?php
  

      INCLUDE "consult.php";
      $cat="alto nivel";
$sql = "SELECT * FROM `rrhh`.`registro` where `registro`.`carg` = 'alto nivel'";
      $result=mysql_query($sql)or die ("no ejecutado");

      //if ($result =$_POST[ci]) {
      while($filas=mysql_fetch_assoc($result))
      {
        "<tr>";
          ECHO "<td>"; ECHO $filas['nombre']; ECHO" </td>";
          echo "<td>"; ECHO $filas['apelli']; ECHO "</td>";
          echo "<td>"; ECHO $filas['ced']; ECHO "</td>";
          echo "<td>"; ECHO $filas['numcuent']; ECHO "</td>";
          echo "<td>"; ECHO $filas['carg']; ECHO "</td>";
          echo "<td>"; ECHO $filas['salario'];ECHO "</td>";
          
echo '<input type="hidden" name="ci" value= $filas[ced]>
     
    <td><input type="text" name="he" size="3"></td>
    
    <td><input type="text" name="nod" size="3"></td>
    
    <td><input type="text" name="diaf" size="3"></td>
    
    <td><input type="text" name="be" size="3"></td>
    
    <td><input type="text" name="dad" size="3"></td>';
echo "<td> <a href='MOD.NOMINA - copia.php?ci=".$filas["ced"]."'> <button type='button' > Modificar </button></a></td>";
          echo "</tr>";
        }
              ?>



<!-- header ends -->



<!-- header ends -->
</table> 
<input type=submit name=buscar value=BUSCAR>
</form> 



        <!-- content begins -->
                
            
                      
                                              
                            <div>
                                 
                          <div class="text_ind1">
                              <center>


                         
                  </div>
                      
            
                     </div>
            
   </div>

</div>
</div>
</body>
</html>