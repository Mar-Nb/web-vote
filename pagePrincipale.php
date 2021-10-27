<HTML>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/projet_css1.css" />
	<title>Page Principale</title>
</head>
<body>
	<h1>Page d'accueil</h1><hr>
	
	
	<div id="barre">
			<li><a href="pageConnexion/pageConnexionE.php">Élève</a></li>
			<li><a href="pageConnexion/pageConnexionP.php">Professeur</a></li>
			<li><a href="pageConnexion/pageConnexionA.php">Administrateur</a></li>
	</div>
	
	<div id="description">
		<br><br>
			<!--<center>-->
				<fieldset>
					<legend> Bienvenue, utilisateur ! </legend>
					<p><span>Élève</span> : Ce site vous permet d'évaluer 5 Unités d'Enseignement (UE) faisant partie de vos matières à l'IUT.
											Cliquez sur Elève, connectez-vous avec vos identifiants, et votez sur la page à laquelle vous accédez
											après votre connexion. Vos votes sont anonymes, un professeur ne pourra pas remonter à votre nom en
											consultant les votes rendus.</p>
					<p><span>Professeur</span> : Il vous est possible de vous connecter afin de consulter les votes déjà envoyés par les élèves. La moyenne
												et l'écart-type sont également calculés sur la page. Cliquez sur Professeur, connectez-vous avec vos identifiants,
												et consultez les votes pour votre matière. Il ne vous sera pas possible de consulter les identifiants correspondant à chaque vote, ni la liste des élèves n'ayant pas voté.</p>
					<p><span>Admin</span> : Il vous est possible, en tant qu'Administrateur, de consulter l'ensemble des votes envoyés par les élèves. 
											Vous n'avez cependant pas accès aux identifiants correspondant aux votes. Cliquez sur Administrateur, connectez-vous
											avec vos identifiants, et consultez l'ensemble des votes envoyés pour les 5 UE. Vous pouvez également exporter
											les résultats au format PDF.</p>
				</fieldset>
			<!--</center>-->
	</div>
	
	<div id="footer">
		<p>Site réalisé par Victor CHARDÉRON, Martin NIOMBELA, Damien CHANCEREL, Claire BAUCHU et Louis BIZOT</p>
	</div>
</body>
</html>