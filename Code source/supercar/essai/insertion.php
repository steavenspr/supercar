<?php
 // mettre en ligne la connexion avec la base de données
 include ("connexion.php");

 // récupérer les contenus des variables formulaires
 $modele = $_POST["modele"];
 $nom = $_POST["nom"];
 $date = $_POST["date"];
 $heure = $_POST["heure"];


 // préparer votre requête pour insérer des données dans la table PERSONNE
 $inserer = "INSERT INTO essai (Modele, Utilisateur, Date_demande, Heure) 
 VALUES ('$modele', '$nom', '$date', '$heure')";


 // exécuter la requête avec la focntion PHP
 $query_run = mysqli_query($bdd, $inserer);


 // fermeture de la connexion avec la base de données
 mysqli_close($bdd);

 if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: demande.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: demande.php'); 
    }


header('location: essai.php');
 ?>
 <!-- vérifiez dans la base si vos données sont bien insérées avec phphmyadmin -->
