<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include ('../conexion.php');

$consulta=mysql_query("select * from tienda WHERE id=".$_REQUEST['id']);
mysql_close($conexion);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
        <title>Detalle |Mochilas Chenson</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
         <script type="text/javascript" language="javascript" src="../js/jquery-1.8.2.min.js"></script>
         
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
    <!--Zoom-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="../js/jquery.anythingzoomer.js"></script>
	<script>
	$(function() {

		$(".zoom").anythingZoomer();

		$("button").click(function(){
			$(this).toggleClass('kyptos');
			var img = ($(this).hasClass('kyptos')) ? 'kryptos-front' : 'rushmore';
			$('.large').find('img').toggleClass('kyptos').attr('src', 'demo/' + img + '.jpg');
			$('.small').find('img').toggleClass('kyptos').attr('src', 'demo/' + img + '_small.jpg');
			// update plugin
			$('.zoom').anythingZoomer();
		});

	});
	</script>
    <!--Termina zoom-->
    
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
    
    <script >

if (navigator.appName=="Mozilla"){
	
   window.location.href="http://www.chenson.com.mx/detalleff.php?id=<?php echo $_REQUEST['id']; ?>";
}

</script> 
    
    </head>
    <body>
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
			$PrecioDesc=$filas['PrecioDesc'];
			$Pxc=$filas['Pxc'];
			$coleccion=$filas['coleccion'];
			$Int=$filas['Int'];
			$Lat=$filas['Lat'];
			$Sup=$filas['Sup'];
			$Fte=$filas['Fte'];
			$Uso=$filas['Uso'];
			$Det=$filas['Det'];
			$Descripcion=$filas['Descripcion'];
			$Promo=$filas['Promo'];
			$imgPl=$filas['imgPl'];
			$DescLrg=$filas['DescLrg'];
			$color=$filas['color'];
			$DescLic=$filas['DescLic'];
			$imgDesc=$filas['imgDesc'];
			

			?>
    	<div id="cuerpoborrar">
        	<header>
        	<div id="headerborrar">
              		 <img src="../img/logo-chenson.png" class="logoborrar" alt="Logotipo chenson"/> 
                      <br /><br /><br />
                      <div id="RedesSoc">
                              <div class="ContacText"> <img src="../img/icons/01800.png" width="10%" />01800 243 6766</div>
                      </div>                
  
                <div class="nav-wrapborrar">
                <br /><br />  
                    <ul class="group" id="example-one">
                        <li><a href="../index.php">|Inicio|</a></li>
                        <li><a href="../conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li><a href="../tienda.php">|Productos|</a></li>
                        <li><a href="../donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="../blog.php"> |Chenson news|</a></li>
                    </ul>
    			</div>	
            </div>
        </header>
         <br /><br /><br />
        <div id="DescGral"> <?php echo $Descripcion ?></div>
        <br /><br /><br />
        <div class="DescBreve">
        	<center>
        	<img src="<?php echo $imgPl  ?>" width="100%" />
            
            <br />
            <p class="Des"><?php echo $sku ?></p>
            <br />
            <p class="Des"><?php echo $coleccion ?></p></p>
            <br />
            </center>
        </div>
        
        
        
        
        
       
        
        
        
        

        <div id="Vista">
        	<div class="Descuentos"><img src="<?php echo $imgDesc?>" width="100%"/></div>
        	<div class="zoom">
               <div class="small">
               		<img name="preview"  src="<?php echo $imgGal ?>" width="65%">
               </div>
               <div class="large">
                    <img name"preview" src="<?php echo $imgGal ?>" width="65%">
                </div>
			</div>
        </div>
        <div class="Compra">
        	<h1>Precio:</h1>
              <br>
              <p class="promocion"><strike> $ <?php  echo  $precio ?>.00</strike></p>
              <p class="des"> $ <?php  echo  $PrecioDesc ?></p>
              <br />
              <div id="grayBG" class="grayBox" style="display:none;"></div> 
                <div id="LightBox1" class="box_content" style="display:none;"> 
                <table cellpadding="3" cellspacing="0" border="0"> 
                 	 <tr align="left"> 
                        <td colspan="2" style="padding:10px;">
                        <div class="contlight">	
                            <div onClick="displayHideBox('1'); return false;" style="cursor:pointer;" align="right">
                               <img src="../img/icons/cerrar.png" width="30px">
                             </div>
                             <div class="contlighttext">
                             <br>
                                <p class="textlight">Por el momento la opción de compra en línea no se encuentra disponible</p>
                                <br>
                                <p align="center">Con gusto te atenderemos en los siguientes medios:</p>
                                <br>
                                <p align="center"><img src="../img/icons/telefono.png" width="40">  01800 243 6766 lada sin costo </p>
                                <br>
                                <p align="center"><img src="../img/icons/correo.png" width="40">  <a href="mailto:contacto@chenson.com.mx" class="clase2">contacto@chenson.com.mx </a></p>
                                <br>
                                <p align="center">O contactanos vía Chat y con gusto atenderemos tu pedido</p>
                                <br />
                                </div>
                        </div>        
                        </td> 
              		</tr> 
            	</table> 
</div> 
<a href="#" onClick="displayHideBox('1'); return false;"><img src="../img/icons/comprarON.png" width="100%"></a>
        </div>
        
        <div id="Miniaturas">
       		<table  border="1" cellpadding="0" align="center">
              <tr>
                <td><img src="<?php echo $Fte;?>" width="100%"  name="frente"  OnMouseOver="preview.src=frente.src"/></td>
                <td><img src="<?php echo $Lat;?>" width="100%"  name="3"  OnMouseOver="preview.src=3.src"  /></td>
                <td><img src="<?php echo $Int;?>" width="100%"  name="interior"  OnMouseOver="preview.src=interior.src"/></td>
                <td><img src="<?php echo $Uso;?>" width="100%"  name="exterior"  OnMouseOver="preview.src=exterior.src" /></td>
                <td><img src="<?php echo $Det;?>" width="100%" name="foto2"  OnMouseOver="preview.src=foto2.src"  /></td>
              </tr>
        	</table>
        </div>
        <br /><br /><br /><br /><br />
        <!--Horizontal Tab-->
	<center>
    <div id="horizontalTab">
        <ul>
            <li><a href="#tab-1">Descripción</a></li>
            <li><a href="#tab-2">Licencia</a></li>
            <li><a href="#tab-3">Comentarios</a></li>
        </ul>

        <div id="tab-1">
            <p><?php  echo  $DescLrg ?>
            <br />
             <br />
             Color:
             <br />
             <?php  echo  $color ?>
             <br />
             <br />
             Medidas:
            <br />
            Alto: <?php echo $alto ?>
            <br />
            Largo: <?php echo $largo ?>
            <br />
            Ancho: <?php echo $ancho ?>
            
            </p>
        </div>
        <div id="tab-2">
        <center>
        <img src="<?php echo $imgPl  ?>" width="20%" />
        </center>
           <?php  echo  $DescLic ?>
        </div>
        <div id="tab-3">
            <div class="fb-comments" data-href="http://www.chenson.com.mx/detalle.php?id=<?php echo $id?>" data-colorscheme="light" data-numposts="5" data-width="450" align="center"></div>
        </div>

    </div>




    <!-- Responsive Tabs JS -->
    <script src="../js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
            });

            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('active');
            });
            $('#stop-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('stopRotation');
            });
            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('active');
            });
            $('.select-tab').on('click', function() {
                $('#horizontalTab').responsiveTabs('activate', $(this).val());
            });

        });
    </script>
</center>
<!--Termina Horizontal Tab-->
<?php } ?>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        
         <!--Pie-->
        <div id="pieN">	
    	<table border="0" cellpadding="0" class="TablaPie">
          <tr>
           <td width="8%" class="Hpie"> <a href="../conoce_chenson.php">Nosotros</a></td>
            <td width="10%" class="Hpie">Distribuidores</td>
            <td width="15%" class="Hpie">Tienda</td>
            <td width="20%" class="Hpie">Servicio a clientes</td>
            <td width="20%" class="Hpie">Blog Chenson</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">México</td>
            <td class="CPie"><a href="../galerias/mochilas.php" class="CPieH" title="Mochilas">Mochilas</a></td>
            <td class="CPie">Aviso de privacidad</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Guatemala</td>
            <td class="CPie"><a href="../galerias/mensajeros.php" class="CPieH">Mensajeros</a></td>
            <td class="CPie">Preguntas frecuentes</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Costa Rica</td>
            <td class="CPie"><a href="../galerias/loncheras.php" class="CPieH">Loncheras</a></td>
            <td class="CPie">Formas de pago</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">El Salvador</td>
            <td class="CPie"><a href="../galerias/lapiceras.php" class="CPieH">Lapiceros</a></td>
            <td class="CPie">Envíos y devoluciones</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Honduras</td>
            <td class="CPie"><a href="../galerias/mochila_con_ruedas.php" class="CPieH">Mochilas con ruedas</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="../galerias/funda_para_laptop.php" class="CPieH">Funda para laptop</a></td>	
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Nicaragua</td>
            <td class="CPie"><a href="../portafolios.php" class="CPieH">Portafolios</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Panamá</td>
            <td class="CPie"><a href="../galerias/Maletas.php" class="CPieH">Equipaje</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="../galerias/Accesorios.php" class="CPieH">Accesorios</a></td>	
            <td class="CPie"></td>
          </tr>
          
        </table>
      <table class="TablaPie2" border="0">
          <tr>
            <td colspan="3">Únete a nuestras comunidades</td>
          </tr>
          <tr>
            <td width="33%"><a href="https://www.facebook.com/chensonnylon" target="_blank"><img src="../img/icons/Facebook.png" width="40%"></a></td>
            <td width="33%"><a href="https://twitter.com/MochilasChenson" target="_blank"><img src="../img/icons/twitter.png" alt="" width="40%" /></a></td>
            <td width="33%"><a href="https://www.youtube.com/CHENSONDEMEXICO" target="_blank"><img src="../img/icons/youtube3.png" alt="" width="40%" /></a></td>
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
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_666c6c886103a0252834fb3d5_9bcdf6a479" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </form>
                </div>

<!--End mc_embed_signup--></td>
          </tr>
          <tr>
            <td colspan="3" align="right"><img src="../img/Logo-Chenson-blanco.png" width="85%" /></td>
          </tr>
      </table>
    </div>
<!--Termina Pie-->	
    </div>
    	<!--Salesforce-->    
<div id="Chatsales"> 
<script type='text/javascript' src='https://c.la1a1.salesforceliveagent.com/content/g/js/32.0/deployment.js'></script>
<script type='text/javascript'>
liveagent.init('https://d.la1a1.salesforceliveagent.com/chat', '572500000004CgE', '00D50000000BOhJ');
</script>

     
      <img id="liveagent_button_online_573500000004Cl0" style="display: none; border: 0px none; cursor: pointer" onClick="liveagent.startChat('573500000004Cl0')" src="http://www.chenson.com.mx/img/icons/Botonchatter.png" /><img id="liveagent_button_offline_573500000004Cl0" style="display: none; border: 0px none; " src="http://www.chenson.com.mx/img/icons/BotonchatterOff.png" />
<script type="text/javascript">
if (!window._laq) { window._laq = []; }
window._laq.push(function(){liveagent.showWhenOnline('573500000004Cl0', document.getElementById('liveagent_button_online_573500000004Cl0'));
liveagent.showWhenOffline('573500000004Cl0', document.getElementById('liveagent_button_offline_573500000004Cl0'));
});</script>
</div>       
<!--termina Salesforce--> 
    	</div>    
    </body>
</html>
