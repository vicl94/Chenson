
<?php 
include ('../conexion.php');
/*require_once('../galerias/getPrice.php');*/
$consulta=mysql_query("select * from tienda WHERE id=".$_REQUEST['id']);
?>
<html>
	<head>
    
    <title>Mochilas</title>
    
    
    
		
    	
		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='../js/example.js'></script>       
<!--menu--> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="../js/jquery.anythingzoomer.js"></script>
	<script>
	$(function() {

		$(".zoom").anythingZoomer({
			overlay : true,
			edit: true,
			// If you need to make the left top corner be at exactly 0,0, adjust the offset values below
			offsetX : 0,
			offsetY : 0
		});

		$('.president')
		.bind('click', function(){
			return false;
		})
		.bind('mouseover click', function(){
			var loc = $(this).attr('rel');
			if (loc && loc.indexOf(',') > 0) {
				loc = loc.split(',');
				$('.zoom').anythingZoomer( loc[0], loc[1] );
			}
			return false;
		});

	});
	</script>     
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
              <p align="right" >	  <a href="carrito/carrito.php">ver carrito</a></p>   
            </div>
    </header>
    
    
    	<div id="cuerpo">
        
        
		<div class="contenedor">
			<?php
			while ($filas=mysql_fetch_array($consulta)){
			$id=$filas['id'];
			$imgGal=$filas['imgGal'];
			$sku=$filas['sku'];
			$cuerpo=$filas['cuerpo'];
			$tamano=$filas['tamano'];
			$alto=$filas['alto'];
			$largo=$filas['largo'];
			$ancho=$filas['ancho'];
			$marca=$filas['marca'];
			$precio=$filas['precio'];
			$Pxc=$filas['Pxc'];
			
			
			

			?>
            
            <br><br><br><br>
		<div class="cajasola">
       <!--<a class="fancybox-thumbs" data-fancybox-group="thumb" href="--><?php/* echo $imagen*/?><!--">-->
       <div class="zoom">
           <div class="small">
           <img src="<?php echo $imgGal?>"big rushmore">
           		<!--<img src="<?php echo $imagen?>" height="300px">-->
           </div><!--</a>-->
           <div class="large">
                <img src="<?php echo $imgGal?>">
            </div>
		</div>
	</div>
    <br/>
			
			
				<!--<a href="carrito.php">añadir a carrito</a>-->
    <br/>            
			<form action="carrito.php" method="post" name="compra">
                <input name="id_txt" type="hidden" value="<?php echo $id?>" />
                <input name="sku" type="hidden" value="<?php echo $sku?>" />
                <input name="precio" type="hidden" value="<?php echo $precio?>" />
                <input name="cantidad" type="hidden" value="1" />
                <!-- <input name="Comprar" type="submit" value="Añadir al carrito" />-->
            </form>
		</div>	
		<div class="cajades">
			<p><H3>Descripcion<H3></p>
            <p>Cuerpo: <?php echo $cuerpo ?></p>
			<p>Marca:	<?php echo $marca ?></p>
            <p>Tamaño: <?php echo $tamano ?></p>
            <p>Alto:	<?php echo $alto ?></p>
            <p>Largo:	<?php echo $largo ?></p>
            <p>Ancho:	<?php echo $ancho ?></p>
			<!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
                <p>Precio: $ <?php  echo  $precio ?>.00</p>
            <p>Piezas por caja:	<?php echo $Pxc ?></p>
		</div>
        
		<?php
		} 
		?>
     <form> <input type="submit" name="volver" type="button" value="Volver a la galeria "class="btnvlv" onclick="history.back()" /> </ form>  
     
     <form>
<input type="button" value="Volver" name="volver" onClick="history.back()" />
</form>

     	</div> 
	</body>
</html>



 <form>
<input type="button" value="Volver a la galeria" name="volver" onClick="history.back()" "class="btnvlv"/>
</form>