<?php
	$serveur='localhost';
	$user='root';
	$password='';
	$bdd='crud';
	mysql_connect($localhost,$user,$password) or die('Impossible de se connecter'.mysql_error());
	mysql_select_db($bdd) or die('Erreur au niveau de la BD '.mysql_errno());

?>