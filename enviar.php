<?php
$destino="enriquevillalta78@hotmail.com";
$nombre= $_ post("nombre");
$correo= $_ post("correo");
$telefono= $_ post("telefono");
$mensaje= $_ post("mensaje");
$contenido="nombre:" . $nombre . "\ncorreo:" . $correo ."\ntelefono:" .$telefono . "\nmensaje:" . $mensaje;
mail($destino,"contacto",$contenido);
?>