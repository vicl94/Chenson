<html>
	<title>Mochilas con ruedas chica |Mochilas Chenson</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=”robots” CONTENT=”NOODP”>
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
</html>
<?php 
include ('../conexion.php');
$consulta=mysql_query("select * from tienda where cuerpo= 'mochila con ruedas' and tamano = 'chica' ", $conexion);
$nro_reg=mysql_num_rows($consulta);
mysql_close($conexion);
if($nro_reg==0){
	echo "No se han encontrado registros para mostrar";
	}
	//@$nro_pagina=$_GET['num'];
	$reg_por_pagina=20;
	
	if(isset($_GET['num'])){
		$nro_pagina=$_GET['num'];
		}
	else{
		$nro_pagina=1;
		}	
if (is_numeric($nro_pagina)){
	$inicio=($nro_pagina-1)*$reg_por_pagina;	
}
	else{
	$inicio=0;
	}
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
	$consulta=mysql_query("select * from tienda  where cuerpo= 'mochila con ruedas' and tamano = 'chica' limit $inicio,$reg_por_pagina",$conexion);
	$can_paginas=ceil ($nro_reg/$reg_por_pagina);
	
	
	$sql = ("SELECT * from tienda where cuerpo = 'mochila con ruedas' and tamano = 'chica'");
	$result = mysql_query($sql);
    $numero = mysql_num_rows($result);
	
	$sqlGde = ("SELECT * from tienda where cuerpo = 'mochila con ruedas' and tamano = 'grande'");
	$resultGde = mysql_query($sqlGde);
    $numeroGde = mysql_num_rows($resultGde); 
	mysql_close($conexion);
?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <link rel="stylesheet" type="text/css" href="../css/style.css" />
<!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='../js/example.js'></script>       
<!--menu-->   

<!--fixed-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script>
$(function () {

  var msie6 = $.browser == 'msie' && $.browser.version < 7;

  if (!msie6) {
    var top = $('#comment').offset().top - parseFloat($('#comment').css('margin-top').replace(/auto/, 0));
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();

      // whether that's below the form
      if (y >= top) {
        // if so, ad the fixed class
        $('#comment').addClass('fixed');
      } else {
        // otherwise remove it
        $('#comment').removeClass('fixed');
      }
    });
  }
});
</script>
 <!--fixed-->
                     
    </head>
    
    <body>
     <!--plugin facebook-->
    	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--termina plugin facebook-->
    	<div id="cuerpogal">
    	<header>
        	<div id="header">
            	
                <img src="../img/logo.png" class="logo" />
                <br /><br />
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                       
                        <li><a href="../index.php">|Inicio|</a></li>
                        <li><a href="../conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li class="current_page_item"><a href="../tienda.php">|Productos|</a></li>
                         <li><a href="../nuestras_marcas.php">|Nuestras marcas|</a></li>
                        <li><a href="../donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="../blog.php"> |Chenson news|</a></li>
                    </ul>
        
    			</div>
            <!-- <p align="right" > Mi carrito</p>
               <p align="right" >	 <a href="../carrito/carrito.php"> <img src="../img/icons/carrito.png" /> </a></p> -->
            </div>
            
        </header>
        
         <!--galeria-->
        <div class= "titulos2">Mochilas con ruedas</div>
				<div class="sub">Chicas</div>
                
			</header>
            <div id="buscador">
            <form id="form1" name="form1" method="post" action="mochilas.php">
              BUSCAR:
              <label for="buscar"></label>
              <input type="text" name="buscar" id="buscar" />
              <input type="submit" name="Aceptar" id="Aceptar" value="Enviar" />
         </form>
         	</div>
    	
         
         
    	<!--<form id="form2" name="form1" method="post" action="../usuarios/pidodatos.php">
	  		<input type="submit" name="login" id="login" value="Ingresar" />
		</form>-->
		<br /><br /><br /><br />
        <div class="filtroTam">
        	<form form name="prueba" action="#" method="post" >
                <select name="cambiar" onchange='document.location.href=document.prueba.cambiar.options[document.prueba.cambiar.selectedIndex].value;
                return false;' style="adjuntar etiqueta de titulo utilizando el atributo &quot;for&quot;">
                    <option selected="selected">Filtrar por tamaño</option>	
                     <option value="mochila_con_ruedas_chica.php">Chico (<?php echo $numero ?>)</option></a>
                      <option value="mochila_con_ruedas_grande.php">Grande (<?php echo $numeroGde ?>)</option>
                </select></form>
		</div>
		<div class="contenedor">
			<?php
			
			
			while ($filas=mysql_fetch_array($consulta)){
			$id=$filas['id'];
			$imgGal=$filas['imgGal'];
			$sku=$filas['sku'];
			$cuerpo=$filas['cuerpo'];
			$tamano=$filas['tamano'];
			$marca=$filas['marca'];
			$precio=$filas['precio'];
			$imgPl=$filas['imgPl'];
			?>
            
			<div class="cajaprueba">
            	<img src="<?php echo $imgPl;?>" width="35px" align="right" title="Portalaptop"/>
                <br />
                <br />
				<form method="post" action="../carrito/detalle.php?id=<?php echo $id?>" name="detalle">
				<input name="id" type="image" type="hidden" value="<?php echo $id?>" img src="<?php echo $imgGal;?>" width="165px" height="195px"></form>
                <p><?php echo $sku ?></p>
				<p><?php echo $marca ?></p>
				<!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
                <p>Precio: $ <?php  echo  $precio ?>.00</p>
				<form action="../carrito/detalle.php?id=<?php echo $id?>" method="post" name="detalle">
				<!--<input name="id" type="hidden" value="<?php //echo $id?>" />-->
				<input  type="submit" value="Detalle" onClick="../carrito/detalle.php?id=<?php echo $id?>">
				</form>
               
                <!--carrito-->
           <!--<form action="../carrito/carrito.php" method="post" name="compra">
                <input name="id_txt" type="hidden" value="<?php echo $id?>" />
                <input name="sku" type="hidden" value="<?php echo $sku?>" />
                <input name="precio" type="hidden" value="<?php echo $precio?>" />
                <input name="cantidad" type="hidden" value="1" />
                <input name="Comprar" type="submit" value="Añadir al carrito" class="boton" />
            </form>-->
            	<!--carrito-->
           </div>     
			<?php
			}
			?>	
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br />
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br />
		<div id="paginador">	
        <?php 
		if($nro_pagina>1)
			echo"<a href='mochila_con_ruedas_chica.php?num=".($nro_pagina-1)."'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='mochila_con_ruedas_chica.php?num=$i'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='mochila_con_ruedas_chica.php?num=".($nro_pagina+1)."'>Siguiente</a>";		
		?>
        </div>
         <!--termina galeria-->
		<!--termina slider noticias-->	
        </div>
       
        
            
      
      
           <div id="accesor">
        	<a href="mochilas.php"><img src="../img/pins/mochila.png" width="65" class="pins" class="zoom" title="Mochilas"/></a>
            <a href="mensajeros.php"><img src="../img/pins/mensajero.png" width="65" class="pins" title="Mensajeros"/></a>
            <a href="portafolios.php"><img src="../img/pins/portafolio.png" width="65" class="pins" title="Portafolios"/></a>
            <a href="mochila_con_ruedas.php"><img src="../img/pins/carrito.png" width="65" class="pins" title="Mochila con ruedas"/></a>
            <a href="bolso.php"><img src="../img/pins/bolso.png" width="65" class="pins" title="Bolso escolar"/></a>
            <a href="loncheras.php"><img src="../img/pins/lonchera.png" width="65" class="pins" title="Lonchera"/></a>
            <a href="lapiceras.php"><img src="../img/pins/lapicera.png" width="65" class="pins" title="Lapicera"/></a>
            <a href="funda_para_laptop.php"><img src="../img/pins/portalap.png" width="65" class="pins" title="Funda para laptop"/></a>
            <a href="canguro.php"><img src="../img/pins/canguro.png" width="65" class="pins" title="Canguro"/></a>
            <a href="valijas.php"><img src="../img/pins/valija.png" width="65" class="pins" title="Valija"/></a>
            <a href="maletas.php"><img src="../img/pins/maletas.png" width="65" class="pins" title="Maletas"/></a>
            
        </div> 
            
            <!--bloque de redes-->
	  <div id="commentWrapper">
			<div id="comment">
		 	<a href="../contacto.html" ><img src="../img/redes/correo.png" width="43" height="43" title="contacto" alt="contacto" class="redes" /></a><br/>
			<a href="http://www.facebook.com/chensonmochilas" target="_blank"><img src="../img/redes/facebook.png" width="43" height="43" title="Facebook" alt="Facebook" /></a><br/>
			<a href="https://twitter.com/CHENSON_NYLON" target="_blank"><img src="../img/redes/twitter.png" width="43" height="43" alt="twitter" title="Twitter" /></a><br/>
			<a href="http://www.youtube.com/CHENSONDEMEXICO" target="_blank"><img src="../img/redes/youtube.png" width="43" height="43" alt="youtube" title="Youtube" /></a><br/>
		  </div>
	  </div>
	  <!--bloque de redes-->
            
            </div>
           
            
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