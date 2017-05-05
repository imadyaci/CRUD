<?php
	include('lib/connexion.php');
	$requete= 'Select * from Article';
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
			echo substr($ligne[2],0,100).'<br>';
	?>
	<a href="details.php?num=<?php echo $ligne[0];?>">Lire la suite</a>
	<?php
		}

	?>
	<br><br>
	<a href="nouveau.php">
	<input type="button" value="Ajouter un article">
	</a>
</body>
</html>