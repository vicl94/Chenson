<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<link href="css/style_Min1080.css" rel='stylesheet' media="(min-width:1080px)" type='text/css' />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script>
<script src="jquery.mobilegmap.js"></script>


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

<title>Encuentra un distribuidor Chenson</title>
</head>

<body>
<?php include_once('secciones/menuAfuera.php'); ?>
<br /><br /><br /><br /><br /><br /><br />
<!--Columna filtro-->
	<div class="FiltroDC">
     	<div id="ColFiltroDC">
        	<p class="HeaderPie">Filtrar por:</p>
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
     <iframe name="tiendasPropias" id="TiendasPropias" src="Distribuidores/Tiendas-Propias.php" class="frameMap"></iframe>
 <br /><br />   <br /><br />   <br /><br />   <br /><br />   <br /><br />    
<?php include_once('secciones/pie.php'); ?>
</body>
</html>