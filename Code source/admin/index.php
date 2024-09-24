<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Contenus de la page -->
<div class="container-fluid">

  <!-- Page Heading
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generer un rapport</a>
  </div>  -->  

  <!-- Contenus du Tableau de bord -->
  <div class="row">

    <!-- Données accueil -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="accueil.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Accueil</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-home fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Données voiture -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="voiture.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Voiture</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-car fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Données evenement -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="evenement.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Evenement</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Données demande d'essai -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="demande.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Demande d'essai</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Donnees contact -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="contact.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Contact</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Donnees inscription -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="inscription.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Modifier les donnees</div></a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Inscription et Connexion</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-circle fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  
  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>