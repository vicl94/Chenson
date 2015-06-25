<?php
        $conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
        $db=mysql_select_db('chenson_com_mx_ecommerce', $conexion) or die('no existe la base de datos.');
        
		
		?><?php
		
		function ConexionDB(){
		$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
        $db=mysql_select_db('handbags', $conexion) or die('no existe la base de datos.');
			}
        ?>