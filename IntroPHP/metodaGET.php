<!doctype html>
<html>
	<head>
		<title>Forme</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php 
			//dodaj ode kod :)
			if(!empty($_GET)) {
				var_dump($_GET);
			}

			// if(isset($_GET['ime'])) {
			// 	echo $_GET['ime'];
			// }
		
		?>

		<h1>Forme</h1>
		<form action="" method="get">
			<b>Podaci:</b><br />
<!-- Unos imena -->
			<label>Ime: <input type="text" name="ime" value="" /> </label>
<!-- Unos lozinke -->
			<label>Lozinka: <input type="password" name="password" value="" /> <br /></label>
<!-- Radio botuni -->
			<b>Spol</b><br />
			<label>Muško: <input type="radio" name="spol" value="muško" /></label>
			<label>Žensko: <input type="radio" name="spol" value="žensko" /> <br /></label>
<!-- Checkboxes -->
			<b>Aktivnosti</b><br />
			<label>Plivanje <input type="checkbox" name="aktivnost" value="plivanje" /><br /></label>
			<label>Nogomet <input type="checkbox" name="aktivnost" value="nogomet" /><br /></label>
			<label>Rukomet <input type="checkbox" name="aktivnost" value="rukomet" /><br /></label>

		<input type="submit" name="submit" value="Prihvati" />
	</form>
	</body>
</html>