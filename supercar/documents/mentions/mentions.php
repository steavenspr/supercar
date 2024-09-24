<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Supercar</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="mentions.css" />
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
              class="nav-link"
              href="/supercar/documents/conditions/conditions.php"
              target="_self"
              >Conditions d'utilisation</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="true"
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
        <center><h2 class="card-title">Mentions legales</h2></center>
        <br /><br />
        <p class="card-text">
          Conformément aux dispositions des Articles 6-III et 19 de la Loi
          n°2004-575 du 21 juin 2004 pour la Confiance dans <br />
          l’économie numérique, dite L.C.E.N., il est porté à la connaissance
          des utilisateurs et visiteurs, ci-après l""Utilisateur", du site
          Supercar Web , ci-après le "Site", les présentes mentions légales. La
          connexion et la navigation sur le Site par l’Utilisateur implique
          acceptation intégrale et sans réserve des présentes mentions légales.
          Ces dernières sont accessibles sur le Site à la rubrique « Mentions
          légales ».
        </p>

        <p>
          <strong>ARTICLE 1 - L'EDITEUR</strong><br /><br />

          L'édition du Site est assurée par SUPERCAR WEB dont le siège social
          est situé a Cybercity,Ebene,Ile Maurice<br />

          Adresse e-mail : <br />

          ci-après l'"Editeur".

          <br /><br />

          <strong>ARTICLE 2 - L'HEBERGEUR</strong><br /><br />

          L'hébergeur du Site est la société ..., dont le siège social est situé
          ....<br /><br />

          <strong> ARTICLE 3 - ACCES AU SITE<br /><br /></strong>

          Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force
          majeure, interruption programmée ou non et pouvant découlant d’une
          nécessité de maintenance.<br />

          En cas de modification, interruption ou suspension du Site, l'Editeur
          ne saurait être tenu responsable.<br /><br />

          <strong>4.Conditions generales de vente</strong><br /><br />

          Les conditions générales de vente sont accessibles sur la page dédiée
          du site et <br />
          détaillent les modalités de vente, les conditions de paiement, la
          livraison, la politique de retour et les garanties.<br /><br />

          <strong>5.Protection des données personnelles</strong><br /><br />

          Consultez notre Politique de confidentialité pour plus d'informations
          sur la collecte,<br />
          le traitement et l'utilisation des données personnelles, ainsi que sur
          les droits des utilisateurs.<br /><br />

          <strong>ARTICLE 6 - COLLECTE DES DONNEES</strong><br /><br />
          Le Site assure à l'Utilisateur une collecte et un traitement
          d'informations personnelles dans le respect de la vie privée
          conformément à la loi n°78-17 du 6 janvier 1978 relative à
          l'informatique, aux fichiers et aux libertés.<br /><br />

          En vertu de la loi Informatique et Libertés, en date du 6 janvier
          1978, l'Utilisateur dispose d'un droit d'accès, de rectification, de
          suppression et d'opposition de ses données personnelles. L'Utilisateur
          exerce ce droit :<br />
          · via un formulaire de contact ;<br /><br />

          Toute utilisation, reproduction, diffusion, commercialisation,
          modification de toute ou partie du Site, sans autorisation de
          l’Editeur est prohibée et pourra entraînée des actions et poursuites
          judiciaires telles que notamment prévues par le Code de la propriété
          intellectuelle et le Code civil.
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
