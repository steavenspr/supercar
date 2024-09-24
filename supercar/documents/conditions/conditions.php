<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Supercar</title>
    <!--Font-->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="Conditions.css" />
  </head>
  <body>
    <!--Debut nav-->
<nav
class="navbar navbar-expand-lg fixed-top"
id="arriere"
style="background-image: url(/supercar/img/Carbo.jpg)"
>
<div class="container-fluid justify-content-center">
  <a class="navbar-brand" href="#"
    ><img class="Logo" src="/supercar/img/Logo.png" width="100px"
  /></a>
  <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
      <li class="nav-item">
        <a
          class="nav-link text-light"
          href="/supercar/Accueil/Accueil.php"
          >Accueil</a
        >
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link text-light"
          href="/supercar/voiture/voiture.php"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Voitures
        </a>
        <ul class="dropdown-menu" data-bs-theme="dark">
          <li>
            <a class="dropdown-item" href="/supercar/voiture/voiture.php"
              >Voitures</a
            >
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li><a class="dropdown-item" href="/supercar/voiture/Nissan/modelenissan.php">Nissan</a></li>
          <li><a class="dropdown-item" href="/supercar/voiture/Ford/modeleford.php">Ford</a></li>
          <li><a class="dropdown-item" href="/supercar/voiture/BMW/modelebmw.php">BMW</a></li>
          <li><a class="dropdown-item" href="/supercar/voiture/Porsche/modele Porsche.php">Porshe</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-light"
          aria-current="page" 
          href="/supercar/essai/essai.php"
          >Demande d'Essai</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link text-light"
          href="/supercar/Evenement/evenement.php"
          >Évenement</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link text-light"
          href="/supercar/contact/Contact.php"
          >Contact</a
        >
      </li>
    </ul>
    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                <form method="post" action="../includes/logout.php">
                    <input type="submit" name="logout" value="Déconnexion">
                </form>
            <?php }
            else {?>
    <div class="dropdown">
      <button
        class="btn btn-primary"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
        <img class="Logo" src="/supercar/img/login.png" width="15px" />
      </button>
      <ul
        class="dropdown-menu dropdown-menu-end dropdow-menu-lg-start"
        data-bs-theme="dark"
      >
        <li>
          <button class="dropdown-item" type="button">
            <a
              class="dropdown-item"
              href="/supercar/inscription/inscription.php"
              >Inscription</a
            >
          </button>
        </li>
        <li>
          <button class="dropdown-item" type="button">
            <a
              class="dropdown-item"
              href="/supercar/inscription/connexion.php"
              >Connexion</a
            >
          </button>
        </li>
      </ul>
    </div>
    <?php } ?>
  </div>
</div>
</nav>
<!--Fin nav --->
    <br /><br /><br />
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="true"
              href="/supercar/documents/conditions/conditions.php"
              target="_self"
              >Conditions d'utilisation</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="/supercar/documents/mentions/mentions.php"
              target="_self"
              >Mentions legales</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="/supercar/documents/politique/politiques.php"
              target="_self"
              >Politique de confidentialité</a
            >
          </li>
        </ul>
      </div>
      <div class="card-body">
        <center>
          <h2 class="card-title">Conditions generales d'utilisation</h2>
        </center>
        <br /><br />
        <p class="card-text">
          <strong>1. Acceptation des Conditions</strong><br /><br />

          En accédant et en utilisant ce site web (ci-après dénommé "le Site"),
          vous acceptez de vous conformer à ces Conditions Générales
          d'Utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas
          utiliser le Site<br /><br />

          <strong>2. Utilisation du Site</strong><br /><br />

          Vous êtes autorisé à utiliser le Site à des fins légales et conformes
          aux présentes CGU. Vous ne pouvez pas utiliser le Site de manière à
          violer les lois locales, nationales ou internationales.<br /><br />

          <strong> 3. Compte Utilisateur<br /><br /></strong>

          Lors de la création d'un compte sur le Site, vous êtes responsable de
          la confidentialité de vos informations d'identification. Vous acceptez
          de fournir des informations exactes et à jour. Vous êtes responsable
          de toutes les activités liées à votre compte.<br /><br />

          <strong>4.Annonces et Transactions</strong><br /><br />

          Les informations sur les véhicules à vendre sur le Site sont fournies
          par les vendeurs. Nous ne garantissons pas l'exactitude de ces
          informations et ne sommes pas responsables des transactions entre les
          acheteurs et les vendeurs<br /><br />

          <strong>5.Responsabilité</strong><br /><br />

          Le Site n'est pas responsable des dommages directs, indirects,
          spéciaux, consécutifs ou autres résultant de l'utilisation ou de
          l'incapacité d'utiliser le Site.<br /><br />

          <strong>6. Propriété Intellectuelle</strong><br /><br />
          Le contenu du Site, y compris mais sans s'y limiter, le texte, les
          images, les logos, est protégé par les lois sur la propriété
          intellectuelle et ne peut être utilisé sans autorisation écrite.
          <br /><br />

          <strong>7. Modifications des CGU</strong><br /><br />
          Nous nous réservons le droit de modifier ces CGU à tout moment. Les
          modifications seront effectives dès leur publication sur le Site. Il
          est de votre responsabilité de vérifier régulièrement les
          modifications
          <br /><br />

          <strong>8. Résiliation</strong><br /><br />
          Nous nous réservons le droit de résilier ou suspendre votre accès au
          Site à tout moment, pour quelque raison que ce soit, sans préavis.
          <br /><br />

          <strong>9. Droit Applicable</strong><br /><br />

          Ces CGU sont régies par les lois en vigueur dans votre juridiction.
          Tout litige découlant de l'utilisation du Site sera soumis à la
          juridiction exclusive des tribunaux compétents de votre juridiction<br />

          En utilisant ce Site, vous acceptez expressément ces Conditions
          Générales d'Utilisation. Si vous ne les acceptez pas, veuillez ne pas
          utiliser le Site.
          <br /><br />
        </p>
      </div>
    </div>
    <br /><br />
    <!--Debut footer-->
    <?php
  include('../../includes/footer.php');
  ?>
    <!--Fin footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
