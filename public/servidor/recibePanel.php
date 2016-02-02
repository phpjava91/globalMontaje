 <?php

  require 'Conexion.php';
  require 'config.php';


  $obj = new Conexion();
 

 if(isset($_POST['btnGuardar'])){

  $num = round(rand(0,999999));

  $obra = $_POST['obra'];
  $empresa = $_POST['empresa'];
  $lugar = $_POST['lugar'];
  $fechaInicio = $_POST['inicio'];
  $fechaFin = $_POST['fin'];
  $descripcion = $_POST['descripcion'];




  if(is_uploaded_file($_FILES["file"]["tmp_name"])){

     $sep=explode('image/',$_FILES["file"]["type"]);
     $tipo = $sep[1];
     
     if($tipo =="jpeg" || $tipo== "png" || $tipo=="gif"){
     	if($_FILES['file']['size'] <= 8000000) {
          
         $imagen = $num.".".$tipo;
         copy($_FILES['file']['tmp_name'], "imagesUpload/".$num.".".$tipo);
       }  
     }
  }


    $obj->insertar($obra,$empresa,$lugar,$fechaInicio,$fechaFin,$descripcion,$imagen);
}



