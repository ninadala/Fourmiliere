<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>La fourmilière</title>
		<link rel="stylesheet" type="text/css" href="../css/DesignUI.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/AffichagePermanent.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/AffichageVoletGauche.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/AffichageVoletDroit.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Publication.css" media="all"/>
		<!-------------------------------------------------------------------- 
				                  NOS CSS CI-DESSOUS
		--------------------------------------------------------------------->
		<link rel="stylesheet" type="text/css" href="../css/Marché-Accueil.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Marché-RésultatRecherches.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Marché-DéposerAnnonce.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="../css/Annuaire-Accueil.css" media="all"/>
		<!------------------------------------------------------------------->
		<link rel="shortcut icon" type="../image/svg" href="../svg/Logo.svg"/>
	</head>

	<body>
		<div id="Affichage_permanent" class="Affichage_permanent">
			<div id="Volet_gauche" class="Volet_gauche">
				<?php include "../html/AffichageVoletGauche.html"; ?>
			</div>
			<div id="Volet_droit" class="Volet_droit">
				<!-------------------------------------------------------------------- 
				                       NOS HTML CI-DESSOUS
				--------------------------------------------------------------------->									   
				<?php //include "../html/Marché-DéposerAnnonce.html"; ?>
				<?php //include "../html/Marché-RésultatRecherches.html"; ?>
				<?php //include "../html/Marché-Accueil.html"; ?>
				<?php include "../html/Annuaire-Accueil.html"; ?>
				<!------------------------------------------------------------------->
				<?php include "../html/Publication.html"; ?>
			</div>
		</div>
	</body>
</html>