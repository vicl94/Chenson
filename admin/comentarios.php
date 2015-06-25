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

// borramos un comentario
if ( !empty($_GET['del']) ) {
	
	$query  = "DELETE FROM `comentarios` WHERE idComentario = {$_GET['del']}";
	$result = mysql_query($query, $dbConn);
		
	header( 'Location: comentarios.php?dele=true' );
	die;
	
}

// aprobamos un comentario
if ( !empty($_GET['apr']) ) {
	
	$query  = "UPDATE `comentarios` set estado = 'apto' WHERE idComentario = {$_GET['apr']}";
	$result = mysql_query($query, $dbConn);
		
	header( 'Location: comentarios.php?aprobar=true' );
	die;
	
}

// editamos el comentario
if ( !empty($_POST['submitEdit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['comentario']) ) 	$comentario 		= $_POST['comentario'];
	if ( !empty($_POST['idComentario']) ) 	$idComentario 		= $_POST['idComentario'];
	
	// completamos la variable error si es necesario
	if ( empty($comentario) ) 		$error['comentario'] 		= 'Es obligatorio tener un cuerpo';
	if ( empty($idComentario) ) 	$error['idComentario'] 		= 'Es obligatoria la id de comentario';
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// inserto los datos de registro en la db
		$query  = "UPDATE `comentarios` set comentario = '$comentario' WHERE idComentario = $idComentario";
		$result = mysql_query($query, $dbConn);
		
		header( 'Location: comentarios.php?edit=true' );
		die;
		
	}
		
}

// traemos listado de comentarios sin aprboar
$arrComentarios = array();
$query = "SELECT comentarios.idComentario, comentarios.comentario, comentarios.idNoticia, usuarios.usuario, noticias.titulo  
FROM `comentarios` 
INNER JOIN `usuarios` ON comentarios.idUsuario = usuarios.idUsuario 
INNER JOIN `noticias` ON comentarios.idNoticia = noticias.idNoticia 
WHERE comentarios.estado = 'sin validar' 
ORDER BY comentarios.idComentario ASC";
$resultado = mysql_query ($query, $dbConn);
while ( $row = mysql_fetch_assoc ($resultado)) {
	array_push( $arrComentarios,$row );
}

// si tenemos una categoria puntual
if ( !empty($_GET['id']) ) {
	// traemos una categoria
	$query = "SELECT idComentario, comentario FROM `comentarios` WHERE idComentario = {$_GET['id']}";
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
	<h2>Comentarios sin aprobar</h2>
	<? if ( !empty($_GET['aprobar']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">El comentario se marc&oacute; como apto con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['dele']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">El comentario ha sido borrada con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['edit']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">El comentario ha sido editado con &eacute;xito.</div>
	
	<? } ?>
	
	<div>
		<h3>Listado de Comentarios sin aprobar</h3>
		<table style="width:90%;padding:5px;border:1px solid #cccccc">
			<tr>
				<th style="background-color:#cccccc;padding:5px;">id</th>
				<th style="width:80%;background-color:#cccccc;padding:5px;">comentario</th>
				<th style="background-color:#cccccc;padding:5px;width:20%"></th>
			</tr>
			<? foreach ($arrComentarios as $comentario) { ?>
			<tr>
				<td style="padding:5px;"><? echo $comentario['idComentario']; ?></td>
				<td style="padding:5px;">
					<? echo $comentario['comentario']; ?><br />
					<i>Dijo <b><? echo $comentario['usuario']; ?></b> en <a href="../vernoticia.php?idNoticia=<? echo $comentario['idNoticia']; ?>"><? echo $comentario['titulo']; ?></a></i>
				</td>
				<td style="padding:5px;"><a href="comentarios.php?apr=<? echo $comentario['idComentario']; ?>">Aprobar</a> - <a href="comentarios.php?id=<? echo $comentario['idComentario']; ?>">Editar</a> - <a href="comentarios.php?del=<?= $comentario['idComentario'] ?>">Borrar</a>
			</tr>
			<? } ?>
		</table>
	</div>
	
	<? if ( !empty($_GET['id']) ) { ?>
		<div style="background-color:#ff8800;padding:5px; margin-top:10px;">
			<h3 id="add">Editar comentario</h3>
			<? if (!empty($error)) { ?>
				<ul>
				<? foreach ($error as $mensaje) { ?>
					<li><?= $mensaje ?></li>
				<? } ?>
				</ul>
			<? } ?>
			<form action="comentarios.php" method="post">
				<p>
					<label for="nombre">Comentario</label><br />
					<textarea name="comentario" rows="5" cols="50"><? echo $row['comentario']; ?></textarea>
				</p>
				<p>
					<input name="idComentario" type="hidden" value="<? echo $row['idComentario']; ?>" />
					<input name="submitEdit" type="submit" value="Editar" />
				</p>
			</form>
		</div>
	<? } ?>
	
</body>
</html>
