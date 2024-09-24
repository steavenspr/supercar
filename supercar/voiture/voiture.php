<?php session_start(); ?>
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
  <link href="voiture.css" rel="stylesheet" />
</head>

<body>
  <br /><br />
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
              class="nav-link active text-light"
              aria-current="page"
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
              class="nav-link text-light"
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
  <br />
  <!--Head vid-->
  <header>
    <div class="overlay">
      <video autoplay muted loop>
        <source src="../img/dmustang.mp4" type="video/mp4" />
      </video>
      <h1 style="font-size: 200%">Nous proposons 4 marques </h1>

    </div>
  </header>
  <main>
    <section></section>
  </main>

  <!--Fin headvid-->
  <br />
  <div class="container-fluid" style="backdrop-filter: blur(10px);">
    <br /><br /><br />
    <center>
      <div class="row">
        <div class="col-sm-3">
          <div class="container">
            <a class="marque" style="text-decoration: none;" href="../voiture/BMW/modelebmw.php">
              <center><img src="../img/bmw.svg" width="100px" /></center>
              >
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="container">
            <a class="marque" style="text-decoration: none;" href="../voiture/Nissan/modelenissan.php">
              <center><img src="../img/nissan.svg" width="100px" /></center>
              >
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="container">
            <a class="marque" style="text-decoration: none;" href="../voiture/Ford/modeleford.php">
              <center><img src="../img/ford_lo.svg" width="130px" /></center>
              >
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="container">
            <a class="marque" style="text-decoration: none;" href="../voiture/Porsche/modele Porsche.php">
              <center><img src="../img/porsche.svg" width="190px" /></center>
              >
            </a>
          </div>
        </div>
    </center>
  </div>
  <br /><br /><br /><br />
  <?php
  include('..\includes\footer.php');
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>