<?php
	include("lib/connexion.php");
	$num= $_GET['num'];
	$sql= "Delete from Article where ID=$num";
	mysql_query($sql) or die("Erreur : ".mysql_error());

?>