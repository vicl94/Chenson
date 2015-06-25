<!DOCTYPE html>
<html>
<head>
<title>1818</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<!--Inicia banner-->
<link rel="stylesheet" type="text/css" href="css/banner-inicio.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

<!--termina banner-->


<script src="js/jquery-1.11.0.min.js"></script>
<!--hover amarillo-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/hover_pack.js"></script>
<!--Terminahover amarillo-->



</head>
<body>

	<!--Inicia banner-->
    <center>
     <div class="container demo-2">
            <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					<div class="sl-slide" data-orientation="horizontal"  >
						<div class="sl-slide-inner">
							
							<img src="img/banner-1.jpg" width="100%" />
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical"   >
						<div class="sl-slide-inner">
						
							
							<img src="img/banner-2.jpg" width="100%" />
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal"  >
						<div class="sl-slide-inner">
							<img src="img/banner-2.jpg" width="100%" />
						</div>
					</div>
					
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>
			</div><!-- /slider-wrapper -->

			

        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();
			});
		</script>
    </center>
<!--termina banner--> 
    <?php include_once ('secciones/menu.php'); ?>
  	<!--global minds-->
    		<center>
    		<img src="img/Global.png" width="40%">
            </center>
            <br>
            <div class="frase">
          	 "<b class="BFrase">Vive</b> vivo pa <b class="BFrase">vivir la vida</b> viviendo <b class="BFrase">mientras vives</b>"
			</div>
            <br><br>

    <!--Termina global minds-->
    <!--Categorias-->
    <div id="Categorias">
   	  <div class="content_middle">
   	  	<div class="categorias">
   	  		<a href="galeria.php?perfil=FLY" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/fly.png" width="100%" class="img-responsive" alt="1818 fLY"/><div class="b-wrapper"><p class="b-animate b-from-left    b-delay03 "><img src="img/Etiqueta-fly.jpg" width="50%" /></p></div>
           </a>
   	  	</div>
        <div class="categorias">
   	  		<a href="galeria.php?perfil=run" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/run.png" width="100%" class="img-responsive" alt="1818 Run"/><div class="b-wrapper"></h2><p class="b-animate b-from-right    b-delay03 "><img src="img/Etiqueta-Run.jpg" width="50%" /></p></div></a>
   	  	</div>
   	  	<div class="categorias">
   	  		<a href="galeria.php?perfil=walk" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/walk.png"  width="100%"class="img-responsive" alt="1818 Walk"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="img/Etiqueta-walk.jpg" width="50%" /></h2></div></a>
   	  	</div>
   	  	<div class="categorias">
   	  		<a href="galeria.php?perfil=black" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/pic6.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">esta si?</h2><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a>
   	  	</div>
   	  	<div class="clearfix"> </div>
   	  </div>
      <center>
    		<img src="img/local.png" width="40%">
            </center>
      </div>
      
    <!--Termina Categorias-->
    <!--Local-->
    <div id="Local">
        
<!--video-->
			<div class="video">
          		<img src="img/disquevideo.png" width="100%">
            </div>
<!--Termina video--> 
<!--suscribe-->	
			<div class="suscribe">
            	<img src="img/suscribete.png" width="100%">	
            </div>
<!--Termina suscribe-->       
    </div>
    <!--Termina local-->
    		<center>
    		<img src="img/independent.png" width="30%">
            </center>
    <!--album destacados-->
    <div class="content_middle_bottom">
   		<div class="header-left" id="home">
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="img/g1.jpg"  class="img-responsive" alt="image01"/>
							<span>Pointe</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="img/g1.jpg"  class="img-responsive" alt="image01"/>
							<div>
								<h3>pointe <span>/point/</span></h3>
								<p>Dance performed on the tips of the toes</p>
							</div>
						</div>
					</li>
					<li>
						<a href="#">
							<img src="img/g2.jpg"  class="img-responsive" alt="image02"/>
							<span>Port de bras</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/g3.jpg"  class="img-responsive" alt="image03"/>
							<span>Plié</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/g4.jpg"  class="img-responsive" alt="image04"/>
							<span>Adagio</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/g5.jpg"  class="img-responsive" alt="image05"/>
							<span>Frappé</span>
						</a>
					</li>
					<li>
						<a href="#image-6">
							<img src="img/g6.jpg"   alt="image06"/>
							<span>Glissade</span>
						</a>
					</li>
					<li>
						<a href="#image-7">
							<img src="img/g7.jpg"  class="img-responsive" alt="image07"/>
							<span>Jeté</span>
						</a>
					</li>
					<li>
						<a href="#image-8">
							<img src="img/g8.jpg"  class="img-responsive" alt="image08"/>
							<span>Piqué</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
		</div>
	 </div>
    <!--termina album destacados-->
    <!--Pie de página-->
    
<?php include_once ('secciones/pie.php'); ?>
    <!--Termina píe de página-->
</body>
</html>