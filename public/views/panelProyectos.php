 <div class="container content-ducto">
  <header class="row">
	  <div class="col-6 center">
	  	 <img  class="figure--ducto" src="img/logo.png" alt="">
	  </div>
	  <div class="col-6 ducto center">
	  	  <h1 class="title--ducto">PANEL ADMINISTRATIVO</h1>
	  </div>
  </header>
 </div>

 <article class="container">
   <div class="row">
   	 <p class="col-12">
   	    Bienvenido al panel administrativo, aqui podra subir toda la informacion de los proyectos
   	    ejecutados hasta la fecha por GLOBAL MONTAJE Y SERVICIOS S.A.C.	 
   	 </p>
   </div>
  </article>


  <section class="container around">
       <div class="row">
         <div class="col-12">
           <h3 class="title-proyecto">Informacion del Proyecto</h3>
        </div>
       </div>


       <form name="panel" action="servidor/recibePanel.php" method="post"  enctype="multipart/form-data">

        <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Obra:</label>
           <input class="in-obra" type="text" name="obra" id="obra" />
         </div>
        </div>

        <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Empresa:</label>
           <input  class="in-empresa" type="text" name="empresa" id="empresa">
         </div>
        </div>

         <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Lugar de ejecucion:</label>
           <input class="in-lugar" type="text" name="lugar" id="lugar">
         </div>
        </div>

         <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Fecha de inicio:</label>
           <input class="in-inicio" type="date" name="inicio" id="inicio">
         </div>
        </div>

         <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Fecha de fin:</label>
           <input class="in-fin" type="date" name="fin" id="fin">
         </div>
        </div>

         <div class="row">
         <div class="col-12">
           <label class="label-des" for="">Descripcion:</label>
           <textarea class="in-area" cols="55" rows="9" name="descripcion" id="description" noresize></textarea>
         </div>
        </div>

         <div class="row">
         <div class="col-12 col-proyecto">
           <label for="">Cargar-Imagen:</label>
           <input type="file" name="file" id="file">
         </div>
        </div>

         <div class="row">
         <div class="col-12 col-proyecto">
            <input class="in-cancelar" type="reset" value="Limpiar">
            <input class="in-guardar" type="submit" name="btnGuardar" value="Guardar">
         </div>
        </div>   
       </form> 	
    </section>
