<html>
	<title>Mochilas |Mochilas Chenson</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
</html>
<?php 
include ('../conexion.php');
$consulta=mysql_query("select * from tienda where cuerpo= 'mochila'", $conexion);
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
	$can_paginas=ceil ($nro_reg/$reg_por_pagina);
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
        <div id="buscador">
          <form id="form1" name="form1" method="post" action="">
              BUSCAR:
              <label for="buscar"></label>
              <input type="text" name="buscar" id="buscar" />
              <input type="submit" name="Aceptar" id="Aceptar" value="Enviar" />
         </form> 
         
         </div>
         <!--galeria-->
        <div class= "titulos2">Mochilas</div>
				<div class="sub">Conoce nuestras marcas y licencias</div>
                
			</header>
            
    	
         
         
    	<!--<form id="form2" name="form1" method="post" action="../usuarios/pidodatos.php">
	  		<input type="submit" name="login" id="login" value="Ingresar" />
		</form>-->
		<br /><br /><br /><br />
       
		<!--filtrar tamaño-->
         <div class="filtroTam">
        	<form form name="prueba" action="#" method="post" >
                <select name="cambiar" onchange='document.location.href=document.prueba.cambiar.options[document.prueba.cambiar.selectedIndex].value;
                return false;' style="adjuntar etiqueta de titulo utilizando el atributo &quot;for&quot;">
                    <option selected="selected">Filtrar por tamaño</option>	
                     <option value="mochilas_chicas.php">Chico (<?php echo $numero ?>)</option></a>
                      <option value="mochilas_medianas.php">Mediano (<?php echo $numeroMed ?>)</option>
                      <option value="mochilas_grandes.php">Grande (<?php echo $numeroGde ?>)</option>
                </select></form>
		</div>
        <!--filtrar tamaño-->
        
        <!--filtrar licencia-->
        <div class="filtroLic">
        	<form form name="prueba2" action="#" method="post" >
                <select name="cambiar2" onchange='document.location.href=document.prueba2.cambiar2.options[document.prueba2.cambiar2.selectedIndex].value;
                return false;' style="adjuntar etiqueta de titulo utilizando el atributo &quot;for&quot;">
                	<option selected="selected">Filtrar por Licencia</option>	
                 	<option value="mochilas_1818.php">1818 (<?php echo $numero18 ?>)</option></a>
                      <option value="mochilas_Batman_urban_legend.php">Batman urban legend (<?php echo $numeroBu ?>)</option>
                      <option value="mochilas_Chenson.php">Chenson (<?php echo $numeroCh ?>)</option>
                      <option value="mochilas_Changolos.php">Changolos (<?php echo $numeroCl ?>)</option>
                      <option value="mochilas_Fulanitos.php">Fulanitos (<?php echo $numeroFu ?>)</option>
                      <option value="mochilas_Justice_League.php">Justice League (<?php echo $numeroJl ?>)</option>
                      <option value="mochilas_Mafalda.php">Mafalda (<?php echo $numeroMa ?>)</option>
                      <option value="mochilas_Nici.php">Nici (<?php echo $numeroNc ?>)</option>
                      <option value="mochilas_Pantera rosa.php">Pantera rosa (<?php echo $numeroPp ?>)</option>
                      <option value="mochilas_Pascualina.php">Pascualina (<?php echo $numeroPs ?>)</option>
                      <option value="mochilas_Sandichos.php">Sandichos (<?php echo $numeroSd ?>)</option>
                      <option value="mochilas_Snoopy.php">Snoopy (<?php echo $numeroSn ?>)</option>
                      <option value="mochilas_Superman.php">Superman (<?php echo $numeroSp ?>)</option>
                      <option value="mochilas_Yosha.php">Yosha (<?php echo $numeroYs ?>)</option>
                </select></form>
		</div>
        <!--filtrar licencia-->
        <!--filtrar Portalaptop-->
         <div class="filtroPlp">
         	<form action="#" method="post" name="Filtrar"><input name="Portalaptop" type="radio" value="mochilas.php" checked="checked" /><a href="mochila portalaptop.php" class="clase2">Portalaptop</a></form>
         </div>
         <!--filtrar Portalaptop-->
	        	
        
            
      
      
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
                <a href="mochilas_de_camping.php"><img src="../img/pins/camping.png" width="57" class="pins" title="Mochilas de camping"/></a>
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