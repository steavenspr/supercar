<?php session_start(); ?>
<html>

<head lang="fr">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Inscription</title>
  <link rel="stylesheet" type href="css/inscription.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
</head>

<body>
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
              class="btn btn-primary w-100"
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
  <br /><br /><br /><br />
  <center>
    <div class="container w-75" style="backdrop-filter: blur(50px);">
      <form class="user" data-bs-theme="dark" action="php/inscription.php" method="post">
        <h1>Inscription</h1>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <input type="text" name="Nom" placeholder="Nom" class="form-control form-control-user" value="" required>
            </div>
          </div>
          <br />
          <div class="col">
            <div class="form-group">
              <input type="text" name="Prenom" placeholder="Prénom" class="form-control form-control-user" value="" required>
            </div>
          </div>
        </div>
        <br />
        <div class="form-group">
          <input type="text"
            name="Utilisateur"
            placeholder="Nom d'utilisateur" class="form-control form-control-user" value="" required>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <div class="form-group">
              <input type="text"
                name="Email"
                placeholder="Adresse email" class="form-control form-control-user" value="" required>
            </div>
          </div>
          <br />
          <div class="col">
            <div class="form-group">
              <input type="tel" name="Tel" placeholder="Télephone" class="form-control form-control-user" value="" required>
            </div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <div class="form-group">
              <input type="text"
                name="Mdp"
                placeholder="Mot de passe" class="form-control form-control-user" value="" required>
            </div>
          </div>
          <br />
          <div class="col">
            <div class="form-group">
              <input type="text"
                name="cmotdepasse"
                placeholder="Confrimer mot de passe" class="form-control form-control-user" value="" required>
            </div>
          </div>
        </div>
        <br />
        <center>
          <label class="text-light"><input type="checkbox" required /> J'accepte les conditions
            d'utilisations
          </label>
        </center>
        <br />
        <center><button type="submit" class="btn btn-primary w-75">S'inscrire</button></center>
      </form>
    </div>
  </center>
  <br /><br />

  <?php
  include('..\includes\footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>