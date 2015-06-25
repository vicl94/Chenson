<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<link href="css/style_Min1080.css" rel='stylesheet' media="(min-width:1080px)" type='text/css' />
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <!--Inicia Mapa-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/gmap3.js"></script>
    <style>
     
      .gmap3{
     
        border: 1px dashed #C0C0C0;
        width: 79%;
        height: 500px;
		float: right;
      }
    </style>
    <script src="js/jquery.distribuidores.js"></script>
 <!--Termina Mapa-->    
<!--Filtro distribuidores-->    
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
<!--Filtro distribuidores-->

<title>Encuentra tu 1818</title>
</head>

<body>
<?php include_once('secciones/menu.php'); ?>
<br /><br /><br /> <br />
<!--Columna filtro-->
	<div class="FiltroDC">
     	<div id="ColFiltroDC">
        	<p class="HeaderPie">Encuentra tu 1818:</p>
        	<ul id="Filtro">
                <li><a href="#">Tiendas Chenson</a></li>
                <li><a href="Donde-comprar.php" target="Distribuidores">Distribuidores autorizados</a></li>
                <li><a href="#">Chenson Internacional</a>
                    <ul>
                        <li><a href="#">Guatemala</a></li>
                        <li><a href="#">Costa Rica</a></li>
                        <li><a href="#">El Salvador</a></li>
                        <li><a href="#">Honduras</a></li>
                        <li><a href="#">Rep. Dominicana</a></li>
                        <li><a href="#">Nicaragua</a></li>
                         <li><a href="#">Panamá</a></li>
                        
                    </ul>
                </li>
                
                
            </ul>
        </div>
     </div>
     <!--Termina Columna filtro-->	
     <div id="test1" class="gmap3"></div>
 <br /><br />   <br /><br />   <br /><br />   <br /><br />   <br /><br /> <br />   
<?php include_once('secciones/pie.php'); ?>
</body>
</html>