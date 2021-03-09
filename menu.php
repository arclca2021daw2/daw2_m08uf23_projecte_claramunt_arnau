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
			<input type="reset" value="Esborrar">
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
			<input type="reset" value="Esborrar">
		</form>
		
		<a href="http://zend-arclca.fjeclot.net/projecte/index.php">Tancar Sessió</a>
	</body>
</html>