<?php
session_start();
$connexion = mysqli_connect("localhost", "root", "", "supercar");
$query = "SELECT * FROM accueil";
$query_run = mysqli_query($connexion, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SUPERCAR</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link href="accueil.css" rel="stylesheet" />
</head>
<?php
$sql = "SELECT * FROM accueil WHERE id = 13";
$result = $connexion->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
?>

  <body style="background: url(<?php echo $row['img']; ?>);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;">
  <?php
} else {
  echo "Aucun enregistrement trouvé pour cet ID.";
}
  ?>
  <br />
  <!--Debut header-->
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
              class="nav-link active text-light"
              aria-current="page"
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
  <!--Head vid-->
  <header>
    <div class="overlay">
      <?php
      $sql = "SELECT * FROM accueil WHERE id = 11";
      $result = $connexion->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
      ?>
        <video autoplay muted loop>
          <source src="<?php echo $row['vid']; ?>" type="video/mp4">
        </video>
      <?php
      } else {
        echo "Aucun enregistrement trouvé pour cet ID.";
      }
      ?>
      <br /><br /><br /><br /><br /><br />
      <h1 style="font-size: 500%;">Conduisez votre voiture de reve</h1>
      <a href="..\essai\essai.php" class="services-link">Planifier un test</a>
    </div>
  </header>

  <!--Fin headvid-->
  <br /><br />
  <!--Fin header-->

  <!--- Toutes les ballises "div" represente des programmes directement proposé par bootstrap--->

  <!--- Debut Croussel --->
  <div class="body1" style="background-image: url(../img/Carbo.jpg);">
    <div class="container-car">
      <marquee class="text-shadow" style="position:absolute; font-size: 2000%; color: rgb(4, 0, 255); font-style: italic;">SUPERCAR</marquee>
      <div>
        <div class="content-car">
          <h2>Ford</h2>
          <span>Mustang</span>
        </div>
      </div>
      <div>
        <div class="content-car">
          <h2>BMW</h2>
          <span>M4-CSL</span>
        </div>
      </div>
      <div>
        <div class="content-car">
          <h2>Porshe</h2>
          <span>911</span>
        </div>
      </div>
      <div>
        <div class="content-car">
          <h2>Nissan</h2>
          <span>GTR</span>
        </div>
      </div>
    </div>
  </div>
  <!--- Fin Caroussel --->
  <br /><br />
  <section id="hero">
    <div class="container bg-dark text-white rounded">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <div>
            <?php
            $sql = "SELECT * FROM accueil WHERE id = 1";
            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
            ?>

              <p style="font-size: 130%;">
                <?php echo $row['txt']; ?>
              </p>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="<?php echo $row['img']; ?>" class="img-fluid" alt="">
        <?php
            } else {
              echo "Aucun enregistrement trouvé pour cet ID.";
            }
        ?>
        </div>
      </div>
    </div>
  </section>
  <br /><br />
  <section id="about" class="about">
    <div class="container text-bg-dark">

      <div class="row">
        <div class="col-lg-6">
          <?php
          $sql = "SELECT * FROM accueil WHERE id = 2";
          $result = $connexion->query($sql);
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
          ?>
            <img src="<?php echo $row['img']; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <div class="content pt-4 pt-lg-0">
            <br /><br />


            <p style="font-size: 130%;">
              <?php echo $row['txt']; ?>
            </p>

          <?php
          } else {
            echo "Aucun enregistrement trouvé pour cet ID.";
          }
          ?>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <section id="hero">
      <div class="container rounded">
        <div class="card mb-3">
          <?php
          $sql = "SELECT * FROM accueil WHERE id = 3";
          $result = $connexion->query($sql);
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
          ?>
            <img src="<?php echo $row['img']; ?>" class="img-fluid" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-title"><?php echo $row['txt']; ?></h5>
            <?php
          } else {
            echo "Aucun enregistrement trouvé pour cet ID.";
          }
            ?>
            <hr>
            <?php
            $sql = "SELECT * FROM accueil WHERE id = 4";
            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
            ?>
              <p class="card-text"><?php echo $row['txt']; ?>
              </p>

            <?php
            } else {
              echo "Aucun enregistrement trouvé pour cet ID.";
            }
            ?>

            </div>
        </div>
      </div>
    </section>
    <br />
    <center>
      <div class="container-fluid bg-dark">
        <?php
        $sql = "SELECT * FROM accueil WHERE id = 12";
        $result = $connexion->query($sql);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
        ?>
          <video autoplay muted loop
            src="<?php echo $row['vid']; ?>" type="video/mp4" style="width: 75%;">
          </video>
        <?php
        } else {
          echo "Aucun enregistrement trouvé pour cet ID.";
        }
        ?>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 20rem;">
            <?php
            $sql = "SELECT * FROM accueil WHERE id = 5";
            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
            ?>
              <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
              <div class="card-body">

                <h5 class="card-title"><?php echo $row['txt']; ?></h5>
              <?php
            } else {
              echo "Aucun enregistrement trouvé pour cet ID.";
            }
              ?>
              <hr>
              <?php
              $sql = "SELECT * FROM accueil WHERE id = 6";
              $result = $connexion->query($sql);
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
              ?>
                <p class="card-text"><?php echo $row['txt']; ?></p>
              <?php
              } else {
                echo "Aucun enregistrement trouvé pour cet ID.";
              }
              ?>
              <br /><br />
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width: 20rem;">
            <?php
            $sql = "SELECT * FROM accueil WHERE id = 7";
            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
            ?>
              <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
              <div class="card-body">

                <h5 class="card-title"><?php echo $row['txt']; ?></h5>
              <?php
            } else {
              echo "Aucun enregistrement trouvé pour cet ID.";
            }
              ?>
              <hr>
              <?php
              $sql = "SELECT * FROM accueil WHERE id = 8";
              $result = $connexion->query($sql);
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
              ?>
                <p class="card-text"><?php echo $row['txt']; ?></p>
              <?php
              } else {
                echo "Aucun enregistrement trouvé pour cet ID.";
              }
              ?>
              </div>
          </div>
        </div>
        <div class="col-sm-4 ">
          <div class="card" style="width: 20rem;">
            <?php
            $sql = "SELECT * FROM accueil WHERE id = 9";
            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
            ?>
              <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
              <div class="card-body">

                <h5 class="card-title"><?php echo $row['txt']; ?></h5>
              <?php
            } else {
              echo "Aucun enregistrement trouvé pour cet ID.";
            }
              ?>
              <hr>
              <?php
              $sql = "SELECT * FROM accueil WHERE id = 10";
              $result = $connexion->query($sql);
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
              ?>
                <p class="card-text"><?php echo $row['txt']; ?>
                </p>
              <?php
              } else {
                echo "Aucun enregistrement trouvé pour cet ID.";
              }
              ?>
              <br />
              </div>
          </div>
        </div>
      </div>
    </center>
    <br /><br />
    <?php
    include('../includes/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>

</html>