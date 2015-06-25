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
							position: '29.084076,-110.948696',
							info: '<h2>Dr. Noriega</h2>Domicilio de prueba<br/>Hermosillo Sonora<br/><b>No tel</b>',
							showInfo: true
						},
						
						
						
						
						
					]
				});
			});
		</script>
</body>
</html>