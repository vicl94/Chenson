<?php 


function getBetterSearch($text)
{
	$sku 	= getCountSearch("Sku",$text);
	$marca	= getCountSearch("Marca",$text);
	$cuerpo	= getCountSearch("Cuerpo",$text);
	$color	= getCountSearch("Color",$text);

	$key = max($sku, $marca, $cuerpo, $color);

	if($sku == $key)
		return "Sku";
	elseif ($marca == $key) 
		return "Marca";
	elseif ($cuerpo == $key)
		return "Cuerpo";
	elseif ($color == $key)
		return "Color";
	else
		return "false";
}
function getCountSearch($field,$text)
{
	$conexion=new mysqli("172.16.0.121", "root", '67@.~G"xpDJC', "chenson_com_mx_ecommerce") or die ('no hay conexion con la base de datos');	
	$query    =  "select count(sku) as Num from chenson_bts_2015 where ".$field." like '%". $text ."%' ";
	$total    =  mysqli_query($conexion,$query) or die("Problemas al filtrar sus resultados:".mysql_error());
	foreach ($total as $item ) 
	{
	  $num =  $item['Num'];
	}
	return intval($num);

}