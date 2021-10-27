<HTML>
<head><link rel='stylesheet' type='text/css' href='../css/projet_css1.css' />
<title>Page Connexion Administrateur</title></head>
<h1>Page de connexion Administrateur</h1><hr>
<div id="barre">
			<li><a href="../pagePrincipale.php">Accueil</a></li>
			<li><a href="pageConnexionE.php">Élève</a></li>
			<li><a href="pageConnexionP.php">Professeur</a></li>
</div>
<fieldset class='field'><legend> Ajout </legend>
<form action='../actionConnexion/actionConnexionA.php' method='post'>
<table width='400' cellspacing='5'>
<tr><td>Pseudo : </td><td><input type='text' name='pseudo'></td>
<tr><td>Mot de passe : </td><td><input type='password' name='mdp'></td>
<tr><td>&nbsp;</td><td><input type='submit' name='ok' value='Connexion' class="button"></td>
</table>
</form>
</fieldset>