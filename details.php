<?php
	include('lib/connexion.php');
	$id_article= $_GET['num'];
	$requete= "Select * from Article where ID = $id_article";
	$resultats= mysql_query($requete);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ma premiere Application CRUD en PHP et MySQL</title>
</head>
<body>
	<?php
		while ($ligne= mysql_fetch_array($resultats)) {
			//echo $ligne[0].'<br>';
			echo '<h1>'.$ligne[1].'</h1>'.'<br>';
			echo $ligne[2].'<br>';
	?>
	
	<a href="supprimer.php?num=<?php echo $ligne[0]; ?>">Supprimer</a>;
	<a href="modifier.php?num=<?php echo $ligne[0]; ?>">Modifier</a>;
	<?php	}
	?>
</body>
</html>