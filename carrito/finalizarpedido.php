<?php 
session_start();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$mi_carrito=$_SESSION['carrito'];
$pedido='<h1>------pedido------</h1><br><br>';
if(isset($mi_carrito)){
		$total=0;
		$pedido.='
		
		<H3>Gracias por tu compra</h3> '.$nombre. '
		<table width="400" border="1" cellpadding="0">
		  <tr>
			<td colspan="5">Listado de compra</td>
		  </tr>
		  <tr >
			<td>Producto</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td colspan="2">Subtotal</td>
		  </tr>
		  A la brevedad uno de nuestros operadores se pondrá en contácto contigo para proporcionarte los datos para realizar tu pago '.$correo.'.
		  ';	
		
		for($i=0; $i<count ($mi_carrito);$i++){
			if($mi_carrito[$i]<>NULL)
			{
				
			$subtotal= $mi_carrito[$i]['precio']* $mi_carrito[$i]['cantidad'];
			$total=$total + $subtotal;
			$pedido.='
			<tr>
				<td>'.$mi_carrito[$i]['sku'].'</td>
				<td>'.$mi_carrito[$i]['precio'].'</td>
				<td>'.$mi_carrito[$i]['cantidad'].'</td>
				<td>'.$subtotal.'</td>
			</tr>
				';
			}
  	    }
		$pedido.='<tr><td>Total:'.$total;
		$pedido.='</td></tr>';
		echo $pedido;
		
//************
		


$para  = $correo . ', '; 
$para .= 'francisco.salas@chenson.com.mx, fmiguel.salas@gmail.com, francisco.gutierrez@chenson.com.mx ';

// subject
$titulo = 'Su listado de compra:';

// message
$mensaje = $pedido;

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Chenson Nylon de México SA. de CV  <chensonnylon@chenson.com.mx>' . "\r\n";


// Mail it
mail($para, $titulo, $mensaje, $cabeceras);
	
//************
}
  ?>
