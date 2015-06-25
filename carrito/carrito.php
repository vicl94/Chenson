<?php include ('../conexion.php'); ?>
require_once('getPrice.php');
<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="../css/style.css" />
     	 <title>Carrito de compra</title>
<!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='../js/example.js'></script>       
<!--menu-->   

    </head>
    <body>
    	<header>
        	<div id="header">
            	
                <img src="../img/logo.png" class="logo" />
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="../index.php">| Inicio |</a></li>
                        <li><a href="../conoce_chenson.php">| Conoce Chenson |</a></li>
                        <li class="current_page_item"><a href="../tienda.php">| Productos |</a></li>
                        <li><a href="../donde_comprar.php">| Donde comprar |</a></li>
                        <li><a href="../nuestras_marcas.php">| Nuestras marcas |</a></li>
                    </ul>
              </div>    
            </div>
    </header>
    <div id="cuerpocar">

<br />

<p><h1  class="titulos">Su compra hasta el momento:</h1></p>
<br />


<?php 
if (isset ($_POST ['id_txt'])){
	$id=$_POST['id_txt'];
	$sku=$_POST['sku'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];
	$mi_carrito[]=array('id'=>$id,'sku'=>$sku, 'precio'=>$precio, 'cantidad'=>$cantidad);
	
	}
session_start();


if (isset ($_SESSION['carrito'])){
	$mi_carrito=$_SESSION['carrito'];
	if (isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$sku=$_POST['sku'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
		$pos=-1;
		for ($i=0;$i<count($mi_carrito);$i++){
			if($id==$mi_carrito[$i]['id']){
				$pos=$i;
				}
			}
			if($pos<>-1){
				$cuanto=$mi_carrito[$pos]['cantidad']+$cantidad;
				$mi_carrito[$pos]=array('id'=>$id,'sku'=>$sku, 	'precio'=>$precio, 'cantidad'=>$cuanto);						
				}else{
		$mi_carrito[]=array('id'=>$id,'sku'=>$sku, 	'precio'=>$precio, 'cantidad'=>$cantidad);
				}
	}
}
	if (isset($_POST['id2'])){
		$indice=$_POST['id2'];
		$cuanto=$_POST['cantidad2'];
		$mi_carrito[$indice]['cantidad']=$cuanto;
		}
		
		
	if(isset($_POST['id3'])){
		$indice=$_POST['id3'];
		$mi_carrito[$indice]=NULL;
		
		}
	if (isset($mi_carrito))	$_SESSION['carrito']=$mi_carrito;
	
	

?>
<table width="800"  cellpadding="0" class="tabla">
  <tr>
    <td colspan="5" bgcolor="#10335a" height="50px" class="estilo1" ><p>Listado de compra</p></td>
  </tr>
  <tr class="estilo1">
    <td class="celda">Producto</td>
    <td class="celda">Precio</td>
    <td>Cantidad</td>
    <td colspan="2" class="celda">Subtotal</td>
  </tr>
  <?php
  	if(isset($mi_carrito)){
		$total=0;
		for($i=0; $i<count ($mi_carrito);$i++){
			if($mi_carrito[$i]<>NULL)
			{
				
			
			
		
  ?>
  <tr>
    <td class="celda"><?php echo $mi_carrito[$i]['sku']?></td>
    <td class="celda">$ <?php echo $mi_carrito[$i]['precio'] ?>.00</td>
    <td class="celda"><?php echo $mi_carrito[$i]['cantidad'] ?>
      <form action="" method="post" name="actualizo"  >
          <input name="id2" type="hidden" value="<?php echo $i ?>" />
          <input name="cantidad2" type="text" value="<?php echo $mi_carrito[$i]['cantidad'] ?>" size="3" maxlength="3" />
          <input name="" type="image" src="../img/icons/accept.png" />
      </form></td>
    <?php 
		$subtotal= $mi_carrito[$i]['precio']* $mi_carrito[$i]['cantidad'];
		$total=$total + $subtotal;
	
	?>
    <td class="celda">$ <?php echo  $subtotal ?> .00
    
    </td>
    <td class="celda"><form action="" method="post">
    Borrar
        <input name="id3" type="hidden" value="<?php echo $i ?>" />
        <input name="" type="image" src="../img/icons/cancel.png" />
    </form></td>
  </tr>
  
  <?php 
			}
  	}
		}
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="celda" height="50px">Total:</td>
    <td colspan="2" class="celda">$ <?php  if (isset($total)) echo $total ?>.00</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="confirmarpedido.php">
      <input type="submit" name="confirmarpedido" id="confirmarpedido" value="Confirmar pedido" class="botonb"/>
    </form>
<form action="../galerias/mochilas.php" method="post"><input type="submit" name="volver" type="button" value="Continuar comprando" class="boton2"/></form>
<br /><br /><br /><br />
<div id="llama">
        <strong><h1>¿Dudas?</h1></strong>
        Llámanos al 01800 243 6766
        </div>
		
        </div>
        
        <footer>
    	<div id="pie">
        	<div class="menuinf">
        	  	<a href="index.php">|Inicio | </a>
              	<a href="conoce_chenson.php"> |Conoce Chenson |</a>
              	<a href="tienda.php">  |Tienda| </a>
				<a href="nuestras_marcas.php">|Nuestras marcas|</a>
              	<a href="donde_comprar.php"> |Donde comprar | </a>
             </div>
              <div class="contacto">
             	<h1>01800</h1> 
             </div>   
             
             <div class="contacto2">
             	<h4>CHENSON</h4>
                <h4>2436766</h4>
      	</div>
    </footer>
	</body>
</html>