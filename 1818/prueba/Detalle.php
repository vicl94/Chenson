
<?php 
include ('conexion.php');

$consulta=mysql_query("select * from 1818_2015 WHERE id=".$_REQUEST['id']);
mysql_close($conexion);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sku;?></title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--Menu responsivo-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/responsee.js"></script>
<!--Termina Menu responsivo-->  
<script src="js/jquery-1.11.0.min.js"></script>

<!--hover amarillo-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/hover_pack.js"></script>
<!--Terminahover amarillo-->

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

<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#Filtro li a').click(function(event){
					var elem = $(this).next();
					if(elem.is('ul')){
						event.preventDefault();
						$('#Filtro ul:visible').not(elem).slideUp();
						elem.slideToggle();
					}
				});
			});
		</script>
        <!--Salto de ancla-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script>
			
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top
					}, 1000);
					return false;
				  }
				}
			  });
			});
			
		</script>
		
         <!--Salto de ancla-->
</head>
	
<body onload="MM_preloadImages('Producto/Atras.jpg')">
	<br /><br /><br /><br /><br />
            <!--Menu-->
           <?php include_once('secciones/menu.php'); ?>
    		<!--Termina Menu-->        
	 <?php
			while ($filas=mysql_fetch_array($consulta)){
			$id=$filas['id'];
			$sku=$filas['sku'];
			$cuerpo=$filas['cuerpo'];
			$tamano=$filas['tamano'];
			$alto=$filas['alto'];
			$largo=$filas['largo'];
			$ancho=$filas['ancho'];
			$precio=$filas['precio'];
			$coleccion=$filas['coleccion'];
			$descripcion=$filas['descripcion'];
			$color=$filas['color'];
			$litros=$filas['litros'];
			$material=$filas['material'];
			$perfil=$filas['perfil'];
			

			?>
   
     <!--Producto-->
     <div id="Descrpicion">
     	<img src="img/1818-<?php echo $perfil;?>.png" class="logoDesc" />
     	<p class="coleccion"><?php echo $coleccion;?></p>
        <p class="sku"> <?php echo $sku;?></p>
        <p class="sku"><?php echo $descripcion;?></p>
             <div class="DescLarga">
     			<p align="justify"><?php echo $reg['descripcion'];?></p>
              <div class="Colores">
              <p class="sku">Colores disponibles:</p>
              	<img src="img/Producto/18600000-0/color.jpg" width="25%" />
                <img src="img/Producto/18600000-0/Rosa.jpg" width="25%" />
              </div>
     			</div>
		<br /><br />
        
     </div>
     <a href="#">
        	<div id='content' class="AgregarCarrito">
            	<P>Añadir al carrito</P>
            </div>
       	</a>
     <div id="Miniaturas">
     <table width="15%" border="0">
     	<tr>
          	<td><img src="img/Producto/18600000-0/Frente.jpg" width="38%" name="frente"  OnMouseOver="preview.src=frente.src" /></td>
        </tr>
        <tr>
            <td><img src="img/Producto/18600000-0/Atras.jpg" width="38%" name="Atras"  OnMouseOver="preview.src=Atras.src" /></td>
        </tr>
        <tr>
            <td><img src="img/Producto/18600000-0/Detalle.jpg" width="38%"  name="Detalle"  OnMouseOver="preview.src=Detalle.src" /></td>
        </tr>
        <tr>
            <td><img src="img/Producto/18600000-0/Lateral.jpg" width="38%"  name="lateral"  OnMouseOver="preview.src=lateral.src" /></td>
        </tr>  
        <tr>
            <td><img src="img/Producto/18600000-0/Referencia.jpg" width="38%" name="Referencia"  OnMouseOver="preview.src=Referencia.src" /></td>
        </tr>
	</table>
</div>
     <div id="Producto">
     	<img src="img/Producto/18600000-0/Frente.jpg" width="60%" name="preview" />
     </div>
     
      <center>
   	<div id="especificaciones">
    
      <table width="100%" class="TablaEsp">
  <tr>
    <td width="16%" class="HeaderEsp"><p>Altura</p></td>
    <td width="16%" class="HeaderEsp"><p>Ancho</p></td>
    <td width="16%" class="HeaderEsp"><p>Largo</p></td>
    <td width="16%" class="HeaderEsp">Capacidad Lt</td>
    <td width="16%" class="HeaderEsp"><p>Portalaptop:</p></td>
    <td width="50%" colspan="2" class="HeaderEsp">Materiales:</td>
  </tr>
  <tr>
    <td><?php echo $alto;?> CM</td>
    <td><?php echo $ancho;?> CM</td>
    <td><?php echo $largo;?> CM</td>
    <td><?php echo $litros;?> L</td>
    <td><img src="img/laptop.png" width="30%" />15&quot;</td>
    <td width="60%"><?php echo $material; ?></td>
    
  </tr>
  </table>

  
        <p class="sku">&nbsp;</p>
   	</div>
    <?php } ?>
    <br /><br /><br /><br /><br /><br /><br /><br /><br />
     <!--Termina píe de página-->
    <?php include_once('secciones/pie.php'); ?>
    <!--Termina píe de página-->

</body>
</html>
