<?php
$objDatos = json_decode(file_get_contents("php://input"));

$mail =  $objDatos->correo; 
$contenido =  $objDatos->mensaje;
$nombre = $objDatos->nombre;

