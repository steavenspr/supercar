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
$query = "SELECT * FROM event";
$result = $connexion->query($query);

// Construire le container Bootstrap avec les données de la voiture
$container_nouv = "";

if ($result->num_rows > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    $container_nouv .= "
        <div class='card w-50 mb-3'>
        <img src='/supercar/img/" . $row["img"] . "' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>" . $row["titre"] . "</h5>
          <hr>
          <p class='card-text'>" . $row["txt"] . "</p>
          <p class='card-text'>Debut: " . $row["debut"] . "</p>
          <p class='card-text'>Fin: " . $row["fin"] . "</p>
        </div>
      </div>
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
  <link href="evenement.css" rel="stylesheet" />
</head>

<body
  style="
      background: url(../img/event-bg.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    ">
  <br />
  <!--Debut nav-->
  <nav
    class="navbar navbar-expand-lg fixed-top"
    id="arriere"
    style="background-image: url(../img/Carbo.jpg)">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" href="#"><img class="Logo" src="../img/Logo.png" width="100px" /></a>
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
              href="../Accueil/Accueil.php">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link text-light"
              href="../voiture/voiture.php"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Voitures
            </a>
            <ul class="dropdown-menu" data-bs-theme="dark">
              <li>
                <a class="dropdown-item" href="../voiture/voiture.php">Voitures</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="../voiture/Nissan/modelenissan.php">Nissan</a></li>
              <li><a class="dropdown-item" href="../voiture/Ford/modeleford.php">Ford</a></li>
              <li><a class="dropdown-item" href="../voiture/BMW/modelebmw.php">BMW</a></li>
              <li><a class="dropdown-item" href="../voiture/Porsche/modele Porsche.php">Porshe</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="../essai/essai.php">Demande d'Essai</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link active text-light"
              aria-current="page"
              href="../Evenement/evenement.php">Évenement</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="../contact/Contact.php">Contact</a>
          </li>
        </ul>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
          <form method="post" action="../includes/logout.php">
            <input type="submit" name="logout" value="Déconnexion">
          </form>
        <?php } else { ?>
          <div class="dropdown">
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <img class="Logo" src="../img/login.png" width="15px" />
            </button>
            <ul
              class="dropdown-menu dropdown-menu-end dropdow-menu-lg-start"
              data-bs-theme="dark">
              <li>
                <button class="dropdown-item" type="button">
                  <a
                    class="dropdown-item"
                    href="../inscription/inscription.php">Inscription</a>
                </button>
              </li>
              <li>
                <button class="dropdown-item" type="button">
                  <a
                    class="dropdown-item"
                    href="../inscription/connexion.php">Connexion</a>
                </button>
              </li>
            </ul>
          </div>
        <?php } ?>
      </div>
    </div>
  </nav>
  <!--Fin nav-->
  <br /><br />
  <!--Debut caroussel b-->
  <center>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img
            style="width: 40%"
            src="../img/event-1.jpg"
            class="d-block"
            alt="..." />
          <div class="carousel-caption d-none d-md-block text-light">
            <h6> Expérience Exaltante </h6>
            <p>
              Préparez-vous à vivre une expérience automobile<br />
              hors du commun avec nos événements SuperCar,<br />
              où la performance rencontre le prestige.
            </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            style="width: 40%"
            src="../img/event-2.png"
            class="d-block" />
          <div class="carousel-caption d-none d-md-block text-light">
            <h6>SuperCar: Où la Vitesse et le Luxe se Rencontrent!</h6>
            <p>
              Découvrez le monde de la vitesse, du luxe<br />
              et de l'exclusivité lors de nos événements SuperCar,<br />
              conçus pour les passionnés de voitures d'exception.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/event-3.jpg" class="d-block w-50" />
          <div class="carousel-caption d-none d-md-block text-light">
            <h6>Rendez-vous d'Exception</h6>
            <p>
              Explorez notre calendrier d'événements SuperCar et<br />
              plongez-vous dans un univers où chaque détail est synonyme<br />
              d'élégance et de puissance sur route.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/event-4.jpg"
            style="width: 45%"
            class="d-block" />
          <div class="carousel-caption d-none d-md-block text-light">
            <h6>Événements SuperCar: Vivez l'Exclusivité Automobile à son Apogée!</h6>
            <p>
              Rejoignez-nous pour une série d'événements inoubliables mettant<br />
              en vedette les plus grandes marques automobiles au monde, <br />
              seulement à SuperCar.
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </center>
  <!--Fin caroussel b-->

  <br /><br />
  <!-- Evenements listes -->
  <center>
    <?php echo $container_nouv; ?>
    <!-- Fin Listes -->
  </center>
  <br /><br />
  <?php
  include('..\includes\footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>