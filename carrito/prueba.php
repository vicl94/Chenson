		
<?php
$pedido='probando';

//$para  = $correo . ', '; 
$para = 'francisco.salas@chenson.com.mx';

// subject
$titulo = 'Su listado de compra:';

// message
$mensaje = $pedido;

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
//$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
//$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Chenson Nylon de México SA. de CV  <chensonnylon@chenson.com.mx>' . "\r\n";


// Mail it
if(mail($para, $titulo, $mensaje, $cabeceras))
echo "Se Envio correctamente";
else
echo "No se envio el correo";


?>