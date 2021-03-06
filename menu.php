<html>
	<head>
		<title>
			Menú Projecte LDAP
		</title>
		<link rel="stylesheet" href="./menu.css">
	</head>
	<body>
		<h1>MENÚ PRINCIPAL</h1>
		<h2>Visualitzar un usuari</h2>
		<form action="http://zend-arclca.fjeclot.net/projecte/mostrar.php" method="GET">
			Identificador: <input type="text" name="usr" required><br>
			Unitat organitzativa: <input type="text" name="ou" required><br>
			<input type="submit" value="Buscar">
			<input type="reset" value="Reset">
		</form>
		
		<h2>Afegir un usuari</h2>
		<form action="http://zend-arclca.fjeclot.net/projecte/afegir.php" method="POST">
    		<div class="divform">
    			UID: <input type="text" name="uid" required><br>
    			Unitat organitzativa: <input type="text" name="unorg" required><br>
    			Número Id: <input type="number" name="num_id" required><br>
    			Id Grup: <input type="number" name="grup" required><br>
    			Directori personal: <input type="text" name="dir_pers" required><br>
    			Shell: <input type="text" name="sh" required><br>
    			CN: <input type="text" name="cn" required><br>
    		</div>
    		<div class="divform">
    			SN: <input type="text" name="sn" required><br>
    			Nom: <input type="text" name="nom" required><br>
    			Adreça Postal: <input type="text" name="adressa" required><br>
    			Mòbil: <input type="text" name="mobil" required><br>
    			Telèfon: <input type="text" name="telefon" required><br>
    			Títol: <input type="text" name="titol" required><br>
    			Descripció: <input type="text" name="descripcio" required><br>
    		</div>
			<input type="submit" value="Afegir">
			<input type="reset" value="Reset">
		</form>
		
		<h2>Esborrar un usuari</h2>
		<form action="http://zend-arclca.fjeclot.net/projecte/esborrar.php" method="POST">
			Identificador: <input type="text" name="usr" required><br>
			Unitat organitzativa: <input type="text" name="ou" required><br>
			<input type="submit" value="Esborrar">
			<input type="reset" value="Reset">
		</form>
		
		<h2>Modificar un usuari</h2>
		<form action="http://zend-arclca.fjeclot.net/projecte/modificar.php" method="POST">
			<h3>Usuari a modificar: </h3>
			Identificador: <input type="text" name="usr" required><br>
			Unitat organitzativa: <input type="text" name="ou" required><br>
		
			<h3>Camp a modificar: </h3>
			
			<input type="radio" name="camp" value="uidNumber" checked>
			Número Id <br>
			<input type="radio" name="camp" value="gidNumber">
			Id Grup <br>
			<input type="radio" name="camp" value="homeDirectory">
			Directori personal <br>
		
			<input type="radio" name="camp" value="loginShell">
			Shell <br>
			<input type="radio" name="camp" value="cn">
			CN <br>
			<input type="radio" name="camp" value="sn">
			SN <br>
		
			<input type="radio" name="camp" value="givenName">
			Nom <br>
			<input type="radio" name="camp" value="postalAddress">
			Adreça postal <br>
			<input type="radio" name="camp" value="mobile">
			Mòbil <br>
		
			<input type="radio" name="camp" value="telephoneNumber">
			Telèfon <br>
			<input type="radio" name="camp" value="title">
			Títol <br>
			<input type="radio" name="camp" value="description">
			Descripció <br>
			
			Nou valor: <input type="text" name="valor" required> <br>
			<input type="submit" value="Modificar">
			<input type="reset" value="Reset">
		</form>
		<a href="http://zend-arclca.fjeclot.net/projecte/index.php">Tancar Sessió</a>
	</body>
</html>