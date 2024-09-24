<?php
//définir vos paramètres dec connexion
// nom du serveur 
$host="localhost";
// nom utilisateur
$login="root";
// mot de passe
$pass="";
// nom de la base de données
$dbname="supercar";
// créer la connexion avec la base de données
$connexion = mysqli_connect($host, $login, $pass, $dbname);
// vérification de la connexion avec la BD
if (!$connexion)
	{
		die("Connexion non-reussie à MySQL: ".mysqli_connect_error());
		echo "<BR />"; echo "<BR />";
	} 
else 
	{
		//echo "Connexion reussie à MySQL";
		//echo "<BR />"; echo "<BR />";
	}
// changer le jeu de caractères à utf8
mysqli_set_charset($connexion,"utf8");
?>
<!--


$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "adminpanel";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
    echo '
        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title bg-danger text-white"> Database Connection Failed </h1>
                            <h2 class="card-title"> Database Failure</h2>
                            <p class="card-text"> Please Check Your Database Connection.</p>
                            <a href="#" class="btn btn-primary">:( </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}
?>
-->