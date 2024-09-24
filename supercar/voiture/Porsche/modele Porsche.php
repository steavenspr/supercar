<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercar";

$connexion = new mysqli($servername, $username, $password, $dbname);


if ($connexion->connect_error) {
  die("Connection failed: " . $connexion->connect_error);
}

// Récupéreration des données de la base
$query = "SELECT * FROM voiture WHERE Marque='PORSCHE' ";
$result = $connexion->query($query);

// Construire le container Bootstrap avec les données de la voiture
$container_nouv = "";

if ($result->num_rows > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    $container_nouv .= "
        <div
          class='container text-light rounded'
          style='backdrop-filter: blur(30px)'
        >
          <br /><br /><br /><br />
          <div class='row'>
            <div class='col-sm-7 mb-2'>
              <img
                src='" . $row["img"] . "'
                style='width: 100%'
              />
            </div>
            <div class='col-sm-5'>
              <br />
              <p
                style='
                  font-family: Brush Script MT;
                  font-size: 180%;
                  text-decoration-line: underline;
                  text-decoration-style: double;
                '
              >
                " . $row["titre"] . "
              </p>
              <ul style='font-family: Brush Script MT; font-size: 160%'>
                <li>Places : " . $row["places"] . "</li>
                <li>Poids à vide : " . $row["poidvide"] . " Kg</li>
                <li>Longueur : " . $row["longueur"] . " mm</li>
                <li>Largeur : " . $row["largeur"] . " mm</li>
                <li>Hauteur : " . $row["hauteur"] . " mm</li>
                <li>Vitesse maximale : " . $row["vmax"] . " km/h</li>
                <li>Energie : " . $row["Carburant"] . "</li>
                <li>Réservoir:" . $row["reservoir"] . " l</li>
                <li>Prix:" . $row["prix"] . " $</li>
              </ul>
              <center>
              <button type='button' class='btn btn-outline-light'>
                <a href='../../essai/essai.php'
                  ><img src='../../img/volant.png' width='100px'
                /></a>
              </button>
              <p>RÉSERVEZ UN ESSAI</p>
            </center>
            </div>
          </div>
          <br /><br /><br />
        </div>
        <br/><br/>
        ";
  }
} else {
  $container_nouv = "0 résultats";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SUPERCAR</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link href="modele Porsche.css" rel="stylesheet" />
</head>

<body>
  <br /><br />
  <!--Debut nav-->
  <nav
    class="navbar navbar-expand-lg fixed-top"
    id="arriere"
    style="background-image: url(../../img/Carbo.jpg)">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" href="#"><img class="Logo" src="../../img/Logo.png" width="100px" /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="../../Accueil/Accueil.php">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link active text-light"
              aria-current="page"
              href="../../voiture/voiture.php"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Voitures
            </a>
            <ul class="dropdown-menu" data-bs-theme="dark">
              <li>
                <a class="dropdown-item" href="../../voiture/voiture.php">Voitures</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="../../voiture/Nissan/modelenissan.php">Nissan</a></li>
              <li><a class="dropdown-item" href="../../voiture/Ford/modeleford.php">Ford</a></li>
              <li><a class="dropdown-item" href="../../voiture/BMW/modelebmw.php">BMW</a></li>
              <li><a class="dropdown-item" href="../../voiture/Porsche/modele Porsche.php">Porshe</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="../../essai/essai.php">Demande d'Essai</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="../../Evenement/evenement.php">Évenement</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="../../contact/Contact.php">Contact</a>
          </li>
        </ul>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
          <form method="post" action="../../includes/logout.php">
            <input type="submit" name="logout" value="Déconnexion">
          </form>
        <?php } else { ?>
          <div class="dropdown">
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <img class="Logo" src="../../img/login.png" width="15px" />
            </button>
            <ul
              class="dropdown-menu dropdown-menu-end dropdow-menu-lg-start"
              data-bs-theme="dark">
              <li>
                <button class="dropdown-item" type="button">
                  <a
                    class="dropdown-item"
                    href="../../inscription/inscription.php">Inscription</a>
                </button>
              </li>
              <li>
                <button class="dropdown-item" type="button">
                  <a
                    class="dropdown-item"
                    href="../../inscription/connexion.php">Connexion</a>
                </button>
              </li>
            </ul>
          </div>
        <?php } ?>
      </div>
    </div>
  </nav>
  <!--Fin nav-->
  <br />
  <!--Modeles-->
  <br /><br />
  <?php echo $container_nouv ?>
  <!--Fin modeles-->
  <br /><br /><br /><br />
  <!--Debut footer-->
  <?php
  include('../../includes/footer.php');
  ?>
  <!--Fin footer-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>