<!DOCTYPE html>
<html >
  <head>
    <title>vacasiones y reposos</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Begin JavaScript -->
    <script type="text/javascript" src="assets/js/lib/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery.custom.js"></script>
    <script type="text/javascript" src="assets/js/lib/compressed.js"></script>
  </head>
  <body>

    <script type="text/javascript"> 
      function validaNumericos(event) { return (event.charCode >= 48 && event.charCode <= 57); } 
    </script>

    <div id="bg_img">
      <div id="main">
        <div id="main_img">
          <!-- header begins -->

            <div id="buttons">
              <a href="index.php" class="but"  title="">Inicio</a>
              <a href="registrar.php" title="">Registrar</a>
              <a href="constancia.php" class="but"  title="">Const. de Trabajo</a>
              <a href="vacasionesyreposos.php"   title="">Vacasiones</a>
              <a href="permisos.php"  class="but" title="">Permisos</a>
              <a href="nomina.php" title="">Nomina</a> 
            </div>

       </div>
       <!-- content begins -->
       <div class="cont_top"></div>
         <div id="content">
           <ul id="slideshow">
		<li>
			<h3></h3>
			<span>images/img31.jpg</span>
			<p></p>
			<a href="#"><img src="images/img32.jpg" alt="Some Image Description Here" /></a>
		</li>
		<li>
			<h3></h3>
			<span>images/img_big2.jpg</span>
			<p></p>
			<a href="#"><img src="images/img33.jpg" alt="Some Image Description Here"  />
		</li>
		<li>
			<h3></h3>
			<span>images/img_big3.jpg</span>
			<p></p>
			<a href="#"><img src="images/img34.jpg" alt="Red Coral" /></a>
		</li>
		<li>
			<h3></h3>
			<span>images/img_big4.jpg</span>
			<p></p>
			<a href="#"><img src="images/img35.jpg" alt="Coral Reef" /></a>
		</li>
		<li>
			<h3></h3>
			<span>images/img_big5.jpg</span>
			<p></p>
			<img src="images/img36.jpg" alt="Blue Fish" />
		</li>
		<li>
			<h3></h3>
			<span>images/img_big6.jpg</span>
			<p></p>
			<a href="#"><img src="images/img37.jpg" alt="Yellow Fish" /></a>
		</li>		
	</ul>

	<div id="wrapper">
		<div id="fullsize">
			<div id="imgprev" class="imgnav" title="Previous Image"></div>
			<div id="imglink"></div>
			<div id="imgnext" class="imgnav" title="Next Image"></div>
			<div id="image"></div>
			<div id="information">
				<h3></h3>
				<p></p>
			</div>
		</div>
		<div id="thumbnails">
			<div id="slideleft" title="Slide Left"></div>
			<div id="slidearea">
				<div id="slider"></div>
			</div>
			<div id="slideright" title="Slide Right"></div>
		</div>
	</div>
        <script type="text/javascript">
	
        $('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
        </script>
	<br><br>

        <div class="box_home_all">
          <div class="box_home">
            <h1 class="tit_img1">REQUISITOS</h1>
            <div style="padding-left:7px;">
              <span class="span_cont">Nombres, Apellidos, Cedula, RIJ, Numero de Cuenta, Grado de Intruccion, Fecha de Nacimiento, Fecha de Ingreso, Cargo, Salario, Correo, Telefono<br />
            </div> <br />
        </div>
        <div style="width:10px; float:left; height:15px;"></div>
          <div class="box_home">
              <h1 class="tit_img2">MISION </h1>
              <div style="padding-left:7px;">
                <span class="span_cont">
                            La Oficina de Recursos Humanos se propone atraer el mejor recurso humano, aplicando el principio de mérito como base principal del reclutamiento y acciones de personal. Contribuir al desarrollo de nuestros empleados para estimular el deseo en ellos de mantener un mejoramiento continuo, que les permita cumplir a cabalidad con las metas y objetivos de la Institución, logrando en ellos un alto grado de eficiencia y un gran sentido de pertenencia
                </span><br />
              </div> <br />
          </div>
          <div style="width:10px; float:left;  height:15px;"></div>
            <div class="box_home">
              <h1 class="tit_img3">VISION</h1>
              <div style="padding-left:7px;">
                <span class="span_cont">Nuestra oficina aspira a ser parte integral del asesoramiento confiable de la alta gerencia y del logro de los objetivos de la Institución.  Además desea ser un ambiente de trabajo positivo, en el que se reconozca la diversidad y se desarrolle al máximo el potencial de nuestros empleados. <br />
              </div> <br />
            </div>          	
          </div>		
  </body>
</html>
