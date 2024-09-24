<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Supercar</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="politique.css" />
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
              class="nav-link"
              href="/supercar/documents/mentions/mentions.php"
              target="_self"
              >Mentions legales</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="true"
              href="/supercar/documents/politique/politiques.php"
              target="_self"
              >Politique de confidentialité</a
            >
          </li>
        </ul>
      </div>
      <div class="card-body">
        <center>
          <h2 class="card-title">Politique de confidentialité</h2>
        </center>
        <br /><br />
        <p class="card-text">
          <strong>1. Collecte d'Informations Personnelles</strong><br /><br />

          Nous collectons des informations personnelles lorsque vous créez un
          compte, effectuez un achat, remplissez un formulaire ou communiquez
          avec nous. Ces informations peuvent inclure, sans s'y limiter, votre
          nom, adresse, adresse e-mail, numéro de téléphone, informations de
          paiement et préférences personnelles.<br /><br />

          <strong>2. Utilisation des Informations Collectées</strong
          ><br /><br />

          Nous utilisons les informations collectées pour traiter vos
          transactions, personnaliser votre expérience sur le site, améliorer
          notre service client, et vous informer sur nos produits et services.
          Nous ne vendons ni ne louons vos informations personnelles à des
          tiers.<br /><br />

          <strong>3. Sécurité des Informations<br /><br /></strong>

          Nous mettons en place des mesures de sécurité appropriées pour
          protéger vos informations personnelles contre tout accès non autorisé,
          altération, divulgation ou destruction. Cependant, aucune méthode de
          transmission sur Internet, ni aucune méthode de stockage électronique,
          n'est totalement sécurisée. Par conséquent, bien que nous nous
          efforcions de protéger vos informations personnelles, nous ne pouvons
          garantir leur sécurité absolue.<br /><br />

          <strong>4. Cookies</strong><br /><br />

          Nous utilisons des cookies pour améliorer votre expérience sur notre
          site. Les cookies sont de petits fichiers texte stockés sur votre
          ordinateur qui collectent des informations sur votre utilisation du
          site. Vous pouvez désactiver les cookies dans les paramètres de votre
          navigateur, mais cela peut affecter certaines fonctionnalités du
          site.<br /><br />

          <strong>5. Partage d'Informations avec des Tiers</strong><br /><br />

          Nous ne partageons vos informations personnelles avec des tiers que
          dans le but de traiter vos transactions, livrer des produits ou
          fournir des services que vous avez demandés. Nous exigeons de ces
          tiers qu'ils respectent la confidentialité de vos informations.<br /><br />

          <strong>6. Modifications de la Politique de Confidentialité</strong
          ><br /><br />
          Nous nous réservons le droit de modifier cette politique de
          confidentialité à tout moment. Les modifications seront publiées sur
          le site et seront effectives dès leur publication. Il est de votre
          responsabilité de consulter régulièrement cette politique.
          <br /><br />

          <strong>7. Droits des Utilisateurs</strong><br /><br />
          Vous avez le droit d'accéder, de corriger, de mettre à jour ou de
          supprimer vos informations personnelles. Pour exercer ces droits,
          veuillez nous contacter à [adresse e-mail de contact].
          <br /><br />

          <strong>8. Consentement</strong><br /><br />
          En utilisant ce site, vous consentez à notre politique de
          confidentialité.
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
