<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>La fourmilière</title>
		<link rel="stylesheet" type="text/css" href="../css/ux-ui.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Affichage_permanent.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Marché.css" media="all"/>
		<link rel="shortcut icon" type="../image/svg" href="../svg/Logo.svg"/>
	</head>

	<body>
		<div id="Affichage_permanent" class="Affichage_permanent">
			<div id="Volet_gauche" class="Volet_gauche">
				<?php include "../html/Affichage_permanent.html"; ?>
			</div>
			<div id="Volet_droit" class="Volet_droit">
				<?php include "../html/Marché.html"; ?>
				<?php include "../html/Publication.html"; ?>
			</div>
		</div>
	</body>
</html>