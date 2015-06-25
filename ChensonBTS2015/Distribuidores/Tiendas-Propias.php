<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<link href="../css/style_Min1080.css" rel='stylesheet' media="(min-width:1080px)" type='text/css' />
</head>

<body>
	<!--Frame mapa-->	
     
    	<div class="gmap" data-center="Guadalajara, Jalisco" data-zoom="6">
			
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script>
		<script src="../js/jquery.mobilegmap.js"></script>
		<script>
			$(document).ready(function(){
				// your google map container
				$('.gmap').mobileGmap({
					markers: [
						{
							position: 'Alvaro Obregon 204 A  San Juan de dios ',
							info: '<h2>Chenson Cabañas</h2>Alvaro Obregon 204 A<br/> San Juan de dios<br/> Guadalajara, Jal<br/><b>3618-6248</b>',
							showInfo: true
						},
						{
							position: 'González Gallo 1818 El Rosario 44898 Guadalajara, Jal',
							info: '<h2>Centro de distribución Chenson</h2>González Gallo 1818<br/> El Rosario 44898<br/> Guadalajara, Jal<br/><b>018002436766</b>',
							showInfo: true
						},
						{
							position: 'Antonio Rosales 23 Reforma',
							info: '<h2>Chenson Gigantes</h2>Antonio Rosales 9<br/> Analco <br/> Guadalajara, Jal<br/><b>3618-4259 </b>',
							showInfo: true
						},
						{
							position: '20.6725501,-103.334266',
							info: '<h2>Chenson 467</h2>Alvaro Obregon 467 A<br/> San Juan de dios  <br/> Guadalajara, Jal<br/><b>3618-0079</b>',
							showInfo: true
						},
						{
							position: '19.439109,-99.1307711',
							info: '<h2>Chenson Bolivia</h2>República de Bolivia # 41 Local  B<br/> Col Centro  <br/> Delegación Cuauhtémoc, México DF<br/><b>5772-3759</b>',
							showInfo: true
						},
						
					]
				});
			});
		</script>
</body>
</html>