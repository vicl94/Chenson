<html>
	<title>Maletas |Mochilas Chenson</title>
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
</html>
<?php 
include ('../conexion.php');

$consulta=mysql_query("select * from tienda where cuerpo= 'maleta'", $conexion);
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
if (is_numeric($nro_pagina))
	$inicio=($nro_pagina-1)*$reg_por_pagina;	
	
	else{
	$inicio=0;
	}
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
	$consulta=mysql_query("select * from tienda  where cuerpo= 'maleta' limit $inicio,$reg_por_pagina",$conexion);
	$can_paginas=ceil ($nro_reg/$reg_por_pagina);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Maletas</title>
    
     <link rel="stylesheet" type="text/css" href="../css/style.css" />
     

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
    	<div id="cuerpoborrar">
        <header>
        	<div id="headerborrar">
              		 <img src="../img/logo-chenson.png" class="logoborrar" alt="Logotipo chenson"/> 
                      <br /><br /><br />
                      <div id="RedesSoc">
                              <div class="ContacText"> <img src="../img/icons/01800.png" width="10%" />01800 243 6766</div>
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
            		<a href="#" onClick="displayHideBox('1'); return false;"><img src="../img/icons/email.png" style="float:right; margin-left:5px;" width="50px"></a>
            		</div>                
  <br /><br /><br />    <br />       
                <div class="nav-wrapborrar">
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
  <!--Termina buscador-->
  		  <br /><br /><br /><br />	
          <div id="accesor">
        	<a href="mochilas.php"><img src="../img/menu-pins/mochilas.png" width="65" class="pins" title="Mochilas" alt="Mochilas"/></a>
            <a href="mensajeros.php"><img src="../img/menu-pins/mensajeros.png" width="65" class="pins" title="Mensajeros" alt="Mensajeros"/></a>
            <a href="portafolios.php"><img src="../img/menu-pins/portafolios.png" width="65" class="pins" title="Portafolios" alt="Portafolios"/></a>
            <a href="mochila_con_ruedas.php"><img src="../img/menu-pins/mochilas-con-ruedas.png" width="65" class="pins" title="Mochila con ruedas" alt="Mochila con ruedas"/></a>
            <a href="bolso.php"><img src="../img/menu-pins/bolso-escolar.png" width="65" class="pins" title="Bolso escolar" alt="Bolso escolar"/></a>
            <a href="loncheras.php"><img src="../img/menu-pins/loncheras.png" width="65" class="pins" title="Lonchera" alt="Loncheras"/></a>
            <a href="lapiceras.php"><img src="../img/menu-pins/portalapices.png" width="65" class="pins" title="Lapicera" alt="Portalapices"/></a>
            <a href="funda_para_laptop.php"><img src="../img/menu-pins/fundas-para-laptop.png" width="65" class="pins" title="Funda para laptop" alt="Fundas para laptop"/></a>
            <a href="canguro.php"><img src="../img/menu-pins/canguros.png" width="65" class="pins" title="Canguro" alt="cangureras"/></a>
            <a href="valijas.php"><img src="../img/menu-pins/valijas.png" width="65" class="pins" title="Valija" alt="Valijas"/></a>
            <a href="maletas.php"><img src="../img/menu-pins/equipaje.png" width="65" class="pins" title="Maletas" alt="Maletas"/></a>
            <a href="mochilas_de_camping.php"><img src="../img/menu-pins/mochilas-de-camping.png" width="65" class="pins" title="Mochilas de camping" alt="Mochilas de camping"/></a>
        </div>
        
        <div class= "titulos2">Maletas</div>
            
    	<div id="buscador">
         	<script>
				function borracampo(){
				if(document.buscar.buscar.value == "Ingresa el código, marca o tipo de producto")
				document.buscar.buscar.value = ""} 
								
				function restauracampo(){
				if(document.buscar.buscar.value=="")
				document.buscar.buscar.value="Ingresa el código, marca o tipo de producto"
				}					
			</script>
            <form id="buscar" name="buscar" method="post" action="../Busqueda.php" >
             	BUSCAR:
            	<label for="buscar"></label>
                <input type="text" name="buscar" onClick="borracampo()" onBlur="restauracampo()" value="Ingresa el código, marca o tipo de producto"  id="buscar"  size="30" class="Casilla" />
                <input type="submit" name="Aceptar" id="Aceptar" value="Buscar"/>
            </form>     
        </div>
         
         
    	<!--<form id="form2" name="form1" method="post" action="../usuarios/pidodatos.php">
	  		<input type="submit" name="login" id="login" value="Ingresar" />
		</form>-->
		<br /><br /><br /><br />
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
			?>
            
			<div class="caja">
				
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
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
         
         
         <br /><br /><br /><br />
		<div id="paginador">	
        <?php 
		if($nro_pagina>1)
			echo"<a href='Maletas.php?num=".($nro_pagina-1)."'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='Maletas.php?num=$i'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='Maletas.php?num=".($nro_pagina+1)."'>Siguiente</a>";		
		?>
        </div>
         <!--termina galeria-->
		<!--termina slider noticias-->	
        </div>
        
        
        
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
            <td class="CPie"><a href="mochilas.php" class="CPieH" title="Mochilas">Mochilas</a></td>
            <td class="CPie">Aviso de privacidad</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Guatemala</td>
            <td class="CPie"><a href="mensajeros.php" class="CPieH">Mensajeros</a></td>
            <td class="CPie">Preguntas frecuentes</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Costa Rica</td>
            <td class="CPie"><a href="loncheras.php" class="CPieH">Loncheras</a></td>
            <td class="CPie">Formas de pago</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">El Salvador</td>
            <td class="CPie"><a href="lapiceras.php" class="CPieH">Lapiceros</a></td>
            <td class="CPie">Envíos y devoluciones</td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Honduras</td>
            <td class="CPie"><a href="mochila_con_ruedas.php" class="CPieH">Mochilas con ruedas</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="funda_para_laptop.php" class="CPieH">Funda para laptop</a></td>	
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
            <td class="CPie"><a href="Maletas.php" class="CPieH">Equipaje</a></td>
            <td class="CPie"></td>
          </tr>
          <tr>
            <td class="CPie"></td>
            <td class="CPie">Rep. Dominicana</td>
            <td class="CPie"><a href="Accesorios.php" class="CPieH">Accesorios</a></td>	
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

     
      <img id="liveagent_button_online_573500000004Cl0" style="display: none; border: 0px none; cursor: pointer" onclick="liveagent.startChat('573500000004Cl0')" src="http://www.chenson.com.mx/img/icons/Botonchatter.png" /><img id="liveagent_button_offline_573500000004Cl0" style="display: none; border: 0px none; " src="http://www.chenson.com.mx/img/icons/BotonchatterOff.png" />
<script type="text/javascript">
if (!window._laq) { window._laq = []; }
window._laq.push(function(){liveagent.showWhenOnline('573500000004Cl0', document.getElementById('liveagent_button_online_573500000004Cl0'));
liveagent.showWhenOffline('573500000004Cl0', document.getElementById('liveagent_button_offline_573500000004Cl0'));
});</script>
</div>       
<!--termina Salesforce-->        </body>
</html>