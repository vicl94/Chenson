<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Chenson Mochilas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico" />
 
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			
			
			<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#ei-slider').eislideshow({
                        animation			: 'center',
                        autoplay			: true,
                        slideshow_interval	: 5000,
                        titlesFactor		: 0
                    });
                });
            </script>
            
	<!--box-->
     <link rel="stylesheet" type="text/css" href="css/style.css" />
     

<!--Slider noticias-->
<link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
<!--Slider noticias-->  

<!--destacados-->
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
 <link rel="stylesheet" type="text/css" href="css/style3.css" />
<!--destacados-->      
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
      
       <!--ini light-->
    <script type="text/javascript" language="javascript"> 
	function displayHideBox(boxNumber) 
	{ 
		if(document.getElementById("LightBox"+boxNumber).style.display=="none") {
			document.getElementById("LightBox"+boxNumber).style.display="block";
			document.getElementById("grayBG").style.display="block"; 
		} else { 
			document.getElementById("LightBox"+boxNumber).style.display="none";
			document.getElementById("grayBG").style.display="none"; 
		} 
	} 
	</script> 
    <!--fin light-->
                        
    </head>
    
    <body>
		<?php
  
//      $conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
//        $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');

        $mysqli = new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce");
        if ($mysqli->connect_errno) {
            echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        ?>
    	<div id="cuerpoborrar">
    	<header>
        	<div id="headerborrar">
              		 <img src="img/logo-chenson.png" class="logoborrar" alt="Logotipo chenson"/> 
                      <br /><br /><br />
                      <div id="RedesSoc">
                              <div class="ContacText"> <img src="img/icons/01800.png" width="10%" />01800 243 6766</div>
                              <div id="grayBG" class="grayBox" style="display:none;"></div> 
                                <div id="LightBox1" class="box_content" style="display:none;"> 
                                    <table cellpadding="3" cellspacing="0" border="0"> 
                                      <tr align="left"> 
                                        <td colspan="2" style="padding:10px;">
                                            <div onClick="displayHideBox('1'); return false;" style="cursor:pointer;" align="right">
                                               <img src="../img/icons/cerrar.png" width="30px">
                                             </div>
                                             
                                            <div id="suscripcion">
                                            <!-- Do not change the code! -->
                                                <a id="foxyform_embed_link_105928"></a>
                                                <script type="text/javascript">
                                                (function(d, t){
                                                   var g = d.createElement(t),
                                                       s = d.getElementsByTagName(t)[0];
                                                   g.src = "http://es.foxyform.com/js.php?id=105928&sec_hash=8dd4f829d85&width=350px";
                                                   s.parentNode.insertBefore(g, s);
                                                }(document, "script"));
                                                </script>
                                                <!-- Do not change the code! -->
                                            </div>
                                        </td> 
                                      </tr> 
                                    </table> 
                                </div> 
            		<a href="#" onClick="displayHideBox('1'); return false;"><img src="../img/icons/email.png" style="float:left; margin-left:5px;" width="50px"></a>
                    
            		</div>                
  <br /><br /><br />    <br />       
                <div class="nav-wrapborrar">
                    <ul class="group" id="example-one">
                        <li  class="current_page_item"><a href="index.php">|Inicio|</a></li>
                        <li><a href="conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li><a href="tienda.php">|Productos|</a></li>
                        <li><a href="donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="blog.php"> |Chenson news|</a></li>
                    </ul>
    			</div>	
            </div>
        </header>
        <!--slider noticias-->
        <div id="slider">
	<div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                       <li>
                            <a href="galerias/Edicion-Limitada.php"><img src="img/large/Edicion-Limitada-junio-2015.jpg" alt="Conoce los nuevos productos en edición limitada"/></a>
                            <div class="ei-title">
                                <h2></h2>
                                <h3></h3>
                            </div>
                        </li>
						
                        <!--<li>
                           <a href="Catalogo-BTS-2014.php"> <img src="img/large/2.jpg" alt="image02" /></a>
                            <div class="ei-title">
                                <h2 class="TitBanner">Conoce y descarga el catálgo</h2>
                                <h3>BTS 2014</h3>
                            </div>
                        </li>-->
                       <li>
                       		<a href="galerias/Zona-de-promociones-Chenson.php"><img src="img/large/BannerPromocionMarzo.jpg" alt="Promociones del mes de marzo" title="Conoce las promociones que Chenson tiene para ti" /></a>
                            <div class="ei-title">
                                <h2></h2>
                                <h3></h3>
                            </div>
                        </li>
                        
                        
                    
                         
                        <!--<li>
                            <img src="img/large/7.jpg" alt="image07"/>
                            <div class="ei-title">
                                <h2>algún</h2>
                                <h3>comentario</h3>
                            </div>
                        </li>-->
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
						<li><a href="#">Slide 1</a><img src="img/large/Edicion-Limitada-junio-2015.jpg" alt="thumb03" /></li>
                       <li><a href="#">Slide 6</a><img src="img/large/2.jpg" alt="thumb06" /></li>
                       <!--<li><a href="#">Slide 3</a><img src="img/large/BannerPromocionMarzo.jpg" alt="thumb02" /></li>
                       
                        <!--<li><a href="#">Slide 5</a><img src="img/thumbs/5.jpg" alt="thumb05" /></li>
                        <li><a href="#">Slide 7</a><img src="img/thumbs/7.jpg" alt="thumb07" /></li>-->
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
      </div>
            
            
	
	</div>
        <br /><br /><br />
    <!--slider noticias-->    
        <div id="accesor">
        	<a href="galerias/mochilas.php"><img src="img/menu-pins/mochilas.png" width="65" class="pins" title="Mochilas" alt="Mochilas"/></a>
            <a href="galerias/mensajeros.php"><img src="img/menu-pins/mensajeros.png" width="65" class="pins" title="Mensajeros" alt="Mensajeros"/></a>
            <a href="galerias/portafolios.php"><img src="img/menu-pins/portafolios.png" width="65" class="pins" title="Portafolios" alt="Portafolios"/></a>
            <a href="galerias/mochila_con_ruedas.php"><img src="img/menu-pins/mochilas-con-ruedas.png" width="65" class="pins" title="Mochila con ruedas" alt="Mochila con ruedas"/></a>
            <a href="galerias/bolso.php"><img src="img/menu-pins/bolso-escolar.png" width="65" class="pins" title="Bolso escolar" alt="Bolso escolar"/></a>
            <a href="galerias/loncheras.php"><img src="img/menu-pins/loncheras.png" width="65" class="pins" title="Lonchera" alt="Loncheras"/></a>
            <a href="galerias/lapiceras.php"><img src="img/menu-pins/portalapices.png" width="65" class="pins" title="Lapicera" alt="Portalapices"/></a>
            <a href="galerias/funda_para_laptop.php"><img src="img/menu-pins/fundas-para-laptop.png" width="65" class="pins" title="Funda para laptop" alt="Fundas para laptop"/></a>
            <a href="galerias/canguro.php"><img src="img/menu-pins/canguros.png" width="65" class="pins" title="Canguro" alt="cangureras"/></a>
            <a href="galerias/valijas.php"><img src="img/menu-pins/valijas.png" width="65" class="pins" title="Valija" alt="Valijas"/></a>
            <a href="galerias/maletas.php"><img src="img/menu-pins/equipaje.png" width="65" class="pins" title="Maletas" alt="Maletas"/></a>
            <a href="galerias/mochilas_de_camping.php"><img src="img/menu-pins/mochilas-de-camping.png" width="65" class="pins" title="Mochilas de camping" alt="Mochilas de camping"/></a>
        </div>
        <div class="titin">Categorias de producto</div>
        <br />
        <a href="galerias/Linea-escolar.php">
        <div class="Categ">
        	<img src="img/categorias/escolar.png" width="90%" class="imgCat" />
            Linea escolar
        </div>
        </a>
        
        <a href="galerias/Linea-juvenil.php">
        <div class="Categ">
        	<img src="img/categorias/juvenil.png" width="90%" class="imgCat" />
            Linea juvenil
        </div>
        </a>
        
        <a href="galerias/Linea-de-viaje.php">
        <div class="Categ">
        	<img src="img/categorias/viaje.png" width="90%" class="imgCat" />
            Linea de viaje
        </div>
        </a>
        
        <a href="galerias/Linea-ejecutiva.php">
        <div class="Categ">
        	<img src="img/categorias/ejecutiva.png" width="90%" class="imgCat" />
            Linea ejecutiva
        </div>
        </a>
        
        <a href="galerias/Linea-de-accesorios.php">
        <div class="Categ">
        	<img src="img/categorias/accesorios.png" width="90%" class="imgCat" />
            Linea de accesorios
        </div>
        </a>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        
        
        
                <div class="titin">Producto destacado</div>
<!--Inicia destacados-->
                <div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Modelo MB60234-9</h2>
                    <p>
                    Mochila grande de la linea Mario Bros, nylon de alta resistencia, cierres reforzados, diseño tridimensional.
					</p>
                    
					<a href="http://www.chenson.com.mx/carrito/detalle.php?id=345" class="da-link">Más información</a>
					<div class="da-img"><img src="img/destacados/1.png" alt="image01" /></div>
				</div>
               
				<div class="da-slide">
					<h2>Modelo CO59566-3</h2>
                    <p>
                    Mochila con ruedas grande de la linea Chenson Original,bastón metálico ajustable a tres posiciones, llantas de gel con luces led
					<a href="http://www.chenson.com.mx/carrito/detalle.php?id=203" class="da-link">Más información</a>
					<div class="da-img"><img src="img/destacados/2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Modelo SD59467-F</h2>
                    <p>
                   Lonchera térmica de la linea Sandichos, asa ajustable, interior térmico que te permitirá mantener tus alimentos a la temperatura ideal.
					</p>
					<a href="http://www.chenson.com.mx/carrito/detalle.php?id=403" class="da-link">Más información</a>
					<div class="da-img"><img src="img/destacados/3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Modelo NC59787-P</h2>
                    <p>
                    Lapicero de la linea Nici, doble compartimento, cierres reforzados y forro interno impermeable para evitar que tus lapices se arruinen en caso de derrames.
					</p>
					<a href="http://www.chenson.com.mx/carrito/detalle.php?id=369" class="da-link">Más información</a>
					<div class="da-img"><img src="img/destacados/4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
			
		</script>
        
        
        	
<!--Termina destacados-->  
 <!--Salesforce-->    
<div id="Chatsales"> 
<script type='text/javascript' src='https://c.la1a1.salesforceliveagent.com/content/g/js/32.0/deployment.js'></script>
<script type='text/javascript'>
liveagent.init('https://d.la1a1.salesforceliveagent.com/chat', '572500000004CgE', '00D50000000BOhJ');
</script>

     
      <img id="liveagent_button_online_573500000004Cl0" style="display: none; border: 0px none; cursor: pointer" onclick="liveagent.startChat('573500000004Cl0')" src="http://www.chenson.com.mx/img/icons/Botonchatter.png" /><img id="liveagent_button_offline_573500000004Cl0" style="display: none; border: 0px none; " src="http://www.chenson.com.mx/img/icons/BotonchatterOff.png" />
<script type="text/javascript">
if (!window._laq) { window._laq = []; }
window._laq.push(function(){liveagent.showWhenOnline('573500000004Cl0', document.getElementById('liveagent_button_online_573500000004Cl0'));
liveagent.showWhenOffline('573500000004Cl0', document.getElementById('liveagent_button_offline_573500000004Cl0'));
});</script>
</div>       
<!--termina Salesforce-->            


    <!--Pie-->
        <div id="pieN">	
    	<table border="0" cellpadding="0" class="TablaPie">
          <tr>
           <td width="8%" class="Hpie"> <a href="conoce_chenson.php">Nosotros</a></td>
            <td width="10%" class="Hpie">Distribuidores</td>
            <td width="15%" class="Hpie">Tienda</td>
            <td width="20%" class="Hpie">Servicio a clientes</td>
            <td width="20%" class="Hpie">Blog Chenson</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">México</td>
            <td class="CPie"><a href="galerias/mochilas.php" class="CPieH" title="Mochilas">Mochilas</a></td>
            <td class="CPie">Aviso de privacidad</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Guatemala</td>
            <td class="CPie"><a href="galerias/mensajeros.php" class="CPieH">Mensajeros</a></td>
            <td class="CPie">Preguntas frecuentes</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Costa Rica</td>
            <td class="CPie"><a href="galerias/loncheras.php" class="CPieH">Loncheras</a></td>
            <td class="CPie">Formas de pago</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">El Salvador</td>
            <td class="CPie"><a href="galerias/lapiceras.php" class="CPieH">Lapiceros</a></td>
            <td class="CPie">Envíos y devoluciones</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Honduras</td>
            <td class="CPie"><a href="galerias/mochila_con_ruedas.php" class="CPieH">Mochilas con ruedas</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="galerias/funda_para_laptop.php" class="CPieH">Funda para laptop</a></td>	
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Nicaragua</td>
            <td class="CPie"><a href="portafolios.php" class="CPieH">Portafolios</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Panamá</td>
            <td class="CPie"><a href="galerias/Maletas.php" class="CPieH">Equipaje</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="galerias/Accesorios.php" class="CPieH">Accesorios</a></td>	
            <td class="CPie"></td>
          </tr>
          
        </table>
      <table class="TablaPie2" border="0">
          <tr>
            <td colspan="3">Únete a nuestras comunidades</td>
          </tr>
          <tr>
            <td width="33%"><a href="https://www.facebook.com/chensonnylon" target="_blank"><img src="img/icons/Facebook.png" width="40%"></a></td>
            <td width="33%"><a href="https://twitter.com/MochilasChenson" target="_blank"><img src="img/icons/twitter.png" alt="" width="40%" /></a></td>
            <td width="33%"><a href="https://www.youtube.com/CHENSONDEMEXICO" target="_blank"><img src="img/icons/youtube3.png" alt="" width="40%" /></a></td>
          </tr>
          <tr>
            <td colspan="3">Suscríbete a nuestro boletín </td>
          </tr>
          <tr>
            <td colspan="3"><!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#2988fc; clear:left; font:14px Helvetica,Arial,sans-serif; }
                </style>
                <div id="mc_embed_signup">
                <form action="http://chenson.us5.list-manage.com/subscribe/post?u=666c6c886103a0252834fb3d5&amp;id=9bcdf6a479" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="indicates-required"><span class="asterisk">*</span>Campo requerido</div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">E-mail  <span class="asterisk">*</span>
                </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">Nombre  <span class="asterisk">*</span>
                </label>
                    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_666c6c886103a0252834fb3d5_9bcdf6a479" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </form>
                </div>

<!--End mc_embed_signup--></td>
          </tr>
          <tr>
            <td colspan="3" align="right"><img src="img/Logo-Chenson-blanco.png" width="85%" /></td>
          </tr>
      </table>
    </div>
<!--Termina Pie-->	
    </div>
    	
    </body>
</html>