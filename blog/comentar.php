<?php
$comentario=$_POST['comentario'];
$grabar=fopen("com.html","a");
fwrite("$grabar","<p>$comentario</p>");
fclose($grabar);

include("../Dia-mundial-contra-el-cancer-de-mama.php");


?>