
		<?php
        $conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');
        
		

		$mysqli = new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce");
        if ($mysqli->connect_errno) {
            echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }


		?><?php
		
		function ConexionDB(){
		$conexion=mysql_connect('localhost','root','67@.~G"xpDJC') or die ('no hay conexion con la base de datos');
        $db=mysql_select_db('handbags', $conexion) or die('no existe la base de datos.');
			}
        ?>
  