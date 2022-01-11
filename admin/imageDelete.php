<?php

session_start();
require('db_config.php');

if(isset($_POST) && !empty($_POST['id'])){

		$sql = "DELETE FROM galeria WHERE id = ".$_POST['id'];
		$mysqli->query($sql);

		$_SESSION['success'] = 'Imagen eliminada correctamente.';
		header("Location: editar_galeria.php");
}else{
	$_SESSION['error'] = 'Por favor , Verifica los campos.';
	header("Location: editar_galeria.php");
}

?>