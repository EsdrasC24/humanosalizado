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
      <a href="indexx.php" class="but"  title="">inicio</a>
      <a href="registrar.php" title="">registrar</a>
      <a href="constancia.php" class="but"  title="">Const. de Trabajo</a>
      <a href="vacasionesyreposos.php"   title="">vacasiones</a>
      <a href="permisos.php"  class="but" title="">permisos</a>
      <a href="nomina.php" title="">nomina</a> 

       </div>

</div>
    

<!-- header ends -->


        <!-- content begins -->
                <div class="cont_top"></div>
       			<div id="content">
                      
                        <div style="clear: both; height: 400px">
                            
                              
                            <div>
                                 
                          <div class="text_ind1">
                              <center>

<form action="registrobd.php" method="POST">

<table>
<div> <br><center>  <h1>INFORMACION DE REGISTRO
</h1><br> </center> </div>
  <tr>
    <td>Nombres:</td>
    <td><input type="text"  required name="Nomb" size="30"></td>
    
  </tr>

  <tr>
    <td>Apellidos:</td>
    <td><input type="text" name="Apell" size="30" required><td>
    
  </tr>

  <tr>
    <td>Cedula:</td>
    <td><input type="text" name="ci" required size="30" ></td>
    
  </tr>



  <tr>
    <td>cargo:</td>
    <td><input type="text" name="me" size="30" required></td>
    
  </tr>

</tr>

  <tr>
    <td>salario:</td>
    <td><input type="text" name="ne" size="30" required></td>
    
  </tr>

</table>
<input type=submit name=enviar value=enviar>
</form>
 
                             </div>
							           
                  </div>
                      <div style="clear: both; height: 10px"></div>
            
                     </div>
            
   </div>

</div>
</div>
</body>
</html>
