  var app = angular.module('services',[
    'ngRoute',
   ]); 


   app.config(['$routeProvider', function ($routeProvider) {

    $routeProvider
      .when('/',{
      	 templateUrl:'views/Main.php',   
      })
      .when('/Historia',{
        templateUrl: 'views/Historia.php',
      })
      .when('/Ductos',{
        templateUrl:'views/Ductos.php',
      })
      .when('/Tanques',{
         templateUrl:'views/Tanques.php',
      })
      .when('/Mecanica',{
         templateUrl:'views/Mecanica.php',
      })
      .when('/Civiles',{
         templateUrl:'views/Civiles.php',
      })
      .when('/panelProyectos',{
         templateUrl:'views/panelProyectos.php', 
      })
      .when('/Proyectos',{
         templateUrl:'views/Proyectos.php' 
      })
      .when('/Contacto',{
         templateUrl:'views/Contacto.php'
      })
      .when('/Mision',{
         templateUrl:'views/Mision.php'
      })
      .when('/Vision',{
        templateUrl:'views/Vision.php'
      })
      .when('/Calidad',{
        templateUrl:'views/Calidad.php'
      })
      .when('/Ambiental',{
        templateUrl:'views/Ambiental.php'
      })
      .when('/Capacitacion',{
        templateUrl:'views/Capacitacion.php'
      })
      .when('/Homologaciones',{
         templateUrl:'views/Homologaciones.php'
      })
  }]);