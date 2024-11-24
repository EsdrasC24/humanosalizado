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

<script type="text/javascript"> function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;       
} </script>

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
<div> <br><center>  <h1>REGISTRO DE PERSONAL
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
    <td><input type="text" required onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="ci" required size="30" title="SOLO NUMEROS"> ></td>
    
  </tr>

  <tr>
    <td>RIJ:</td>
    <td><input type="text" name="dir" required cols="23"></td>
  
    
  </tr>

  <tr>
    <td>Numero de Cuenta:</td>
    <td><input type="text" required onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="no" size="30" required title="SOLO NUMEROS"></td>
    
  </tr>

  
  <tr>
    <td>Grado de Intruccion:</td>
    <td><input type="text" name="su" size="30" required></td>
    
  </tr>


  <tr>
    <td>Fecha de Nacimiento:</td>
    <td><input type="date" name="es" size="30" required></td>
    
  </tr>


  <tr>
    <td>Fecha de Ingreso:</td>
    <td><input type="date" name="oe" size="30" required></td>
    
  </tr>
  <tr>
    <td>Cargo:</td>
    <td><select name=me>
      <option value="alto nivel">Alto Nivel </option>
      <option value="director en jefe">Director en Jefe </option>
      <option value="empleado">Empleado </option>
      <option value="obreros">Obreros </option>
      <option value="jubilados">Jubilados </option>
      <option value="temporales">Temporales </option>
    </select></td>
  </tr>

</tr>

  <tr>
    <td><h4>Salario:</h4></td>
    <td><input type="text" name="ne" size="30" required></td>
    
  </tr>
  <tr>
    <td>Correo:</td>
    <td><input type="email" name="correo" size="30" required ><td>
    
  </tr>
  <tr>
    <td>Telefono:</td>
    <td><input type="text" name="telf" size="30" required><td>
    
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
