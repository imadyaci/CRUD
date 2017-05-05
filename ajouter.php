<?php
	include("lib/connexion.php");
	$ntitre = $_POST['titre'];
	$ncontenu = $_POST['contenu'];
	$sql = "INSERT INTO Article VALUES(0,'$ntitre','$ncontenu')";
	mysql_query($sql) or die('Erreur: '.mysql_error().'request'.$sql);
	echo "Les données sont ajoutées avec succée";

?>
<br><br>
<a href="index.php">
	<input type="button" value="Retourner a la page principale">
	</a>
