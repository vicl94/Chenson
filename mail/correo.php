<?php
$para      = 'fmiguel.salas@gmail.com, francisco.salas@chenson.com.mx, chensonnylon@chenson.com.mx';
$titulo = 'Mochilas Chenson';
$mensaje = 'Hola';
$cabeceras = 'From: chensonnylon@chenson.com.mx' . "\r\n" .
    'Reply-To: francisco.salas@chenson.com.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>