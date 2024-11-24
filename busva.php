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
                         <form action="busva.php" method="POST">
                            <center>
<table>


<?php
  

      INCLUDE "consult.php";
      //$cap = $_POST[ci];
      $mostrar="SELECT * FROM RRHH.registro WHERE ced= $_POST[ci]; ";
      $result=mysql_query($mostrar);

      //if ($result =$_POST[ci]) {
      $filas=mysql_fetch_assoc($result) OR die("<script>alert ('NO SE ENCUENTRA REGISTRADO'); window.location='registrar.php'</script>;") ;
        
          "<tr>";
          ECHO "<td>"; ECHO $filas['nombre']; ECHO" </td>";
          echo "<td>"; ECHO $filas['apelli']; ECHO "</td>";
          echo "<td>"; ECHO $filas['ced']; ECHO "</td>";
          
          echo "<td>"; ECHO $filas['numcuent']; ECHO "</td>";
          
          
          echo "<td>"; ECHO $filas['carg']; ECHO "</td>";
          echo "<td>"; ECHO $filas['salario'];ECHO "</td>";

        //}

      ?>

 <br><center>  <h1>BUSQUEDA PERSONAL
</h1><br> </center> </div>
  <tr> <br>

    <td>Cedula:</td>
    <td><input type="text"  required name="ci" size="30" value="<?php echo  $filas['ced']; ?>"></td>
<!-- header ends -->



</table> 
<input type=submit name=buscar value=BUSCAR>
</center>
</form> 

<center> <h3>
<table>
 
<tr><td>NOMBRE :<?php echo  $filas['nombre']; ?></td></tr>
<tr><td>APELLIDO:<?php echo $filas['apelli']; ?></td></tr>
  <tr><td>CARGO:<?php echo  $filas['carg']; ?></td></tr>
    <tr><td>SALARIO:<?php echo  $filas['salario']; ?></td></tr>





</table>
<!-- header ends -->
</h3></center>

        <!-- content begins -->
                
            
                      
                       <center>

                          <form action="busv.php" method="POST"> 
  <table> <div> <br><center>  <h1>AGEGAR INICIO Y CULMINACION DE LA VACASION 
  </h1><br> </center> </div> 
  <tr> <td>fecha de inicio:</td> <td><input type="date" name="fechfin" required size="30" ></td> 
  </tr> <tr> <td>fecha de cubminacion:</td> <td><input type="date" name="fechini" required size="30" ></td> </tr> <!-- header ends --> 
</table> <input type=submit name=AGREGAR value=AGREGAR> </form>
                            
  </center>                            
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
