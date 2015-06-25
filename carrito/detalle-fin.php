	<html>
	 <title>Mochilas Chenson</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <meta name="robots" content="NOINDEX, NOFOLLOW" />
	<meta name="description" content="Chenson tiene para ti la más amplia variedad en mochilas escolares, maletas y accesorios para
 	viaje, conoce nuestros productos y adquiérelos en línea o en cualquiera de nuestras sucursales." />
    
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
    <script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
    </script>
</html>
<?php 
include ('../conexion.php');

$consulta=mysql_query("select * from tienda WHERE id=".$_REQUEST['id']);
mysql_close($conexion);
?>
<html>
	<head>
    <meta property="og:image" content="http://www.chenson.com.mx/detalle.php?id=<?php echo $id = $_REQUEST ?>"/>
        <!--box-->
     <link rel="stylesheet" href="../css/box.css" type="text/css" media="screen" charset="utf-8">

	<script src="../js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/slider.js" type="text/javascript" charset="utf-8"></script>
    <!--box-->

		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='../js/example.js'></script>       
<!--menu--> 
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
        }(document, 'script', 'facebook-jssdk'));
        </script>
	<!--termina plugin facebook-->
    <header>
        	<div id="header">
            	
                <img src="../img/logo.png" class="logo" />
                <br/> <br/>
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="../index.php">|Inicio|</a></li>
                        <li><a href="../conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li class="current_page_item"><a href="../tienda.php">|Productos|</a></li>
                        <li><a href="../donde_comprar.php">|Donde comprar|</a></li>
                        <li><a href="../nuestras_marcas.php">|Nuestras marcas|</a></li>
                        <li><a href="../blog.php"> |Chenson news|</a></li>
                    </ul>
              </div> 
              <!--<p align="right" >	  <a href="carrito/carrito.php">ver carrito</a></p>   -->
            </div>
    </header>
    <div id="cuerpodet">
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
			$coleccion=$filas['coleccion'];
			$Int=$filas['Int'];
			$Lat=$filas['Lat'];
			$Sup=$filas['Sup'];
			$Fte=$filas['Fte'];
			$Descripcion=$filas['Descripcion'];
			

			?>
            	
            <br><br><br><br>
		<div class="cajasola">
       <!--<a class="fancybox-thumbs" data-fancybox-group="thumb" href="--><?php/* echo $imagen*/?><!--">-->
       <div class="zoom">
           <div class="small">
           <img name="preview"  src="<?php echo $imgGal?>">
           </div><!--</a>-->
           <div class="large">
                <img name"preview" src="<?php echo $imgGal?>">
            </div>
		</div>
	</div>
    <br/>
	<!--miniaturas-->
     <div class="Vistas">
        <table width="450px" height="100px" border="0">
            <tr>
                <td width="50px">
                <img src="<?php echo $Fte;?>" name="frente" width="100px" onMouseOver="preview.src=frente.src"/>
                </td>
                <td>
                <img src="<?php echo $Int;?>" name="interior" width="100px" onMouseOver="preview.src=interior.src"/>
                </td>
                <td>
                    <img src="<?php echo $Lat;?>" name="lateral" width="100px" onMouseOver="preview.src=lateral.src"/>
                </td>
                <td>
                    <img src="<?php echo $Sup;?>" name="superior" width="100px" onMouseOver="preview.src=superior.src"/>
                </td>
            </tr>    
        </table>
      </div> 
<!--Termina minuiaturas-->		
			
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
        <table border="0" width="650"><tr>
        <td>	
        <div class="Marca">
            	<img src="../img/licencias/marcas/changolos_color.png" width="200px" />
        </div>
        <div class="Descripcion">
        	<h1><?php echo $Descripcion ?></h1>
        </div>
		<div class="cajadesprueba">
        	
			<center><H1>Descripción</H1></center>
            <p>Sku: <?php echo $sku ?></p>
            <p>Cuerpo: <?php echo $cuerpo ?></p>
			<p>Marca:	<?php echo $marca ?></p>
            <p>Tamaño: <?php echo $tamano ?></p>
            <p>Alto:	<?php echo $alto ?></p>
            <p>Largo:	<?php echo $largo ?></p>
            <p>Ancho:	<?php echo $ancho ?></p>
			<!--<p>Precio:	<?php //echo "$ ".getPrice($sku)." .00" ?>?></p>-->
            
		</div>
        <div class="Precio">
              <h1>Precio:</h1>
              <br> $ <?php  echo  $precio ?>.00
         	<div class="comprar"><img src="../img/icons/comprarOFF.png" name="compra" width="220px"  id="compra" onClick="MM_swapImage('compra','','../img/icons/comprarON.png',1)" onMouseOut="MM_swapImgRestore()"/></div>
         </div>
            </td>
		<?php
		} 
		?>
    
     <td>
     <form>
     
<input type="button" value="Volver a la galeria" name="volver" onClick="history.back()" class="btnvlv"/>
</form>

</td>
</tr>
<tr>
<td colspan="2">

<br>
<br>

 <!--Carrousel Relacionados--> 
	<!--Consultas Relacionados--> 
   <div class="carrusel">
	<?php 
		include ('../conexion.php');
		$query="select * from tienda where coleccion= '".rtrim(ltrim($coleccion))."'";
 		$consulta=mysql_query($query, $conexion);		
        $nro_reg=mysql_num_rows($consulta);	
        if($nro_reg>=5){
			?>
           <div id="wrapper">
        <div id="slider2">    
            <img class="scrollButtons left" src="../images/leftarrow.png">
			<div style="overflow: hidden;" class="scroll">
				<div class="scrollContainer">
                <?php
					$query="select * from tienda where coleccion= '".rtrim(ltrim($coleccion))."' and id <> '".$id."'";
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
					?>
					<div class="panel" id="panel_1">
						<div class="inside">
							<a href="http://www.chenson.com.mx/carrito/detalle.php?id=<?php echo $id;?>"><img src="../images/<?php echo $imgGal;?>" alt="picture" width="100px"/></a>
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
            </div>
      <!-- Fin Carrousel Relacionados-->
		 <?php }else{?>
 					  <div id="wrapper">
        <div id="slider2">    
            <img class="scrollButtons left" src="../images/leftarrow.png">
			<div style="overflow: hidden;" class="scroll">
				<div class="scrollContainer">
                <?php
					$query="select * from tienda where cuerpo= '".rtrim(ltrim($cuerpo))."' and id <> '".$id."'";
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
					?>
					<div class="panel" id="panel_1">
						<div class="inside">
							<a href="http://www.chenson.com.mx/carrito/detalle.php?id=<?php echo $id;?>"><img src="../images/<?php echo $imgGal;?>" alt="picture" width="100px"/></a>
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
            
            </div>
      <!-- Fin Carrousel Relacionados-->
		
		 <?php		
		 																		
				
			}
			 
			 mysql_close($conexion);
 	?>		
 <div class="suge"><h2> También te sugerimos: </h2></div>
  
</td>
</tr>
</table>
    </div>
	</body>
</html>