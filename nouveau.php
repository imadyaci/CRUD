<!DOCTYPE html>
<html>
<head>
	<title>Ma premiere Application CRUD en PHP et MySQL</title>
</head>
<body>	
			<form action= "ajouter.php" method= "post">
				<strong>Titre:<input type= "text" name= "titre" required="required"></strong>
				<br><br>
				<strong>Contenu:<textarea type= "text" name= "contenu" required="required"></textarea></strong>
				<br><br>
				<input type="submit" value="Ajouter">
			</form>
</body>
</html>