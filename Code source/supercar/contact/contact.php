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
  <link href="contact.css" rel="stylesheet" />
</head>

<body>
  <!--Debut nav-->
  <nav
    class="navbar navbar-expand-lg fixed-top"
    id="arriere"
    style="background-image: url(/supercar/img/Carbo.jpg)">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" href="#"><img class="Logo" src="/supercar/img/Logo.png" width="100px" /></a>
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
              href="/supercar/Accueil/Accueil.php">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link text-light"
              href="/supercar/voiture/voiture.php"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Voitures
            </a>
            <ul class="dropdown-menu" data-bs-theme="dark">
              <li>
                <a class="dropdown-item" href="/supercar/voiture/voiture.php">Voitures</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="/supercar/voiture/Nissan/modelenissan.php">Nissan</a></li>
              <li><a class="dropdown-item" href="/supercar/voiture/Ford/modeleford.php">Ford</a></li>
              <li><a class="dropdown-item" href="/supercar/voiture/BMW/modelebmw.php">BMW</a></li>
              <li><a class="dropdown-item" href="/supercar/voiture/Porsche/modele Porsche.php">Porshe</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/supercar/essai/essai.php">Demande d'Essai</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="/supercar/Evenement/evenement.php">Évenement</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link active text-light"
              aria-current="page"
              href="/supercar/contact/Contact.php">Contact</a>
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
                    href="/supercar/inscription/inscription.php">Inscription</a>
                </button>
              </li>
              <li>
                <button class="dropdown-item" type="button">
                  <a
                    class="dropdown-item"
                    href="/supercar/inscription/connexion.php">Connexion</a>
                </button>
              </li>
            </ul>
          </div>
        <?php } ?>
      </div>
    </div>
  </nav>
  <!--Fin nav-->
  <!---Contenu du site--->\
  <?php
  if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
    echo '<h2>' . $_SESSION['success'] . '</h2>';
    unset($_SESSION['success']);
  }

  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    echo '<h2>' . $_SESSION['status'] . '</h2>';
    unset($_SESSION['status']);
  }
  ?>

  <!--  Debut form -->
  <br /><br /><br /><br />
  <div class="container rounded" style="backdrop-filter: blur(50px);">
    <center>
      <form method="post" data-bs-theme="dark" action="Formulaire.php" class="formulaireContact">
        <div class="container">
          <h1 style="color: white;">Contact</h1>
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="Nom" class="form-control" id="name" placeholder="Nom" required="" />
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="Prenom" id="name" pattern="[A-Za-zÀ-ÿ\s]+" placeholder="Prenom" required />
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="email" class="form-control" name="Mail" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$
" placeholder="Adresse email" required />
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="tel" class="form-control" name="Tel" id="number" placeholder="N° de telephone" minlength="10" required />
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-10 mb-3">
                      <div class="form-group">
                        <textarea class="form-control" name="Message" rows="5" placeholder="Message" required></textarea>
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <button type="submit" id="contact-submit" class="btn btn-primary input-medium pull-right">Envoyer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="title-box-2 pt-4 pt-md-0"></div>
              <div class="more-info">
                <p class="lead">
                  <i class="glyphicon glyphicon-map-marker"><br>
                    <strong>Cybercity, Ebene, Île Maurice</strong><br><BR>
                    <iframe width="200" height="250" src="https://www.openstreetmap.org/export/embed.html?bbox=57.48732447624207%2C-20.247229881174707%2C57.490006685256965%2C-20.245528738045145&amp;layer=mapnik" style="border: 1px solid black; border-radius: 20px;"></iframe><br /><small>
                      <a href="https://www.openstreetmap.org/#map=19/-20.24638/57.48867">Afficher une carte plus grande</a></small>
                  </i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </center>
  </div>
  <br /><br />
  <!-- Fin formulaire -->

  <?php
  include('..\includes\footer.php');
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>