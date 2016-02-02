var lista1;
var lista2;
var servicios;
var empresa;
var listas;
var inicio;
var contacto;
var proyectos;
var webmail;
var seleccionado;
var pais;
var bandera;
var menuLista1;
var menuLista2;
var nosotros
var nosotrosTitle;
var serviciosTitle;
var trabajosTitle;




function inicio(){
 // nosotros = $('#nosotros'); 
 // nosotrosTitle =  $('#nosotros-title');
  serviciosTitle = $('#servicios-title');
 // trabajosTitle = $('#trabajos-title');
  listas = $('#listas');
  lista1 = $('#lista1');
  menuLista1 = $('#lista1 .item a');
  lista2 = $('#lista2');
  menuLista2 = $('#lista2 .item a');
  proyectos = $('#proyectos');
  servicios = $('#servicios');
  empresa = $('#empresa');
  inicio = $('#inicio');
  contacto = $('#contacto');
  webmail = $('#webmail');
  pais = $('#pais');
  bandera = $('#bandera');
  servicios.hover(mostrarLista1);



  pais.bind('change',seleccionarIdioma);
  empresa.hover(mostrarLista2);
  inicio.bind('mouseover',showLista);
  contacto.bind('mouseover',showLista);
  webmail.bind('mouseover',showLista);
}

function mostrarLista1(){
  lista1.css('display','block');
  lista2.css('display','none');
  listas.slideDown();
}

function mostrarLista2(){
  lista1.css('display','none');
  lista2.css('display','block');  
   listas.slideDown();
}

function showLista(){
   listas.slideUp();
}

function seleccionarIdioma(){
  
  seleccionado = $("#pais :selected").text();
  
  if(seleccionado == "ES"){
      bandera.attr('src','img/ES.jpg').addClass('pais-ES');
      menu(seleccionado);
  }
  else{
     bandera.attr('src','img/EN.jpg').addClass('pais-EN');
      menu(seleccionado);
  }
}


function menu(pais){
   if(pais == "EN"){
       inicio.text("Home");
       empresa.text("Company");
       servicios.text("Services");
       proyectos.text(" Projects Implemented");
       contacto.text("Contact");
       webmail.text("webmail");
       menuLista_1(pais);
       menuLista_2(pais);
       mainIdioma(pais);
   }

   else{
       inicio.text("Inicio");
       empresa.text("Emrpresa");
       servicios.text("Servicios");
       proyectos.text(" Proyectos Ejecutados");
       contacto.text("Contactanos");
       webmail.text("Webmail");
       menuLista_1(pais);
       menuLista_2(pais);
       mainIdioma(pais);
   }
}


function menuLista_1(pais){
    if(pais == "EN"){
        menuLista1.eq(0).text("Oil Pipelines");
        menuLista1.eq(1).text("Storage tanks");
        menuLista1.eq(2).text("Metalworking");
        menuLista1.eq(3).text("Civil works");
    }
    else{
        menuLista1.eq(0).text("Ductos de Hidrocarburos");
        menuLista1.eq(1).text("Tanques de almacenaiento");
        menuLista1.eq(2).text("Metal Mecanica");
        menuLista1.eq(3).text("Obras Civiles");
    }
}

function menuLista_2(pais){
    if(pais == "EN"){
        menuLista2.eq(0).text("History");
        menuLista2.eq(1).text("Vision");
        menuLista2.eq(2).text("Mission");
        menuLista2.eq(3).text("Environmental Quality and Safety Policy");
        menuLista2.eq(4).text("environmental policy");
        menuLista2.eq(5).text("training policy");
        menuLista2.eq(6).text("approvals");
    }
    else{
        menuLista2.eq(0).text("Historia");
        menuLista2.eq(1).text("Vision");
        menuLista2.eq(2).text("Mision");
        menuLista2.eq(3).text("Politica Calidad Ambiental y Seguridad");
        menuLista2.eq(4).text("Politica Ambiental");
        menuLista2.eq(5).text("Politica Capacitacion");
        menuLista2.eq(6).text("Homologaciones");
    }
}


function mainIdioma(pais){
    if(pais == "EN"){
      
       // nosotrostitle.text(""); 
       // serviciosTitle.text("SERVICES"); 
        //trabajosTitle.text("WORK DONE");
    }
    else{
        //nosotros.text('NOSOTROS');
        //nosotrostitle.text();
        //serviciosTitle.text("SERVICIOS");
        //trabajosTitle.text("TRABAJOS REALIZADOS");
    }
}











