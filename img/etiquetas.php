<!DOCTYPE html>
<html>
	
	<head>
    	<style  type="text/css">
		.contenedor{
			width:765px;
			height:792px;
			background-color:#FFF;
			}
		.caja{
			width:170px;
			height:294px;
			font-size:12px;
			text-align:center;
			float:left;
			text-align:center;
			margin:0px;
			border: solid #000 1px;
			padding:5px;
			overflow: hidden;
			}	
		.b{
		font-size:20px;	
			}
		.b2{
		font-size:18px;	
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
                $consulta=mysql_query("select * from Etiquetas   limit $inicio,$reg_por_pagina",$conexion);
                $can_paginas=ceil ($nro_reg/$reg_por_pagina);
            ?>	
        
    	
	</head>
	<body>	
    	 
         	
         <center>
    	<div class="contenedor"> 
			<?php
                    
                    
                    while ($filas=mysql_fetch_array($consulta)){
	$id=$filas['id'];
	$sku=$filas['sku'];
	$marca=$filas['marca'];
	$coleccion=$filas['coleccion'];
	$cuerpo=$filas['cuerpo'];
	$tamano=$filas['tamano'];
	$pxc=$filas['pxc'];
	$precio=$filas['precio'];
	$qr=$filas['qr'];
	$promo=$filas['promo'];
                    ?>
               
                    
        
        	<div class="caja">
        
                    
                    
                       
                        
                      <b class="b"> <?php echo $sku ?></b><br>
                      <b class="b2">  <?php echo $marca ?><br></b>
                       <?php echo $coleccion ?><br>
                        <?php echo $cuerpo ?><br>
                        <?php echo $tamano ?><br>
                      <b class="b2"><?php  echo  $precio ?></b><br>
                        <img src="<?php echo $qr; ?>" width="130px"> 
                        
                  
            </div>
            
             <?php
                    }
                    
            ?>	
               </div>     
           
          </center>
        
         
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