<!DOCTYPE html>
<html>
	
	<head>
    	<style  type="text/css">
		.contenedor{
			width:900px;
			height:792px;
			background-color:#FFF;
			}
		.caja{
			width:250px;
			height:150px;
			font-size:12px;
			float:left;
			border: solid #000 1px;
			padding:5px;
			overflow: hidden;
			}	
		#texto{
			width:140px;
			heigth:150px;
			float:left;
			}	
		#codigo{
			width:110px;
			heigth:150px;
			float:right;
			}		
		.b{
		font-size:16px;
		text-align:left;
			}
		.b2{
		font-size:20px;	
			}	
		
		.Qr{
			float:right;
			top:10px;
			}
		
		</style>
        
        
		<!--box-->
     
        
	<?php 
            include ('conexion.php');
            
            $consulta=mysql_query("select * from Etiquetas ", $conexion);
            $nro_reg=mysql_num_rows($consulta);
            mysql_close($conexion);
            if($nro_reg==0){
                echo "No se han encontrado registros para mostrar";
                }
                //@$nro_pagina=$_GET['num'];
                $reg_por_pagina=21;
                
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
                $consulta=mysql_query("select * from Etiquetas   limit $inicio,$reg_por_pagina",$conexion);
                $can_paginas=ceil ($nro_reg/$reg_por_pagina);
            ?>	
        
    	
	</head>
	<body>	
    	 
         	
         
    	<div class="contenedor"> 
			<?php
                    
                    
                    while ($filas=mysql_fetch_array($consulta)){
	$id=$filas['id'];
	$sku=$filas['sku'];
	$coleccion=$filas['coleccion'];
	$descripcion=$filas['descripcion'];
	$licencia=$filas['licencia'];
	$precio=$filas['precio'];
	$img=$filas['img'];
	$pxc=$filas['pxc'];
	$portalaptop=$filas['portalaptop'];
                    ?>
               
                    
        
        	<div class="caja">
            	<div id="texto">
        
                      <b class="b">SKU: </b><?php echo $sku ?><br>
                      <b class="b">Licencia: </b><?php echo $licencia ?><br>
                      <b class="b">Desc:</b> <?php echo $descripcion ?><br>
                      <b class="b">Colección: </b><?php echo $coleccion ?><br>
                      <b class="b">Empaque: </b><?php  echo  $pxc ?>Pz.<br>
                      <b class="b">Precio: </b>$<?php echo $precio; ?>.00 <br>
                      <b class="b">Portalaptop: </b><?php echo $portalaptop; ?> <br>
                  </div>
                  <div id="codigo">     
                     <img src="<?php echo $img ?>" width="120px" class="Qr">
                 </div>      
                  
            </div>
            
             <?php
                    }
                    
            ?>	
               </div>     
           
         
         
            <div id="paginador">	
        <?php 
		if($nro_pagina>1)
			echo"<a href='etiquetas.php?num=".($nro_pagina-1)."'> Anterior</a>";
			
			for($i=1; $i<=$can_paginas;$i++){
				if ($i==$nro_pagina)
					echo $i."";
				else
					echo"<a href='etiquetas.php?num=$i'>$i</a>";
				}
		if($nro_pagina<$can_paginas)		
			echo"<a href='etiquetas.php?num=".($nro_pagina+1)."'>Siguiente</a>";		
		?>
        
        </div>	
         
	
	</body>
</html>