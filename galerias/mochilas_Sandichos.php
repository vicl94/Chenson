<html>
	<title>Mochilas |Mochilas Chenson</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
</html>
<?php 
include ('../conexion.php');
$consulta=mysql_query("select * from tienda where cuerpo= 'mochila' and marca = 'Sandichos'", $conexion);
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
	$consulta=mysql_query("select * from tienda  where cuerpo= 'mochila' and marca = 'Sandichos' limit $inicio,$reg_por_pagina",$conexion);
	$can_paginas=ceil ($nro_reg/$reg_por_pagina);
	
	
	$sql = ("SELECT * from tienda where cuerpo = 'mochila' and tamano = 'chico'");
	$result = mysql_query($sql);
    $numero = mysql_num_rows($result);
	
	
	$sqlMed = ("SELECT * from tienda where cuerpo = 'mochila' and tamano = 'mediano'");
	$resultMed = mysql_query($sqlMed);
    $numeroMed = mysql_num_rows($resultMed); 


	$sqlGde = ("SELECT * from tienda where cuerpo = 'mochila' and tamano = 'grande'");
	$resultGde = mysql_query($sqlGde);
    $numeroGde = mysql_num_rows($resultGde); 
	
	
	$sqlCamp = ("SELECT * from tienda where cuerpo = 'mochila' and tamano = 'camping'");
	$resultCamp = mysql_query($sqlCamp);
    $numeroCamp = mysql_num_rows($resultCamp); 
	
	
	/*filtrar por licencia*/
	$sql18 = ("SELECT * from tienda where cuerpo = 'mochila' and marca = '1818'");
	$result18 = mysql_query($sql18);
    $numero18 = mysql_num_rows($result18);
	
	$sqlBu = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Batman urban legend'");
	$resultBu = mysql_query($sqlBu);
    $numeroBu = mysql_num_rows($resultBu);
	
	$sqlCh = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Chenson'");
	$resultCh = mysql_query($sqlCh);
    $numeroCh = mysql_num_rows($resultCh);
	
	$sqlCl = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Changolos'");
	$resultCl = mysql_query($sqlCl);
    $numeroCl = mysql_num_rows($resultCl);
	
	$sqlFu = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Fulanitos'");
	$resultFu = mysql_query($sqlFu);
    $numeroFu = mysql_num_rows($resultFu);
	
	$sqlJl = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Justice League'");
	$resultJl = mysql_query($sqlJl);
    $numeroJl = mysql_num_rows($resultJl);
	
	$sqlMa = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Mafalda'");
	$resultMa = mysql_query($sqlMa);
    $numeroMa = mysql_num_rows($resultMa);
	
	$sqlNc = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Nici'");
	$resultNc = mysql_query($sqlNc);
    $numeroNc = mysql_num_rows($resultNc);
	
	$sqlPp = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Pink panther'");
	$resultPp = mysql_query($sqlPp);
    $numeroPp = mysql_num_rows($resultPp);
	
	$sqlPs = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Pascualina'");
	$resultPs = mysql_query($sqlPs);
    $numeroPs = mysql_num_rows($resultPs);
	
	$sqlSd = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Sandichos'");
	$resultSd = mysql_query($sqlSd);
    $numeroSd = mysql_num_rows($resultSd);
	
	$sqlSn = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Snoopy'");
	$resultSn = mysql_query($sqlSn);
    $numeroSn = mysql_num_rows($resultSn);
	
	$sqlSp = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Superman'");
	$resultSp = mysql_query($sqlSp);
    $numeroSp = mysql_num_rows($resultSp);
	
	$sqlYs = ("SELECT * from tienda where cuerpo = 'mochila' and marca = 'Yosha'");
	$resultYs = mysql_query($sqlYs);
    $numeroYs = mysql_num_rows($resultYs);
	/*Termina filtrar por licencia*/
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
        <div class= "titulos2">Mochilas</div>
				<div class="sub">Sandichos</div>
                
			</header>
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
        <!--prueba filtrar tamaño-->
         <div class="filtroTam">
        	<form form name="prueba" action="#" method="post" >
                <select name="cambiar" onchange='document.location.href=document.prueba.cambiar.options[document.prueba.cambiar.selectedIndex].value;
                return false;' style="adjuntar etiqueta de titulo utilizando el atributo &quot;for&quot;">
                    <option selected="selected">Filtrar por tamaño</option>	
                     <option value="mochilas_chicas.php">Chico (<?php echo $numero ?>)</option></a>
                      <option value="mochilas_medianas.php">Mediano (<?php echo $numeroMed ?>)</option>
                      <option value="mochilas_grandes.php">Grande (<?php echo $numeroGde ?>)</option>
                      <option value="mochilas_de_camping.php">Camping (<?php echo $numeroCamp ?>)</option>
                </select></form>
		</div>
        <!--prueba filtrar tamaño-->
        
        <!--prueba filtrar licencia-->
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
        <!--prueba filtrar licencia-->
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
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br />
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br />
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<div id="paginador">	
        <?php 
		if($nro_pagina>1)
			echo"<a href='mochilas_Sandichos.php?num=".($nro_pagina-1)."'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='mochilas_Sandichos.php?num=$i'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='mochilas_Sandichos.php?num=".($nro_pagina+1)."'>Siguiente</a>";		
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