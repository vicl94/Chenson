<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Chenson Mochilas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico" />
 
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
    <?php
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
?>
    
    
    	<div id="cuerpo"
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
        <div id="bannerh">
        	<!--slider noticias-->
			
			<div align="center">
				
				<div id="examples_outer">
					<div id="slider_container_2">
						<div id="SliderName_2" class="SliderName_2"> 
                        <!--<img src="img/noticias/3.png"   title="Demo2 first" usemap="#img1map" />-->
							
								
									<!--<a href="http://www.facebook.com/chensonmochilas/app_154581087931912" target="_blank">--><!--<img src="img/noticias/2.png"  alt="Chenson app" title="Demo2 second"  /><!--</a>-->
								<!--<div class="SliderName_2Description">Aprovecha un 30% de descuento en artículos seleccionados: <strong></strong></div>-->
                                
									<!--<a href="http://www.chenson.com.mx/Presentaciones/Buen%20fin.pdf" target="_blank"><img src="img/noticias/3.png"  alt="Estreno" title="Demo2 third" /></a>
								<div class="SliderName_2Description">El buen fin llegó a <strong>CHENSON</strong></div>   -->
                                
                                <a href="galerias/clasicos.php" target="_blank"><img src="img/noticias/4.png"  alt="Los clásicos de Chenson están de regreso" title="Demo2 third" /></a>
								<div class="SliderName_2Description">Los clásicos más buscados de<strong>CHENSON</strong> están de regreso, conocelos</div>       
						</div>
						<div id="SliderNameNavigation_2"></div>
						
							<script type="text/javascript">
								  effectsDemo2 = 'rain,stairs,fade';
								  var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width:1280, height: 250, effects: effectsDemo2,
								  display: {
								  autoplay: 3000,
								  loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
								  buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
								  description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
								  navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
										   }
									});
							</script>
					</div>
				
				
			</div>  
		 </div>
		<!--termina slider noticias-->	
        
      
                    <div style="position:relative; top:-320px; left:945px;">
                    		<script>
function borracampo(){
if(document.frm.txtfield.value == "Introduce el código de producto, marca o tipo de producto")
   document.frm.txtfield.value = ""} 

function restauracampo(){
  if(document.frm.txtfield.value=="")
   document.frm.txtfield.value="Introduce el código de producto, marca o tipo de producto"
   }
</script>
                         <form id="frm" name="frm" method="post" action="nomeguardes.php" >
                             BUSCAR:
                              <label for="buscar"></label>
                              <input type="text" name="txtfield" onclick="borracampo()" onblur="restauracampo()" value="Introduce el código de producto, marca o tipo de producto"  id="buscar" size="57" />
                              <input type="submit" name="Aceptar" id="Aceptar" value="Enviar" />
                         </form>
					</div>	         
         
         <?php
                $consulta=mysql_query("select * from tienda");
                
                if (isset($_POST['buscar'])){
                    $consulta=mysql_query("select * from tienda where sku like '%".$_POST['buscar']."%'");
                    }
                
                
                while($filas=mysql_fetch_array($consulta)){
					
					
                    $id=$filas['id'];
					$sku=$filas['sku'];
					$cuerpo=$filas['cuerpo'];
					$categoria=$filas['categoria'];
                    $marca=$filas['marca'];
                    $coleccion=$filas['coleccion'];
                    $tamano=$filas['tamano'];
					$alto=$filas['alto'];
					$largo=$filas['largo'];
					$ancho=$filas['ancho'];
                    $precio=$filas['precio'];
                    $imgGal=$filas['imgGal'];
					$Pxc=$filas['Pxc'];
				}
            ?>
        
        </div>
        <div id="accesor">
        	<a href="galerias/mochilas.php"><img src="../img/pins/mochila.png" width="65" class="pins" class="zoom" title="Mochilas" alt="Mochilas"/></a>
            <a href="galerias/mensajeros.php"><img src="../img/pins/mensajero.png" width="65" class="pins" title="Mensajeros" alt="Mensajeros"/></a>
            <a href="galerias/portafolios.php"><img src="../img/pins/portafolio.png" width="65" class="pins" title="Portafolios" alt="Portafolios"/></a>
            <a href="galerias/mochila_con_ruedas.php"><img src="../img/pins/carrito.png" width="65" class="pins" title="Mochila con ruedas" alt="Mochila con ruedas"/></a>
            <a href="galerias/bolso.php"><img src="../img/pins/bolso.png" width="65" class="pins" title="Bolso escolar" alt="Bolso escolar"/></a>
            <a href="galerias/loncheras.php"><img src="../img/pins/lonchera.png" width="65" class="pins" title="Lonchera" alt="Loncheras"/></a>
            <a href="galerias/lapiceras.php"><img src="../img/pins/lapicera.png" width="65" class="pins" title="Lapicera" alt="Portalapices"/></a>
            <a href="galerias/funda_para_laptop.php"><img src="../img/pins/portalap.png" width="65" class="pins" title="Funda para laptop" alt="Fundas para laptop"/></a>
            <a href="galerias/canguro.php"><img src="../img/pins/canguro.png" width="65" class="pins" title="Canguro" alt="cangureras"/></a>
            <a href="galerias/valijas.php"><img src="../img/pins/valija.png" width="65" class="pins" title="Valija" alt="Valijas"/></a>
            <a href="galerias/maletas.php"><img src="../img/pins/maletas.png" width="65" class="pins" title="Maletas" alt="Maletas"/></a>
            <a href="galerias/mochilas_de_camping.php"><img src="../img/pins/camping.png" width="57" class="pins" title="Mochilas de camping" alt="Mochilas de camping"/></a>
           
        </div>
        
        <div id="varios">	
        	<div id="destacado">
            <div class="titin">Producto destacado</div>
            <BR /> <BR /><BR />
         <!--Producto destacado-->
         
            
            <?php 
		include ('../conexion.php');
		$query="select * from tienda where destacado='si' ";
 		$consulta=mysql_query($query, $conexion);		
        $nro_reg=mysql_num_rows($consulta);	
       if($nro_reg==0){
	echo "No se han encontrado registros para mostrar";
	}
			?>
           <div id="wrapper">
        <div id="slider2">    
            <img class="scrollButtons left" src="../images/leftarrow.png">
			<div style="overflow: hidden;" class="scroll">
				<div class="scrollContainer">
                <?php
					$query="select * from tienda where destacado='si'";
 					$consulta=mysql_query($query, $conexion);					
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
					$coleccion=$filas['coleccion'];
					$destacado=$filas['destacado'];
					?>
					<div class="panel" id="panel_1">
						<div class="inside">
							<a href="http://www.chenson.com.mx/carrito/detalle.php?id=<?php echo $id;?>"><img src="<?php echo $imgGal;?>" alt="<?php echo $sku;?>" width="100px"/></a>
							<h2><?php echo $sku;?></h2
						></div>
					</div>
					<?php  }?>
                </div>

				<div id="left-shadow"></div>
				<div id="right-shadow"></div>

            </div>

			<img class="scrollButtons right" src="../images/rightarrow.png">

        </div>
        
            </div>
         
         <!--Termina producto destacado-->   

           
            
            
            
            
            </div>
            <br /><br /><br /><br />
            <!--inicia formulario -->
            <div id="suscribe">
            	<img src="img/boletin.jpg" width="250" alt="Suscribete y recibe las noticias y promociones de Chenson"/>
           		<div id="suscripcion">
			
                    <link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                   
                    <div id="mc_embed_signup">
                    <form action="http://chenson.us5.list-manage.com/subscribe/post?u=666c6c886103a0252834fb3d5&amp;id=9bcdf6a479" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                    <div class="indicates-required"><span class="asterisk">*</span> Campo requerido</div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Correo electrónico  <span class="asterisk">*</span>
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
                        </div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                    </div>
                    
                    
                            </div>



            </div>
            <!--termina formulario -->
            <br />
            <div id="redes">
            	<a href="contacto.html" ><img src="img/redes/correo.png" width="43" height="43" title="contacto" alt="contacto" class="redes" /></a><br/>
			<a href="http://www.facebook.com/chensonmochilas" target="_blank"><img src="img/redes/facebook.png" width="43" height="43" title="Facebook" alt="Facebook Chenson" /></a><br/>
			<a href="https://twitter.com/CHENSON_NYLON" target="_blank"><img src="img/redes/twitter.png" width="43" height="43" alt="twitter Chenson" title="Twitter" /></a><br/>
			<a href="http://www.youtube.com/CHENSONDEMEXICO" target="_blank"><img src="img/redes/youtube.png" width="43" height="43" alt="youtube Chenson" title="Youtube" /></a><br/>
           
        </div>
        <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br />
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
	</div>
    </div>
    	<!-- begin olark code -->
			<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
            f[z]=function(){
            (a.s=a.s||[]).push(arguments)};var a=f[z]._={
            },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
            f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
            0:+new Date};a.P=function(u){
            a.p[u]=new Date-a.p[0]};function s(){
            a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
            hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
            return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
            b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
            b.contentWindow[g].open()}catch(w){
            c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
            var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
            b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
            loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
            /* custom configuration goes here (www.olark.com/documentation) */
            olark.identify('5015-662-10-4378');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5015-662-10-4378/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
		<!-- end olark code -->
    </body>
</html>