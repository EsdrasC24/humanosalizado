
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
<a href='nomina.php'> <button type='button' > atras </button></a></div> 

        <!-- content begins -->
                <div class="cont_top"></div>
              <div id="content">

                  <div style="clear: both; height: 400px">
                      
                      
<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="rrhh";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
  die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS //////
INCLUDE "consult.php";
      

$alumnos="SELECT * FROM `rrhh`.`registro` where `registro`.`carg` = 'temporales'";
$resAlumnos=$conexion->query($alumnos);
?>




    <section>
      <form method="post">
      <table class="table">

        <tr>
    <th>Nombre</th>
    <th>Cedula</th>
    <th>H.Extras</th>
    <th>Nodturnidad</th>
    <th>D.Feriado</th>
    <th>B.especial</th>
    <th>H.Extra</th>
        </tr>

        <?php

        while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

        {

          echo'<tr>

            <td hidden><input name="idalu[]" value="'.$registroAlumnos['ced'].'" /></td>
           <td> '.$registroAlumnos['nombre'].'</td>"
           <td> '.$registroAlumnos['ced'].'</td>"
             

             <td><input size=2 name="he['.$registroAlumnos['ced'].']" value="'.$registroAlumnos['he'].'" /></td>
             <td><input size=2 name="nod['.$registroAlumnos['ced'].']" value="'.$registroAlumnos['nod'].'" /></td>
             <td><input size=2 name="diaf['.$registroAlumnos['ced'].']" value="'.$registroAlumnos['diaf'].'" /></td>
             <td><input size=2name="be['.$registroAlumnos['ced'].']" value="'.$registroAlumnos['be'].'"/></td>
             <td><input size=2 name="dad['.$registroAlumnos['ced'].']" value="'.$registroAlumnos['dad'].'"/></td>
             </tr>';
        }


        ?>

      </table>
      <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
    </form>

    <?php

      if(isset($_POST['actualizar']))
      {
        foreach ($_POST['idalu'] as $ids) 
        {
         
          $edit=mysqli_real_escape_string($conexion, $_POST['he'][$ids]);
          $editNom=mysqli_real_escape_string($conexion, $_POST['nod'][$ids]);
          $editCarr=mysqli_real_escape_string($conexion, $_POST['diaf'][$ids]);
          $editGru=mysqli_real_escape_string($conexion, $_POST['be'][$ids]);
          $Gru=mysqli_real_escape_string($conexion, $_POST['dad'][$ids]);

          $actualizar=$conexion->query("UPDATE registro SET he='$edit', nod='$editNom', diaf='$editCarr',
                                    be='$editGru',
                                    dad='$Gru' WHERE ced='$ids';");
        }

        if($actualizar==true)
        {
          
          header("location:emple.php");
          }

        else
        {
          echo "NO FUNIONA!";
        }
      }

    ?>



    </section>

    <footer>
    </footer>
  </body>

</html>



