<?php

//mettre en ligne la connexion avec la base de données
include ("dbserver_connect.php");
// récupérer les contenus des variables formulaires
$utilisateur = $_POST["Utilisateur"];
$nom = $_POST["Nom"];
$prenom = $_POST["Prenom"];
$Email = $_POST["Email"];
$Tel = $_POST["Tel"];
$Motdepasse= $_POST["Mdp"];
// préparer votre requête pour insérer des données dans la table PERSONNE
$inserer = "insert into client_inscrit (Utilisateur,Nom,Prenom,Email,Tel,Mdp) values ('$utilisateur','$nom', '$prenom', '$Email', '$Tel','$Motdepasse')";
// exécuter la requête avec la focntion PHP
mysqli_query($bdd, $inserer);
// fermeture de la connexion avec la base de données
mysqli_close($bdd);
?>
