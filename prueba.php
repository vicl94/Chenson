<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
    $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
	$query="select * from Blog where Reciente = 'Si'";
				$consulta=mysql_query($query, $conexion);		
				$nro_reg=mysql_num_rows($consulta);	
				if($nro_reg==0){
				echo "No se han encontrado registros para mostrar";
				}
				
				while ($filas=mysql_fetch_array($consulta)){
					$id=$filas['id'];
					$Titulo=$filas['Titulo'];
					$Imagen=$filas['Imagen'];
					$Resumen=$filas['Resumen'];
					$Enlace=$filas['Enlace'];
					
					
?>
<?php echo $Titulo ?>
<?php echo $Resumen ?>
<?php echo $Enlace ?>



<?php					
					}
?>					



