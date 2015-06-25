<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Chenson Mochilas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="shortcut icon" type= "image/x-icon" href="/../img/icons/chenson.ico" />
     <!--box-->

     <link rel="stylesheet" href="css/box.css" type="text/css" media="screen" charset="utf-8" />

	<script src="js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
    <!--box-->
     <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link type="text/css" rel="stylesheet" href="css/sliderman.css"/>
     <script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
     <script type="text/javascript">
								  effectsDemo2 = 'rain,stairs,fade';
								  var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width:1250, height: 400, effects: effectsDemo2,
								  display: {
								  autoplay: 3000,
								  loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
								  buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
								  description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
								  navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
										   }
									});
							</script>
<!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='js/example.js'></script>       
<!--menu-->         
<!--anatitycs-->
   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33704314-1']);
  _gaq.push(['_setDomainName', 'chenson.com.mx']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


      <!--anatitycs-->       
</head>

<body>
	<div id="cuerpoblog">
    	<header>
        
        	<div id="header">
              		 <img src="img/logo.png" class="logo" alt="Logotipo chenson"/> 
                      <br /><br />
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                       
                        <li  class="current_page_item"><a href="index.php">|Inicio|</a></li>
                        <li><a href="conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li><a href="tienda.php">|Productos|</a></li>
                        <li><a href="nuestras_marcas.php">|Nuestras marcas|</a></li>
                        <li><a href="donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="blog.php"> |Chenson news|</a></li>
                        
                    </ul>
        
    			</div>	
               <!-- <p align="right" > Mi carrito</p>
               <p align="right" >	 <a href="carrito/carrito.php"> <img src="img/icons/carrito.png" /> </a></p>
                <br />-->
               <!-- <p align="right" >	  <a href="usuarios/pidodatos.php">Iniciar sesión</a></p>-->
            </div>
        </header>
    	
        
        
        <!--Php buscador-->
           
                        <?php
						include ('conexion.php');
						
                        if (isset($_POST['buscar'])){
                            
                            $consulta=mysql_query("select * from tienda where sku like '%".$_POST['buscar']."%' " );
                             $nro_reg = mysql_num_rows($consulta);
							 
									 if($nro_reg>0)
                             
                        
                        while ($filas=mysql_fetch_array($consulta)){
                        $id=$filas['id'];
                        $imgGal=$filas['imgGal'];
                        $sku=$filas['sku'];
                        $cuerpo=$filas['cuerpo'];
                        $tamano=$filas['tamano'];
                        $marca=$filas['marca'];
                        $precio=$filas['precio'];
                        $imgDesc=$filas['imgDesc'];
                        $PreDesc=$filas['PreDesc'];
                        ?>
                        <div class="caja">
                            <form method="post" action="../carrito/detalle.php?id=<?php echo $id?>" name="detalle">
                            <input name="id" type="image" type="hidden" value="<?php echo $id?>" img src="<?php echo $imgGal;?>" width="165px" height="195px"></form>
                            <p><?php echo $sku ?></p>
                            <p><?php echo $marca ?></p>
                            <!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
                            <!--<p class="TextoRojo"><strike>-->Precio: $ <?php  echo  $precio ?>.00<!--</strike>--></p>
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
                            else{
                                
                            $consulta=mysql_query("select * from tienda where cuerpo like '%".$_POST['buscar']."%'" );
                             $nro_reg = mysql_num_rows($consulta);
                             if($nro_reg>0){
                                 
                        while ($filas=mysql_fetch_array($consulta)){
                        $id=$filas['id'];
                        $imgGal=$filas['imgGal'];
                        $sku=$filas['sku'];
                        $cuerpo=$filas['cuerpo'];
                        $tamano=$filas['tamano'];
                        $marca=$filas['marca'];
                        $precio=$filas['precio'];
                        $imgDesc=$filas['imgDesc'];
                        $PreDesc=$filas['PreDesc'];
                        ?>
                        <div class="caja">
                            
                            <form method="post" action="../carrito/detalle.php?id=<?php echo $id?>" name="detalle">
                            <input name="id" type="image" type="hidden" value="<?php echo $id?>" img src="<?php echo $imgGal;?>" width="165px" height="195px"></form>
                            <p><?php echo $sku ?></p>
                            <p><?php echo $marca ?></p>
                            <!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
                             <!--<p class="TextoRojo"><strike>-->Precio: $ <?php  echo  $precio ?>.00<!--</strike>--></p>
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
                        }else{			
                            $consulta=mysql_query("select * from tienda where marca like '%".$_POST['buscar']."%' " );
                             $nro_reg = mysql_num_rows($consulta);
                             if($nro_reg>0){
                                 
                                            while ($filas=mysql_fetch_array($consulta)){
                        $id=$filas['id'];
                        $imgGal=$filas['imgGal'];
                        $sku=$filas['sku'];
                        $cuerpo=$filas['cuerpo'];
                        $tamano=$filas['tamano'];
                        $marca=$filas['marca'];
                        $precio=$filas['precio'];
                        $imgDesc=$filas['imgDesc'];
                        $PreDesc=$filas['PreDesc'];
                        ?>
                        <div class="caja">
                            <form method="post" action="../carrito/detalle.php?id=<?php echo $id?>" name="detalle">
                            <input name="id" type="image" type="hidden" value="<?php echo $id?>" img src="<?php echo $imgGal;?>" width="165px" height="195px"></form>
                            <p><?php echo $sku ?></p>
                            <p><?php echo $marca ?></p>
                            <!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
                             <!--<p class="TextoRojo"><strike>-->Precio: $ <?php  echo  $precio ?>.00<!--</strike>--></p>
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
                            }
                                }
                        }}
						
						?>
           
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <p class="blanco"> ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ........... 
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... 
                                  ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........
                 ...........   ........... ........... ...........      ........... ........... ........... ........... ........... ........... ........... ........... ........... ...........</p>

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
         </div>   
    </footer>           
            
<!--Termina php buscador-->
  </div>      
</body>
</html>