<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Mundo Chenson |Mochilas Chenson</title>
     <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
<meta name="description" content="Viaja con Chenson por por los destinos más increibles de de México" />     <!--box-->
     <link rel="stylesheet" href="../../css/box.css" type="text/css" media="screen" charset="utf-8">

	<script src="../../js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../../js/slider.js" type="text/javascript" charset="utf-8"></script>
    <!--box-->
     <link rel="stylesheet" type="text/css" href="../../css/style.css" />
     
     
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
      
      <!--acordeon secciones-->
       <link href="../../css/jimgMenukwicks.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../../js/jquery.js"></script><script type="text/javascript" src="../../js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="../../js/jquery-easing-compatibility.1.2.pack.js"></script>
        <script type="text/javascript" src="../../js/jquery.kwicks-1.5.1.pack.js"></script>
        <style type="text/css">
        .description {padding-left: 40px;}
        h1 {
        padding-left: 10px;
        font: normal 18px Georgia, "Times New Roman", Times, serif;
        }
        </style>
        <!--[if IE]>
        <script type="text/javascript">
        $().ready(function() {
            $(".jimgMenu ul").kwicks({max: 310, duration: 400, easing: "easeOutQuad"});
        });
        </script> 
        <![endif]-->
        <script type="text/javascript">
        $().ready(function() {
            $('.jimgMenu ul').kwicks({max: 310, duration: 300, easing: 'easeOutQuad'});
            });
        </script>
      <!--acordeon secciones-->
      
      <!--box-->
    </head>
    
    <body>
     <?php
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
?>
    	<div id="inicioblog">
    	<header>
        	<div id="header">
            	<a href="../../index.php" title="Ir al inicio"> <img src="../../img/logo.png" class="logo" /></a>
                <br /><br />
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="../../index.php">|Inicio|</a></li>
                        <li><a href="../../conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li><a href="../../tienda.php">|Productos|</a></li>
                        <li><a href="../../nuestras_marcas.php">|Nuestras marcas|</a></li>
                        <li><a href="../../donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="../../blog.php"> |Chenson news|</a></li>
                        
                    </ul>
            
            </div>
           
        </header>
        <div class= "titulos2">Conociendo México</div>
				<div class="sub5"></div>
                <center>
               <div class="jimgMenu">
  <ul>
  	<li id="salud"><a href="Salud.php">Salud</a></li>
    <li id="cultura"><a href="Cultura y esparcimiento.php">Cultura y esparcimiento</a></li>
    <li id="educacion"><a href="Educacion.php">Educación</a></li>
    <li id="mexico"><a href="Conociendo Mexico.php">Conociendo México</a></li>
    <li id="tecnologia"><a href="Tecnologia.php">Tecnología</a></li>
  </ul>
</div>
<br  style="clear:both"/>
<div class="description">
</div>
<hr style="width:100%;text-align:center;height:2px;border:1px;color:#e2e2e2;background-color:#e2e2e2;" />
                </center>
                <br />
               
                
                <!--Post 1-->
                 <?php 
				include ('../conexion.php');
				$query="select * from Blog where Categoria = 'Mexico'";
				$consulta=mysql_query($query, $conexion);		
				$nro_reg=mysql_num_rows($consulta);	
				if($nro_reg==0){
				echo "No se han encontrado registros para mostrar";
								}
			
				while ($filas=mysql_fetch_array($consulta)){
					$id=$filas['id'];
					$Titulo=$filas['Titulo'];
					$Imagen=$filas['Imagen'];
					$Resumen=$filas['Resumen'];
					$Enlace=$filas['Enlace'];
				?>
                <!--Post 1-->
                <div class="recientes">
                <h3 align="center"><?php echo $Titulo ; ?></h3>
                
                
                <center>
                <img src="../../<?php echo $Imagen ; ?>"  width="160px" height="120px" alt="<?php echo $Titulo ; ?>" />
                </center>
                   <br />              
                  <br />
                <?php echo $Resumen ; ?>
                 <br />                
               <a href="../../<?php echo $Enlace; ?>"  title="Ver artículo completo"> <p align="right" >Ver más</p></a>
                </div>
                <!--Post 4-->
                <?php }?>
                <!--Post 4-->
                <div class="archivos">
                Archivos
                <br />
                <br />
                <a href="" class="clase2"><p align="left">Octubre 2013</p></a>
                               
                <p align="left"></div>
        		</center>
                
          <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /><br /> <br /><br /> <br />
       <div id="accesor">
        	<a href="../../galerias/mochilas.php"><img src="../../img/pins/mochila.png" width="65" class="pins" class="zoom" title="Mochilas"/></a>
            <a href="../../galerias/mensajeros.php"><img src="../../img/pins/mensajero.png" width="65" class="pins" title="Mensajeros"/></a>
            <a href="../../galerias/portafolios.php"><img src="../../img/pins/portafolio.png" width="65" class="pins" title="Portafolios"/></a>
            <a href="../../galerias/mochila_con_ruedas.php"><img src="../../img/pins/carrito.png" width="65" class="pins" title="Mochila con ruedas"/></a>
            <a href="../../galerias/bolso.php"><img src="../../img/pins/bolso.png" width="65" class="pins" title="Bolso escolar"/></a>
            <a href="../../galerias/loncheras.php"><img src="../../img/pins/lonchera.png" width="65" class="pins" title="Lonchera"/></a>
            <a href="../../galerias/lapiceras.php"><img src="../../img/pins/lapicera.png" width="65" class="pins" title="Lapicera"/></a>
            <a href="../../galerias/funda_para_laptop.php"><img src="../../img/pins/portalap.png" width="65" class="pins" title="Funda para laptop"/></a>
            <a href="../../galerias/canguro.php"><img src="../../img/pins/canguro.png" width="65" class="pins" title="Canguro"/></a>
            <a href="../../galerias/valijas.php"><img src="../../img/pins/valija.png" width="65" class="pins" title="Valija"/></a>
            
           
        </div>
        <div id="varios">	
        	<div id="destacado">
            <div class="titco">Producto destacado</div>
            <BR /> <BR />
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
            <img class="scrollButtons left" src="../../images/leftarrow.png">
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
							<a href="http://www.chenson.com.mx/carrito/detalle.php?id=<?php echo $id;?>"><img src="../../<?php echo $imgGal;?>" alt="picture" width="100px"/></a>
							<h2><?php echo $sku;?></h2
						></div>
					</div>
					<?php  }?>
                </div>

				<div id="left-shadow"></div>
				<div id="right-shadow"></div>

            </div>

			<img class="scrollButtons right" src="../../images/rightarrow.png">

        </div>
        
            </div>
         
         <!--Termina producto destacado-->   
            
            
            </div>
            <br /><br /><br /><br />
            <!--inicia formulario -->
            <div id="suscribe">
            	<img src="../../img/boletin.jpg" width="250"/>
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
            
            <div id="redes">
            	<a href="../../contacto.html" ><img src="../../img/redes/correo.png" width="43" height="43" title="contacto" alt="contacto" class="redes" /></a><br/>
			<a href="http://www.facebook.com/chensonmochilas" target="_blank"><img src="../../img/redes/facebook.png" width="43" height="43" title="Facebook" alt="Facebook" /></a><br/>
			<a href="https://twitter.com/CHENSON_NYLON" target="_blank"><img src="../../img/redes/twitter.png" width="43" height="43" alt="twitter" title="Twitter" /></a><br/>
			<a href="http://www.youtube.com/CHENSONDEMEXICO" target="_blank"><img src="../../img/redes/youtube.png" width="43" height="43" alt="youtube" title="Youtube" /></a><br/>
			<a href=""><img src="../../img/redes/blog.png" width="43" height="43" alt="blog" title="blog Chenson" /></a><br/>
            </div>
        </div>
        <br /><br /><br /><br />
    <footer>
    	<div id="pie">
        	<div class="menuinf">
        	  	<a href="../../index.php">|Inicio | </a>
              	<a href="../../conoce_chenson.php"> |Conoce Chenson |</a>
              	<a href="../../tienda.php">  |Tienda| </a>
				<a href="../../nuestras_marcas.php">|Nuestras marcas|</a>
              	<a href="../../donde_comprar.php"> |Donde comprar | </a>
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
    </body>
</html>