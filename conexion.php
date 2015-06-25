<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Documento sin título</title>
        <!--light box-->
       
      
      
       
    </head>
    <body>
		<?php
        $conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
        $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
        
		
		
		function ConexionDB(){
		$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
        $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
			}
        ?>
        
        <?php function verListadoProductos($modo){?>
        <a href="carrito/carrito.php">ver carrito</a>
        <form id="form1" name="form1" method="post" action="">
          
             BUSCAR:
              <label for="buscar"></label>
              <input type="text" name="buscar" id="buscar" />
              <input type="submit" name="Aceptar" id="Aceptar" value="Enviar" />
         </form>
            
            
            <br>
        
            
            <?php
                $consulta=mysql_query("select * from tienda");
                
                if (isset($_POST['buscar'])){
                    $consulta=mysql_query("select * from tienda where sku like '%".$_POST['buscar']."%'");
                    }
                
                
                while($filas=mysql_fetch_array($consulta)){
					
					
                    $id=$filas['id'];
					$sku=$filas['sku'];
					$cuerpo=$filas['cuerpo'];
					$categoria=$filas['categoria'];
                    $marca=$filas['marca'];
                    $coleccion=$filas['coleccion'];
                    $tamano=$filas['tamano'];
					$alto=$filas['alto'];
					$largo=$filas['largo'];
					$ancho=$filas['ancho'];
                    $precio=$filas['precio'];
                    $imgGal=$filas['imgGal'];
					$Pxc=$filas['Pxc'];
					
                    
                    
                    
            ?>
           
                
                
            <tr>
              <?php if ($modo<>'editar'){?>
              
              <a class="fancybox-thumbs" data-fancybox-group="thumb" href="'.$reg{"grande"}.'"><img src="<?php echo $imagen; ?></a>" width="180px" height="162" /></div>
              <br>
              <?php echo $sku?>
              <?php echo $cuerpo?>
              <?php echo $marca?>
              <?php echo $tamano?>
              <?php echo $precio?>
              <form action="carrito/carrito.php" method="post" name="compra">
                <input name="id_txt" type="hidden" value="<?php echo $id?>" />
                <input name="sku" type="hidden" value="<?php echo $sku?>" />
                <input name="precio" type="hidden" value="<?php echo $precio?>" />
                <input name="cantidad" type="hidden" value="1" />
                <input name="Comprar" type="submit" value="Añadir al carrito" />
              </form>
                  
                 <?php  }else{?>
                <table
                <tr>
                <?php echo $id?>
              <td><img src="<?php echo $imagen; ?>" width="180px" height="162" /></td>
              <td><?php echo $sku?></td>
              <td><?php echo $cuerpo?></td>
              <td><?php echo $categoria?></td>
              <td><?php echo $marca?></td>
              <td><?php echo $coleccion?></td>
              <td><?php echo $tamano?></td>
              <td><?php echo $precio?></td>
              <td><?php echo $stock?></td>
              <td>
              
                
                 <?php }?>
                  
              </td>
             
            </tr>
            
            <?php }?>
            
          </table>
         <?php  }?>
         <?php
         function EncontrarReg($id){
             $consulta="select * from tienda where id=$id";
             $res=mysql_query($consulta);
             $filas=mysql_fetch_array($res);
             return $filas;
             
             }
          
         ?>
         <?php 
         function grabarCambios($id,$imagen,$sku,$cuerpo,$categoria,$marca,$coleccion,$tamano,$precio,$stock)
         {
             //Escribiendo en base de datos
             if (isset($id))
             {
                 $cad="UPDATE products set 
                 id=$id,
                 imagen=$imagen,
                 sku=$sku,
                 cuerpo=$cuerpo,
                 categoria=$categoria,
                 marca=$marca,
                 coleccion=$coleccion,
                 tamano=$tamano,
                 preci=$precio,
                 stock=$stock,";
                 mysql_query($cad);
                 
                 echo'<p>Registro actualizado!</p>';
                 }
             }
         ?>
     </body>
 </html>