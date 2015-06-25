<html>
	<title>Distrito Federal |Mochilas Chenson</title>
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Distribuidores de mochilas y accesorios para viaje en Distrito Federal" />
    <link rel="shortcut icon" type="image/x-icon" href="/../img/icons/chenson.ico">
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    
    <body>
    <?php
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
?>
    	<div id="cuerpoCtesXl">
    	<header>
        	<div id="headerCtesXl">
                <img src="../img/logo.png" class="logo" />
            </div>
        </header>
        
        <br /><br /><br />
      <?php
	    $query="select * from ctes_map where Estado='DF' ";
 		$consulta=mysql_query($query, $conexion);		
        $nro_reg=mysql_num_rows($consulta);	
       if($nro_reg==0){
	echo "No se han encontrado registros para mostrar";
	}
			?>
		<?php
			echo'<div class="contenedorCtesXl">';
			
			while ($filas=mysql_fetch_array($consulta)){
			$id=$filas['id'];
			$Nombre=$filas['Nombre'];
			$Calle=$filas['Calle'];
			$Telefono=$filas['Telefono'];
			$Ciudad=$filas['Ciudad'];
			$Estado=$filas['Estado'];
			$Coord=$filas['Coord'];
			?>
           
			<div class="cajaCtes">
				
				<p><?php echo $Nombre ?></p>
				<p><?php echo $Calle ?></p>
				<p><?php echo $Telefono ?></p>
				<p><?php echo $Ciudad ?></p>
				<p><?php echo $Estado ?></p>
				<p><a href="<?php echo $Coord ?>">Ver en google maps</a></p>
			</div>
			<?php
			}
			?>
             <div class= "titulosCteDf"><?php echo $Estado?></div>	
        </div>
       
        </div>
    </body>
</html>