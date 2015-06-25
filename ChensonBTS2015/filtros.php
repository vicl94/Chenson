<?php 

require ("conexion.php");


function getLicencia($target,$genero,$cuerpo)
{
	$conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');
	$query    =  "
      
      select marca from chenson_bts_2015 
      where Target = 

          case when '" .$target. "' = '' then Target
            else '". $target ."'
          end

      and Cuerpo = 

          case when '" .$cuerpo. "' = '' then Cuerpo
            else '". $cuerpo ."'
          end

      and Genero = 

          case when '" .$genero. "' = '' then Genero
            else '". $genero ."'
          end

      group by marca

      "; 
	$res    =  mysqli_query($conexion,$query) or die("Problemas al filtrar sus resultados:".mysql_error());
	return $res;

}

function getCuerpo($target,$genero,$cuerpo)
{
	$conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');
	$query    =  "
      
      select cuerpo from chenson_bts_2015 
      where Target = 

          case when '" .$target. "' = '' then Target
            else '". $target ."'
          end

      and Cuerpo = 

          case when '" .$cuerpo. "' = '' then Cuerpo
            else '". $cuerpo ."'
          end

      and Genero = 

          case when '" .$genero. "' = '' then Genero
            else '". $genero ."'
          end

      group by cuerpo

      "; 
	$res    =  mysqli_query($conexion,$query) or die("Problemas al filtrar sus resultados:".mysql_error());
	return $res;
}

function getLinea($target,$genero,$cuerpo)
{
	$conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');
	$query    =  "
      
      select linea from chenson_bts_2015 
      where Target = 

          case when '" .$target. "' = '' then Target
            else '". $target ."'
          end

      and Cuerpo = 

          case when '" .$cuerpo. "' = '' then Cuerpo
            else '". $cuerpo ."'
          end

      and Genero = 

          case when '" .$genero. "' = '' then Genero
            else '". $genero ."'
          end

      group by linea

      "; 
	$res    =  mysqli_query($conexion,$query) or die("Problemas al filtrar sus resultados:".mysql_error());
	return $res;
}

function getColor($target,$genero,$cuerpo)
{
	$conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');
	$query    =  "
      
      select color from chenson_bts_2015 
      where Target = 

          case when '" .$target. "' = '' then Target
            else '". $target ."'
          end

      and Cuerpo = 

          case when '" .$cuerpo. "' = '' then Cuerpo
            else '". $cuerpo ."'
          end

      and Genero = 

          case when '" .$genero. "' = '' then Genero
            else '". $genero ."'
          end

      group by color

      "; 
	$res    =  mysqli_query($conexion,$query) or die("Problemas al filtrar sus resultados:".mysql_error());
	return $res;
}