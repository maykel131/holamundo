<?php 
$destino="trejomaykel@gmail.com";
$nombre=_POST['nombre'];
$correo=_POST['correo'];
$telefono=_POST['telefono'];
$mensaje=_POST['mensaje'];

$contenido ="nombre: " . $nombre . "\n Correo: " . $correo ."\n Telefono: " .$telefono. "\n Mensaje: " . $mensaje;

mail($destino," Mensaje de la pagina ", $contenido);
header("Location:html/gracias.html");


 ?>
