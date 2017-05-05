<?php
	include("lib/connexion.php");
	$num= $_POST['numb'];
	$ntitre = $_POST['titre'];
	$ncontenu = $_POST['contenu'];
	$sql= "update Article set Titre ='$ntitre', Contenu = '$ncontenu' where ID= $num ";
	mysql_query($sql) or die("Erreur : ".mysql_error().'request='.$sql);

?>