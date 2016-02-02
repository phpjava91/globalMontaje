 <?php
 
class Conexion {


public function insertar($obra,$empresa,$lugar,$fechaInicio,$fechaFin,$descripcion,$imagen){
 $conexion=mysqli_connect("localhost","root","","global") or
    die("Problemas con la conexión");

		mysqli_query($conexion,"insert into proyectos(obra,empresa,lugar,fechaInicio,fechaFin,descripcion,imagen) values 
		                       (".$obra.",".$empresa.",".$lugar.",".$fechaInicio.",".$fechaFin.",".$descripcion.",".$imagen.")") or
		  die("Problemas en el select".mysqli_error($conexion));

		 mysqli_close($conexion);

 }

}   
      
  

