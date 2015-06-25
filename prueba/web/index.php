<!DOCTYPE html>
<html>
<head>
<title>1818</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
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

</head>
<body>
	<?php include_once ("Sections/Header.php"); ?>
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
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/pic4.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">???</h2><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a>
   	  	</div>
        <div class="categorias">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/pic4.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">???</h2><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a>
   	  	</div>
   	  	<div class="categorias">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="img/pic5.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Photo 1</h2><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a>
   	  	</div>
   	  	<div class="categorias">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
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
        <div class="mapa">
        	<!--Mapa-->
            <div id="map" style="width:445px; height:400px;"></div>
            <script src="http://maps.google.com/maps/api/js?sensor=false&callback=init"></script>
            <script type="text/javascript">
                var map;
                var marker;
                
                
                function init(){
                    var image = new google.maps.MarkerImage('http://www.chenson.com.mx/1818.png', new google.maps.Size(40,30));
                    var mapOptions = {
                        center: new google.maps.LatLng( 20.644563,-103.332438),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP 
                        }
                        map = new google.maps.Map(document.getElementById("map"),mapOptions);
                        
                        var place = new google.maps.LatLng (20.644563,-103.332438);
                        marker= new google.maps.Marker({
                        position: place,
                        title:"Una sucursal de Chenson",
                        map: map,	
                        icon: image
                            });
                            
                        google.maps.event.addListener(marker,"click",showInfo);	
                }
                        function showInfo() {
                        map.setZoom(16);
                        map.setCenter(marker.getPosition());
                        var infowindow = new google.maps.InfoWindow({
                            content: "Chenson Gigantes y un monton de blablablas"
                        });
                        infowindow.open(map,marker);
                        }
                
                
            </script>
            <!--Termina mapa-->
            
        	</div>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="pie">
    <center>	
   <?php include_once ("Sections/footer.php"); ?>
</body>
</html>