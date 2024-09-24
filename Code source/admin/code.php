<?php
include('security.php');

if (isset($_POST['nvoiture'])) {
    $Immatriculation = $_POST['Immatriculation'];
    $Marque = $_POST['Marque'];
    $Modele = $_POST['Modele'];
    $places = $_POST['places'];
    $poidvide = $_POST['poidvide'];
    $longueur = $_POST['longeur'];
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];
    $vmax = $_POST['vmax'];
    $Carburant = $_POST['Carburant'];
    $reservoir = $_POST['reservoir'];
    $prix = $_POST['prix'];
    $titre = $_POST['titre'];
    $img = $_POST['img'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "supercar";

    $connexion = new mysqli($servername, $username, $password, $dbname);


    if ($connexion->connect_error) {
        die("Connection non reussie: " . $connexion->connect_error);
    }


    $query = "INSERT INTO voiture (Immatriculation, Marque, Modele, places, poidvide, longueur, largeur, hauteur, vmax, Carburant, reservoir, prix, titre, img) VALUES ('$Immatriculation', '$Marque', '$Modele', '$places', '$poidvide', '$longeur', '$largeur', '$hauteur', '$vmax', '$Carburant', '$reservoir', '$prix', '$titre', '$img')";

    if ($connexion->query($query) === TRUE) {
        // Redirection vers la page contenant le container
        header("Location: voiture.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}

if (isset($_POST['nevent'])) {
    $titre = $_POST['titre'];
    $txt = $_POST['txt'];
    $img = $_POST['img'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "supercar";

    $connexion = new mysqli($servername, $username, $password, $dbname);


    if ($connexion->connect_error) {
        die("Connection failed: " . $connexion->connect_error);
    }


    $query = "INSERT INTO event (titre, txt, img, debut, fin) VALUES ('$titre', '$txt', '$img', '$debut', '$fin')";

    if ($connexion->query($query) === TRUE) {
        // Redirection vers la page contenant le container
        header("Location: evenement.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connexion, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Email déja pris. Essayer un autre";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    } else {
        if ($password === $cpassword) {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connexion, $query);

            if ($query_run) {
                // echo "Saved";
                $_SESSION['status'] = "Profil ajouté";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            } else {
                $_SESSION['status'] = "Profil non ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');
            }
        } else {
            $_SESSION['status'] = "Mot de passe incorrecte";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');
        }
    }
}


if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $nom_table = $_POST['ntable'];
    $nom_page = $_POST['npage'];

    $query = "DELETE  FROM $nom_table WHERE id='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['success'] = "Données supprimées";
        header('Location:' . $nom_page);
    } else {
        $_SESSION['status'] = "Données non supprimées";
        header('Location:' . $nom_page);
    }
}

if (isset($_POST['delete_btn1'])) {
    $id = $_POST['delete_id'];
    $nom_table = $_POST['ntable'];
    $nom_page = $_POST['npage'];

    $query = "DELETE  FROM $nom_table WHERE Immatriculation='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['success'] = "Données supprimées";
        header('Location:' . $nom_page);
    } else {
        $_SESSION['status'] = "Données non supprimées";
        header('Location:' . $nom_page);
    }
}

if (isset($_POST['delete_btn2'])) {
    $id = $_POST['delete_id'];
    $nom_table = $_POST['ntable'];
    $nom_page = $_POST['npage'];

    $query = "DELETE  FROM $nom_table WHERE ID_demande='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['success'] = "Données supprimées";
        header('Location:' . $nom_page);
    } else {
        $_SESSION['status'] = "Données non supprimées";
        header('Location:' . $nom_page);
    }
}

if (isset($_POST['delete_btn3'])) {
    $id = $_POST['delete_id'];
    $nom_table = $_POST['ntable'];
    $nom_page = $_POST['npage'];

    $query = "DELETE  FROM $nom_table WHERE ID_contact='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['success'] = "Données supprimées";
        header('Location:' . $nom_page);
    } else {
        $_SESSION['status'] = "Données non supprimées";
        header('Location:' . $nom_page);
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $nom_table = $_POST['ntable'];

    $query = "UPDATE $nom_table SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}

if (isset($_POST['updatebtn1'])) {
    $id = $_POST['edit_id'];
    $txt = $_POST['txt'];
    $img = $_POST['img'];
    $vid = $_POST['vid'];

    $nom_table = $_POST['ntable'];


    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "UPDATE $nom_table SET txt='$txt', img='$img', vid='$vid' WHERE id='$id' ";
    $query_run = mysqli_query($connexion, $query);

    if ($query_run) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: accueil.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: accueil.php');
    }
}

if (isset($_POST['updatebtn2'])) {
    $id = $_POST['edit_id'];
    $titre = $_POST['titre'];
    $txt = $_POST['txt'];
    $img = $_POST['img'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $nom_table = $_POST['ntable'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "supercar";

    $connexion = new mysqli($servername, $username, $password, $dbname);
    $query = "UPDATE $nom_table SET titre='$titre', txt='$txt', img='$img', debut='$debut', fin='$fin' WHERE id='$id' ";
    $query_run = mysqli_query($connexion, $query);

    if ($query_run) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: evenement.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: evenement.php');
    }
}

if (isset($_POST['updatebtn3'])) {
    $id = $_POST['edit_id'];
    $Utilisateur = $_POST['Utilisateur'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];
    $Tel = $_POST['Tel'];
    $Mdp = $_POST['Mdp'];
    $nom_table = $_POST['ntable'];


    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "UPDATE $nom_table SET Utilisateur='$Utilisateur', Nom='$Nom', Prenom='$Prenom', Email='$Email', Tel='$Tel', Mdp='$Mdp' WHERE ID-client='$id' ";
    $query_run = mysqli_query($connexion, $query);

    if ($query_run) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: inscription.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: inscription.php');
    }
}

if (isset($_POST['updatebtn4'])) {
    $id = $_POST['edit_id'];
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Tel = $_POST['tel'];
    $Mail = $_POST['mail'];
    $Message = $_POST['message'];

    $nom_table = $_POST['ntable'];

    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "UPDATE $nom_table SET Nom='$Nom', Prenom='$Prenom', Tel='$Tel', Mail='$Mail', Message='$Message' WHERE ID_contact='$id' ";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: contact.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: contact.php');
    }
}

if (isset($_POST['updatebtn5'])) {
    $Immatriculation = $_POST['edit_id'];
    $Marque = $_POST['Marque'];
    $Modele = $_POST['Modele'];
    $places = $_POST['places'];
    $poidvide = $_POST['poidvide'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];
    $vmax = $_POST['vmax'];
    $Carburant = $_POST['Carburant'];
    $reservoir = $_POST['reservoir'];
    $prix = $_POST['prix'];
    $titre = $_POST['titre'];
    $img = $_POST['img'];

    $nom_table = $_POST['ntable'];

    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "UPDATE $nom_table SET Marque='$Marque', Modele='$Modele', places='$places', poidvide='$poidvide', longueur='$longueur', largeur='$largeur', hauteur='$hauteur', vmax='$vmax', Carburant='$Carburant', reservoir='$reservoir', prix='$prix', titre='$titre', img='$img' WHERE Immatriculation='$Immatriculation' ";
    $query_run = mysqli_query($connexion, $query);

    if ($query_run) {
        $_SESSION['status'] = "Vos données ont été mis à jour";
        $_SESSION['status_code'] = "success";
        header('Location: voiture.php');
    } else {
        $_SESSION['status'] = "Vos données n'ont pas été mis à jour";
        $_SESSION['status_code'] = "error";
        header('Location: voiture.php');
    }
}

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connexion, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Email / Mot de passe incorrecte";
        header('Location: login.php');
    }
}

$connection = mysqli_connect("localhost", "root", "", "supercar");

if (isset($_POST['statutbtn'])) {
    $ID_demande = $_POST['confirmer_id'];

    // Requête SQL pour mettre à jour le statut de la demande à "Confirmé"
    $query = "UPDATE essai SET statut = 'Confirmé' WHERE ID_demande = '$ID_demande'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Statut de la demande mis à jour avec succès";
        header('Location: demande.php'); // Redirection vers la page d'origine
    } else {
        $_SESSION['status'] = "Échec de la mise à jour du statut de la demande";
        header('Location: demande.php'); // Redirection vers la page d'origine
    }
}

if (isset($_POST['terminer_btn'])) {
    $ID_demande = $_POST['terminer_id'];

    // Requête SQL pour mettre à jour le statut de la demande à "Confirmé"
    $query = "UPDATE essai SET statut = 'Terminé' WHERE ID_demande = '$ID_demande'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Statut de la demande mis à jour avec succès";
        header('Location: demande.php'); // Redirection vers la page d'origine
    } else {
        $_SESSION['status'] = "Échec de la mise à jour du statut de la demande";
        header('Location: demande.php'); // Redirection vers la page d'origine
    }
}
if (isset($_POST['annul_btn'])) {
    $ID_demande = $_POST['annul_id'];

    // Requête SQL pour mettre à jour le statut de la demande à "Confirmé"
    $query = "UPDATE essai SET statut = 'Annulé' WHERE ID_demande = '$ID_demande'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Statut de la demande mis à jour avec succès";
        header('Location: demande.php'); // Redirection vers la page d'origine
    } else {
        $_SESSION['status'] = "Échec de la mise à jour du statut de la demande";
        header('Location: demande.php'); // Redirection vers la page d'origine
    }
}
