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
		while ($ligne= mysql_fetch_array($resultats)) { ?>
			
			<form action= "modification.php" method= "post">
				<strong>Titre:<input type= "text" name= "titre" value= "<?php echo $ligne[1]; ?>"></strong>
				<br><br>
				<strong>Contenu:<textarea type= "text" name= "contenu"><?php echo $ligne[2]; ?></textarea></strong>
				<br><br>
				<input type="hidden" name ="numb" value="<?php echo $id_article ;?>">
				<input type="submit" value="Mettre à jour">
			</form>
	
	
	
	<?php	}
	?>
</body>
</html>