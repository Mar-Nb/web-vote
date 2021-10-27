<?php
	session_start();
	session_destroy();
	unset($_SESSION["pseudo"]);
	unset($_SESSION["mdp"]);
	header("Location: ./pagePrincipale.php");
?>