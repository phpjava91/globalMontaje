<!DOCTYPE html>
<html ng-app="services">
<head>
	<meta charset="UTF-8">
	<title>GLOBAL MONTAJE-SERVCIOS S.A.C</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styleSlide.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reticula.css">
</head>
<body>

    
	<header class="header">
		<figure class="header-figure">
			<img src="img/logo.png" alt="">
		</figure>
 
        <nav class="header-nav">
        	<ul id="menu" class="nav-list">
        		<li><a href="#/" id="inicio">Inicio</a></li>
        		<li><a href="#"  id="empresa">Empresa</a></li>
        		<li><a href="#" id="servicios">Servicios</a>
                <li><a href="#Proyectos" id="proyectos">ProyectosEjecutados</a></li>
        		<li><a href="#Contacto" id="contacto">Contactanos</a></li>
                <li><a href="https://login.live.com" target="_blank" id="webmail">Webmail</li>
                <li>
                    <img  id="bandera"/>
                    <select id="pais">
                                <option class="option-ES" value="" disabled>Idioma</option>
                                <option  value="ES">ES</option>
                                <option  value="EN">EN</option>
                    </select>
                </li>
        	</ul>
        </nav>
	</header>

  
  <div class="listas" id="listas">
      <ul class="lista1" id="lista1">
                     <li class="item"><a href="#Ductos">Ductos de Hidrocarburos</a></li>
                     <li class="item"><a href="#Tanques">Tanques de Almacenamiento</a></li>
                     <li class="item"><a href="#Mecanica">Metal Mecanica</a></li>
                     <li class="item"><a href="#Civiles">Obras Civiles</a></li>
      </ul>
       <ul class="lista2" id="lista2">
                     <li class="item"><a href="#Historia">Historia</a></li>
                     <li class="item"><a href="#Vision">Vision</a></li>
                     <li class="item"><a href="#Mision">Mision</a></li>
                     <li class="item"><a href="#Calidad">Politica Calidad Ambiental y Seguridad</a></li>
                     <li class="item"><a href="#Ambiental">Politica Ambiental</a></li>
                     <li class="item"><a href="#Capacitacion">Politica Capacitacion</a></li>
                     <li class="item"><a href="#Homologaciones">Homologaciones</a></li>
      </ul>
  </div>

 <section>
      <div ng-view></div>
  </section>    
    

<footer class="footer">
        	<p>Copyright-2016</p>
        	<p class="footer-ubication">
        		Zona industrial S/N Talara Alta Frente a la Villa Petrex,
        		 <strong>Telefonos:</strong> 044-206199/Nextel 413*9360
        		073-385007/Nextel 838*6324
        		Talara - Piura, peru. 
        	</p>
</footer>

    <script src="js/lib/jquery.js"></script>
    <script src="js/lib/angular.min.js"></script>
    <script src="js/lib/angular-route.min.js"></script>
    <script src="js/scriptSlide.js"></script>
    <script src="js/app.js"></script>
    <script src="js/helpers.js"></script>
    <script>
          $(function() {
            $(".rslides").responsiveSlides();
          });
        inicio();  
   </script>
</body>
</html>