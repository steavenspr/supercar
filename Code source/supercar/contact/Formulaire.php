
<?php 

//mettre en ligne la connexion avec la base de données
include ("connexion.php");
// récupérer les contenus des variables formulaires
$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Mail = $_POST["Mail"];
$Tel = $_POST["Tel"];
$Message= $_POST["Message"];
// préparer votre requête pour insérer des données dans la table contact
$inserer = "insert into contact (Nom,Prenom,Mail,Tel,Message) values ('$Nom', '$Prenom', '$Mail','$Tel', '$Message')";
// exécuter la requête avec la focntion PHP
$query_run = mysqli_query($bdd, $inserer);
// fermeture de la connexion avec la base de données
mysqli_close($bdd);

if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: contact.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: contact.php'); 
    }


header('location: contact.php');
 ?>