<?php

	$id_user=$_POST['idusuario'];
	$nom_user=$_POST['user'];
	$rol=$_POST['rol'];
	session_start();

	$_SESSION['S_ID_USER']=$id_user;
	$_SESSION['S_NOM_USER']=$nom_user;
	$_SESSION['S_ROL']=$rol;
?>