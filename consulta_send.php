<!DOCTYPE HTML>
<html manifest="cache.manifest">
<head>
<meta charset="utf-8">
<title>Andrés Perret - Página Oficial</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="images/icono.ico" rel="icon" type="image/x-icon" />
<link href="images/icono.ico" rel="shortcut icon" type="image/x-icon" />
<script src="js/jquery-1.10.2.js"></script>
<!-- Google Analytics Script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-44332514-1', 'andresperret.com.ar');
  ga('send', 'pageview');
</script>
</head>
<body>
	<div id="header"></div>
    <div id="menu">
    	<ul>
        	<a href="index.html"><li class="noti"></li></a>
           	<a href="biografia.html"><li class="biog"></li></a>
            <a href="diasporas.html"><li class="diaspo"></li></a>
            <a href="discografia.html" ><li class="dsolista"></li></a>
            <a href="contacto.html"><li class="contac"></li></a>
		</ul>
    </div>
	<div id="main">
    	<div id="formulario">
			<?php
			$nombre=$_POST["name"];
			$email=$_POST["mail"];
			$consulta=$_POST["consulta"];
		
			$destinatario="andres_perret@hotmail.com"; //destinatario
			$asunto="Email enviado desde mi sitio";
			$mensaje="Nombre: $nombre
			Email: $email
			Consulta: $consulta";
			
			mail($destinatario,$asunto,$mensaje); //enviar mail
			echo("Gracias $nombre por contactarse, estaré respondiendo a la brevedad");		
			?>
        </div>
	</div>
	<div id="footer">
        <!--<div id="footer3"><a href="https://www.youtube.com/channel/UCmqt52F_9jM7PXCYhwJJ8fQ/videos">Clips</a></div>
        <div id="footer4"><a href="https://www.youtube.com/watch?v=U-WpP-e_2QQ&list=UUBLL5YsycQM1Sfr6Odeyg9w">Inéditos</a></div>
        <div id="footer5"><a href="https://www.youtube.com/channel/UCScIYJs2enxU_yIQ06BOGVw/videos">Vivo</a></div>
	    <a href="https://www.youtube.com/channel/UCmqt52F_9jM7PXCYhwJJ8fQ/videos"><img src="images/youtube.png" alt="Youtube" name="youtube" width="58" height="55" border="0" onmouseover="this.src='images/youtube2.png'" onmouseout="this.src=' images/youtube.png'" id="youtube" /></a>-->
    	<a href="https://www.facebook.com/andresperretmusico" target="_blank"><img src="images/facebook.png" alt="Facebook" name="facebook" width="58" height="55" border="0" onmouseover="this.src='images/facebook2.png'" onmouseout="this.src=' images/facebook.png'" id="facebook" /></a>
    	<!--<a href="https://www.youtube.com/watch?v=U-WpP-e_2QQ&list=UUBLL5YsycQM1Sfr6Odeyg9w"><img src="images/youtubelv.png" alt="Youtube Live" name="youtubelv" width="58" height="55" border="0" onmouseover="this.src='images/youtubelv2.png'" onmouseout="this.src=' images/youtubelv.png'" id="youtubelv" /></a>-->
      	<a href="https://twitter.com/Andres_Perret" target="_blank"><img src="images/twitterbn.png" alt="Twitter" name="Twitter" width="52" height="50" border="0" onmouseover="this.src='images/twitter.png'" onmouseout="this.src=' images/twitterbn.png'" id="twitter" /></a>
        <!--<a href="https://www.youtube.com/channel/UCScIYJs2enxU_yIQ06BOGVw/videos"><img src="images/youtubelv.png" alt="Youtube Live" name="youtubelv" width="58" height="55" border="0" onmouseover="this.src='images/youtubelv2.png'" onmouseout="this.src=' images/youtubelv.png'" id="youtubelv" /></a>-->
    </div>
</body>
</html>
