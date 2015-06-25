<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
	?>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Mundo Chenson |Mochilas Chenson</title>
     <meta name="description" content="Bienvenido al mundo de noticias Chenson, aquí podrás encontrar noticias de actualidad, tips de salud y más" />
     <meta name="robots" content="INDEX,FOLLOW" />
     <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
     <!--box-->
     <link rel="stylesheet" href="../css/box.css" type="text/css" media="screen" charset="utf-8">

	<script src="js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
    <!--box-->
     <link rel="stylesheet" type="text/css" href="../css/style.css" />
     
     
     <!--anatitycs-->
   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33704314-1']);
  _gaq.push(['_setDomainName', 'chenson.com.mx']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
      <!--anatitycs-->
      
      <!--acordeon secciones-->
       <link href="css/jimgMenukwicks.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
        <script type="text/javascript" src="js/jquery.kwicks-1.5.1.pack.js"></script>
        <style type="text/css">
        .description {padding-left: 40px;}
        h1 {
        padding-left: 10px;
        font: normal 18px Georgia, "Times New Roman", Times, serif;
        }
        </style>
        <!--[if IE]>
        <script type="text/javascript">
        $().ready(function() {
            $(".jimgMenu ul").kwicks({max: 310, duration: 400, easing: "easeOutQuad"});
        });
        </script> 
        <![endif]-->
        <script type="text/javascript">
        $().ready(function() {
            $('.jimgMenu ul').kwicks({max: 310, duration: 300, easing: 'easeOutQuad'});
            });
        </script>
      <!--acordeon secciones-->
      
      <!--box-->
      <!--menu-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='js/example.js'></script>       
<!--menu--> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<header>
        	<div id="header">
            	<a href="index.php" title="Ir al inicio"> <img src="../img/logo.png" class="logo" alt="Logotipo Chenson"/></a>
                <br /><br />
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="index.php">|Inicio|</a></li>
                        <li><a href="conoce_chenson.php">|Conoce Chenson|</a></li>
                        <li><a href="tienda.php">|Productos|</a></li>
                        <li><a href="nuestras_marcas.php">|Nuestras marcas|</a></li>
                        <li><a href="donde_comprar.php">|Donde comprar|</a></li>
                        <li class="current_page_item"><a href="blog.php"> |Chenson news|</a></li>
                    </ul>
            	</div>
        	</div>   
        </header>
	<center>
	<iframe src="http://mochilaschenson.wordpress.com/" width="1250px" height="650px">	</iframe>
	</center>
</body>
</html>