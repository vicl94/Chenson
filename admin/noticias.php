<?

// iniciamos session
session_start ();

// archivos necesarios
require_once 'config.php';
require_once 'conexion.php';
require_once 'esUsuario.php';

// obtengo puntero de conexion con la db
$dbConn = conectar();

// verificamos que no este conectado el usuario
if ( !empty( $_SESSION['usuario'] ) && !empty($_SESSION['password']) ) {
	$arrUsuario = esUsuario( $_SESSION['usuario'], $_SESSION['password'], $dbConn );
} 

// verificamos que sea un admin
if ( empty($arrUsuario) || $arrUsuario['tipo'] != 'admin' ) {
	header( 'Location: ../index.php' );
	die;
}

// borramos una noticia si obtenemos la variable GET del
if ( !empty($_GET['del']) ) {
	
	$query  = "DELETE FROM `noticias` WHERE idNoticia = {$_GET['del']}";
	$result = mysql_query($query, $dbConn);
		
	header( 'Location: noticias.php?dele=true' );
	die;
	
}

// agregamos una noticia en la db
// si se envio el formulario
if ( !empty($_POST['submit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['titulo']) ) 		$titulo 		= $_POST['titulo'];
	if ( !empty($_POST['copete']) ) 		$copete 		= $_POST['copete'];
	if ( !empty($_POST['cuerpo']) ) 		$cuerpo 		= $_POST['cuerpo'];
	if ( !empty($_POST['idCategoria']) ) 	$idCategoria 	= $_POST['idCategoria'];
	if ( !empty($_POST['fPublicacion']) ) 	$fPublicacion 	= $_POST['fPublicacion'];	
	
	// completamos la variable error si es necesario
	if ( empty($titulo) ) 	$error['titulo'] 		= 'Es obligatorio completar el t&iacute;tulo de la noticia';
	if ( empty($copete) ) 	$error['copete'] 		= 'Es obligatorio completar el copete de la noticia';
	if ( empty($cuerpo) ) 	$error['cuerpo'] 		= 'Es obligatorio completar el cuerpo de la noticia';
	if ( empty($idCategoria) ) 	$error['idCategoria'] 	= 'Es obligatorio seleccionar una categor&iacute;a para la noticia';
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// inserto los datos de registro en la db
		$fCreacion = date("Y-m-d H:i:s");
		$fModificacion = date("Y-m-d H:i:s");
		if ( empty($fPublicacion) ) $fPublicacion = date("Y-m-d H:i:s");
		$idUsuario = $arrUsuario['idUsuario'];
		$query  = "INSERT INTO `noticias` (titulo,copete,cuerpo,idCategoria,idUsuario,fCreacion,fModificacion,fPublicacion) VALUES ('$titulo','$copete','$cuerpo','$idCategoria','$idUsuario','$fCreacion','$fModificacion','$fPublicacion')";
		$result = mysql_query($query, $dbConn);
		header( 'Location: noticias.php?add=true' );
		die;
		
	}
		
}

// si se envio el formulario de edicion
if ( !empty($_POST['submitEdit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['idNoticia']) ) 		$idNoticia 		= $_POST['idNoticia'];
	if ( !empty($_POST['titulo']) ) 		$titulo 		= $_POST['titulo'];
	if ( !empty($_POST['copete']) ) 		$copete 		= $_POST['copete'];
	if ( !empty($_POST['cuerpo']) ) 		$cuerpo 		= $_POST['cuerpo'];
	if ( !empty($_POST['idCategoria']) ) 	$idCategoria 	= $_POST['idCategoria'];
	if ( !empty($_POST['fPublicacion']) ) 	$fPublicacion 	= $_POST['fPublicacion'];	
	
	// completamos la variable error si es necesario
	if ( empty($idNoticia) ) 	$error['idNoticia'] 		= 'Es obligatorio tener la id de la noticia que se desea modificar';
	if ( empty($titulo) ) 		$error['titulo'] 			= 'Es obligatorio completar el t&iacute;tulo de la noticia';
	if ( empty($copete) ) 		$error['copete'] 			= 'Es obligatorio completar el copete de la noticia';
	if ( empty($cuerpo) ) 		$error['cuerpo'] 			= 'Es obligatorio completar el cuerpo de la noticia';
	if ( empty($idCategoria) ) 	$error['idCategoria'] 		= 'Es obligatorio seleccionar una categor&iacute;a para la noticia';
	
	// si no hay errores editamos la noticia
	if ( empty($error) ) {
		
		
		// actualizamos la fecha de modificacion y de publicacion
		$fModificacion = date("Y-m-d H:i:s");
		if ( empty($fPublicacion) ) $fPublicacion = date("Y-m-d H:i:s");
		$idUsuario = $arrUsuario['idUsuario'];
		
		// inserto los datos de registro en la db
		$query  = "UPDATE `noticias` set titulo = '$titulo', copete = '$copete', cuerpo = '$cuerpo', idCategoria = $idCategoria, idUsuario = $idUsuario, fModificacion = '$fModificacion', fPublicacion = '$fPublicacion' WHERE idNoticia = $idNoticia";
		$result = mysql_query($query, $dbConn);
		
		header( 'Location: noticias.php?edit=true' );
		die;
		
	}
		
}

// traemos listado de categorias
$arrCategorias = array();
$query = "SELECT idCategoria, valor FROM `categorias` ORDER BY valor ASC";
$resultado = mysql_query ($query, $dbConn);
while ( $row = mysql_fetch_assoc ($resultado)) {
	array_push( $arrCategorias,$row );
}

// traemos listado de noticias
$arrNoticias = array();
$query = "SELECT idNoticia, titulo FROM `noticias` ORDER BY idNoticia DESC";
$resultado = mysql_query ($query, $dbConn);
while ( $row = mysql_fetch_assoc ($resultado)) {
	array_push( $arrNoticias,$row );
}
	
// si tenemos una categoria puntual
if ( !empty($_GET['id']) ) {
	
	// traemos una categoria
	$query = "SELECT idNoticia, titulo, copete, cuerpo, idCategoria, fPublicacion FROM `noticias` WHERE idNoticia = {$_GET['id']}";
	$resultado = mysql_query ($query, $dbConn);
	$row = mysql_fetch_assoc ($resultado);
} 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Blog Personal</title>
</head>

<body>

	<h1>Blog Personal</h1>
	<p>Bienvenido <?= $arrUsuario['usuario'] ?> - <a href="index.php">Panel de control</a> - <a href="../index.php?salir=true">Salir</a></p>
	<h2>Noticias</h2>
	<? if ( !empty($_GET['add']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La noticia se agreg&oacute; con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['dele']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La noticia ha sido borrada con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['edit']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La noticia ha sido editada con &eacute;xito.</div>
	<? } ?>
	
	<div>
		<h3>Listado de Noticias</h3>
		<table style="width:90%;padding:5px;border:1px solid #cccccc">
			<tr>
				<th style="background-color:#cccccc;padding:5px;">id</th>
				<th style="width:90%;background-color:#cccccc;padding:5px;">t&iacute;tulo</th>
				<th style="background-color:#cccccc;padding:5px;width:10%"></th>
			</tr>
			<? foreach ($arrNoticias as $noticias) { ?>
			<tr>
				<td style="padding:5px;"><? echo $noticias['idNoticia']; ?></td>
				<td style="padding:5px;"><? echo $noticias['titulo']; ?></td>
				<td style="padding:5px;"><a href="noticias.php?id=<? echo $noticias['idNoticia']; ?>">Editar</a> - <a href="noticias.php?del=<?= $noticias['idNoticia'] ?>">Borrar</a>
			</tr>
			<? } ?>
		</table>
	</div>
	
	<? if ( empty($_GET['id']) ) { ?>
		<div>
			<h3 id="add">Agregar nueva noticia</h3>
			<? if (!empty($error)) { ?>
				<ul>
				<? foreach ($error as $mensaje) { ?>
					<li><?= $mensaje ?></li>
				<? } ?>
				</ul>
			<? } ?>
			<form action="noticias.php" method="post">
			
				<p>
					<label for="titulo">T&iacute;tulo de la noticia</label><br />
					<input name="titulo" type="text" value="" />
				</p>
				<p>
					<label for="idCategoria">Categoría</label><br />
					<select name="idCategoria">
						<option value="">Seleccione una categoría</option>
						<option value="">------------------------</option>
						<? foreach ( $arrCategorias as $categoria ) { ?>
						<option value="<? echo $categoria['idCategoria']; ?>"><? echo $categoria['valor']; ?></option>
						<? } ?>
					</select>
				</p>
				<p>
					<label for="fPublicacion">Fecha de publicacion (aaaa-mm-dd hh:mm:ss) Ej: 2008-10-29 17:20:00 </label><br />
					<input name="fPublicacion" type="text" value="" />
				</p>
				<p>
					<label for="copete">Copete</label><br />
					<textarea rows="5" cols="50" name="copete"></textarea>
				</p>
				<p>
					<label for="cuerpo">Cuerpo</label><br />
					<textarea rows="10" cols="50" name="cuerpo"></textarea>
				</p>
				<p>
					<input name="submit" type="submit" value="Agregar" />
				</p>
			</form>
		</div>
	<? } ?>
	
	<? if ( !empty($_GET['id']) ) { ?>
		<div style="background-color:#ff8800;padding:5px; margin-top:10px;">
			<h3 id="add">Editar noticia</h3>
			<? if (!empty($error)) { ?>
				<ul>
				<? foreach ($error as $mensaje) { ?>
					<li><?= $mensaje ?></li>
				<? } ?>
				</ul>
			<? } ?>
			<form action="noticias.php" method="post">
				<p>
					<label for="titulo">T&iacute;tulo de la noticia</label><br />
					<input name="titulo" type="text" value="<? echo $row['titulo']; ?>" />
				</p>
				<p>
					<label for="idCategoria">Categoría</label><br />
					<select name="idCategoria">
						<option value="">Seleccione una categoría</option>
						<option value="">------------------------</option>
						<? foreach ( $arrCategorias as $categoria ) { ?>
						<option value="<? echo $categoria['idCategoria']; ?>" <? if ( $categoria['idCategoria'] == $row['idCategoria'] ) echo 'selected="selected"' ?>><? echo $categoria['valor']; ?></option>
						<? } ?>
					</select>
				</p>
				<p>
					<label for="fPublicacion">Fecha de publicacion (aaaa-mm-dd hh:mm:ss) Ej: 2008-10-29 17:20:00 </label><br />
					<input name="fPublicacion" type="text" value="<? echo $row['fPublicacion']; ?>" />
				</p>
				<p>
					<label for="copete">Copete</label><br />
					<textarea rows="5" cols="50" name="copete"><? echo $row['copete']; ?></textarea>
				</p>
				<p>
					<label for="cuerpo">Cuerpo</label><br />
					<textarea rows="10" cols="50" name="cuerpo"><? echo $row['cuerpo']; ?></textarea>
				</p>
				<p>
					<input name="idNoticia" type="hidden" value="<? echo $row['idNoticia']; ?>" />
					<input name="submitEdit" type="submit" value="Editar" />
				</p>
				
				
			</form>
		</div>
	<? } ?>
	
</body>
</html>
