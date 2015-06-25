
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1818</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<link href="css/style_Min1080.css" rel='stylesheet' media="(min-width:1080px)" type='text/css' />
<!--Menu responsivo-->

  <script type="text/javascript" src="js/responsee.js"></script>
<!--Termina Menu responsivo-->  
<script src="js/jquery-1.11.0.min.js"></script>


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
</head>
	
<body onload="MM_preloadImages('Producto/Atras.jpg')">

            <!--Inicia Menu-->
<?php include_once('secciones/menu.php'); ?>	
<!--Termina menu--> 
	
  	<!--global minds-->
            <br><br> <br><br>
    		<center>
    		<img src="img/Global.png" width="40%">
            </center>
            <br>
            <div class="frase">
          	 "<b class="BFrase">Vive</b> vivo pa <b class="BFrase">vivir la vida</b> viviendo <b class="BFrase">mientras vives</b>"
			</div>
            <br><br>

   
    <!--Termina global minds-->
<!--Columna filtro-->
<br /><br />
     	<div id="ColFiltro">
        	<p class="HeaderPie">Filtrar por:</p>
        	<ul id="Filtro">
                <li><a href="#">Cuerpo</a>
                    <ul>
                        <li><a href="#">Mochila</a></li>
                        <li><a href="#">Mensajero</a></li>
                        <li><a href="#">Valija</a></li>
                        <li><a href="#">Canguro</a></li>
                        <li><a href="#">Bolso</a></li>
                    </ul>
                </li>
                <li><a href="#">Línea</a>
                    <ul>
                        <li><a href="#">Preescolar niño</a></li>
                        <li><a href="#">Preescolar niña</a></li>
                        <li><a href="#">Primaria niño</a></li>
                        <li><a href="#">Primaria niña</a></li>
                        <li><a href="#">Teens chavo</a></li>
                        <li><a href="#">Teens chava</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">Color</a>
                    <ul>
                        <li><a href="#">Negro</a></li>
                        <li><a href="#">Azul</a></li>
                        <li><a href="#">Rojo</a></li>
                        <li><a href="#">Rosa</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
     <!--Termina Columna filtro-->
     <!--Inicia Galeria de productos--> 
     	<iframe src="producto.php" class="frame" frameborder="0"></iframe>
       
     <!--Termina Galeria de productos-->
     
     <!--Inicia Tabla pie--> 
 
 <?php include_once('secciones/pie.php'); ?>
    <!--Termina píe de página-->

</body>
</html>
