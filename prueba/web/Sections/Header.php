<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


	<!--start-banner-->
		<div class="banner" id="home">
			<div  id="top" class="callbacks_container">
			     <ul class="rslides" id="slider4">
			       <li>
	    				<div class="banner-3">
						</div>
					</li>
					 <li>
	    				<div class="banner-1">
						</div>
					</li>
                    <li>
	    				<div class="banner-2">
						</div>
					</li>
			     </ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>	
		<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
            <!--Menu-->
           <div id="BaseMenu"> 
           		<img src="img/Logo-Menu.jpg" class="imgMenu" width="5%">			
                <div id="menu">
                  <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Tienda</a></li>
                    <li><a href="#">Donde comprar</a></li>
                    <li><a href="#">Blog</a></li>
                     <li class="buscar"><a href="#"><img src="img/Buscar.png" width="12%" title="Buscar" alt="Buscar"></a></li>
                     <li class="carrito"><a href="#"><img src="img/Carrito.png" width="15%" title="Carrito de compras" alt="Carrito de compras"></a></li>
                  </ul>
                </div>
           <div id="Buscar">
           </div>     
   		 </div>
    		<!--Termina Menu-->        
	<!--end-banner-->	
