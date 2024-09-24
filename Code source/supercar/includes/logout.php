<?php
session_start();
unset($_SESSION["logged_in"]);
header("Location: /supercar/inscription/connexion.php"); // Rediriger vers la page de connexion après la déconnexion
exit;
?>