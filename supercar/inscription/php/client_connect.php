<?php 
session_start();

//definition du paramètre serveur et table
    include("dbserver_connect.php");

    //capture des valeurs mit dans les inputs en utilisant la méthode POST
    if(isset($_POST['submit'])){
        $utilisateur = $_POST['Utilisateur'];
        $motdepasse = $_POST['Mdp'];

        //attribution de la requête sql dans une variable
        $sql = "SELECT * from `supercar`.`client_inscrit` WHERE Utilisateur = '$utilisateur' and Mdp = '$motdepasse'";
     
        //execution de la requête sql mit dans une variable 
        $rslt = mysqli_query ($bdd, $sql);
      
        //verification de la valeur retourné et validation ou invalidation
        $ligne = mysqli_fetch_array($rslt, MYSQLI_ASSOC);


        $nbligne = mysqli_num_rows($rslt);
        if ($nbligne == 1) {
            $_SESSION["logged_in"] = true;
             header("Location:/supercar/Accueil/Accueil.php");
        }
        else {
            echo ("Identifiants incorrects");
        }
    }
?>