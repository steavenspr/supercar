<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demande d'essai de voiture</title>
  <link href="Essai.css" rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
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
            <a
              class="nav-link active text-light"
              aria-current="page"
              href="/supercar/essai/essai.php">Demande d'Essai</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
              href="/supercar/Evenement/evenement.php">Évenement</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light"
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
              <img class="Logo" src="/supercar/img/login.png" width="15px" />
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
  <!--Fin nav --->
  <br /><br />
  <!--Debut demande d'essai-->
  <?php
  $connexion = mysqli_connect("localhost", "root", "", "supercar");
  $query = "SELECT * FROM voiture WHERE Marque='BMW'";
  $query1 = "SELECT * FROM voiture WHERE Marque='NISSAN'";
  $query2 = "SELECT * FROM voiture WHERE Marque='FORD'";
  $query3 = "SELECT * FROM voiture WHERE Marque='PORSCHE'";
  $result = mysqli_query($connexion, $query);
  $result1 = mysqli_query($connexion, $query1);
  $result2 = mysqli_query($connexion, $query2);
  $result3 = mysqli_query($connexion, $query3);

  ?>
  <br /><br /><br />
  <form id="form1" action="insertion.php" method="post">
    <h2 id="demande">Demande d'essaie</h2>
    <label for="modele">Modele de voiture :</label>

    <select id="modele" name="modele" required>
      <optgroup label="BMW">
        <?php
        while ($res = mysqli_fetch_array($result)) {
        ?>

          <option value="<?php echo $res['Modele']; ?>"><?php echo $res['Modele']; ?></option>

        <?php
        }
        ?>
      </optgroup>

      <optgroup label="NISSAN">
        <?php
        while ($res = mysqli_fetch_array($result1)) {
        ?>

          <option value="<?php echo $res['Modele']; ?>"><?php echo $res['Modele']; ?></option>

        <?php
        }
        ?>
      </optgroup>
      <optgroup label="FORD">
        <?php
        while ($res = mysqli_fetch_array($result2)) {
        ?>

          <option value="<?php echo $res['Modele']; ?>"><?php echo $res['Modele']; ?></option>

        <?php
        }
        ?>
      </optgroup>
      <optgroup label="PORSCHE">
        <?php
        while ($res = mysqli_fetch_array($result3)) {
        ?>

          <option value="<?php echo $res['Marque']; ?><?php echo $res['Modele']; ?>"><?php echo $res['Modele']; ?></option>

        <?php
        }
        ?>
      </optgroup>

    </select>


    <label for="nom">Nom de l'utilisateur :</label>
    <input type="text" id="input1" name="nom" required />

    <label for="date">Date de la demande :</label>
    <input type="date" id="input1" name="date" required />

    <label for="heure">Heure de la demande :</label>
    <input type="time" id="input1" name="heure" required />

    <br />
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
      <button
        type="submit"
        class="btn btn-primary">
        Confirmer
      </button>
    <?php } else {
    ?>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Confirmer
      </button>
    <?php } ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Vous n'etes pas connecté</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            veuillez vous connecter ou vous inscrire.
          </div>
          <div class="modal-footer">
            <a href="/supercar/inscription/inscription.php"><button type="button" class="btn btn-secondary">S'inscrire</button></a>
            <a href="/supercar/inscription/connexion.php"><button type="button" class="btn btn-primary">Se connecter</button></a>
          </div>
        </div>
      </div>
    </div>

  </form>
  <br />
  <!--fin demande d'essai-->
  <?php
  include('..\includes\footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>