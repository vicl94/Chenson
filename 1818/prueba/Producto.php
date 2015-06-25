<?php include 'conexion.php';
$consulta=mysql_query("select * from 1818_2015", $conexion);
$nro_reg=mysql_num_rows($consulta);
mysql_close($conexion);
if($nro_reg==0){
	echo "No se han encontrado registros para mostrar";
	}
	//@$nro_pagina=$_GET['num'];
	$reg_por_pagina=12;
	
	if(isset($_GET['num'])){
		$nro_pagina=$_GET['num'];
		}
	else{
		$nro_pagina=1;
		}	
if (is_numeric($nro_pagina))
	$inicio=($nro_pagina-1)*$reg_por_pagina;	
	
	else{
	$inicio=0;
	}
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
	$consulta=mysql_query("select * from 1818_2015  limit $inicio,$reg_por_pagina",$conexion);
	$can_paginas=ceil ($nro_reg/$reg_por_pagina);

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_600px.css" rel='stylesheet' media="(max-width:640px)" type='text/css' />
<link href="css/style_Min1080.css" rel='stylesheet' media="(min-width:1080px)" type='text/css' />
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
</head>

<body onload="MM_preloadImages('Producto/Atras.jpg')">
	
	<div class="contenedor">
    <center>
    	<div id="paginador">
        	<p>Página:</p>
        	<?php 
		if($nro_pagina>1)
			echo"<a href='producto.php?num=".($nro_pagina-1)."' class='pag'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='producto.php?num=$i' class='pag'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='producto.php?num=".($nro_pagina+1)."' class='pag'>Siguiente</a>";		
		?>
        </div>
    </center>  
    <br /><br /><br /> 
    <?php
			echo'<div class="contenedor">';
			
			while ($filas=mysql_fetch_array($consulta)){
			$id=$filas['id'];
			$sku=$filas['sku'];
			$cuerpo=$filas['cuerpo'];
			$coleccion=$filas['coleccion'];
			$precio=$filas['precio'];
			?>
<div class="caja">
  
       



        	
                
              
                    <img src="img/Producto/1860862-9/Frente.jpg" alt="<?php echo $reg['sku'];?>" name="frente<?php echo $id;?>" class="imgProducto" onmouseover="MM_swapImage('frente<?php echo $id;?>','','img/Producto/1860862-9/Detalle.jpg',1)" onmouseout="MM_swapImgRestore()" ) />
                 
                    <div class="datos"><?php echo $coleccion;?></div>
                    <div class="datos"><?php echo $precio;?></div>
                     <form action="detalle.php?id=<?php echo $id?>" method="post" name="detalle">
           <input  type="submit" value="Detalle" onClick="detalle.php?id=<?php echo $id?>" formtarget="_top">
		</form>
          		</div>
          	
              <?php  }?>
          	
            
           
           
       
    </div>
     <center>
    	<div id="paginador">
        	<p>Página:</p>
        	<?php 
		if($nro_pagina>1)
			echo"<a href='producto.php?num=".($nro_pagina-1)."' class='pag'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='producto.php?num=$i' class='pag'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='producto.php?num=".($nro_pagina+1)."' class='pag'>Siguiente</a>";		
		?>
        </div>
    </center>   
</body>
</html>
