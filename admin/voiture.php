<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle voiture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label> Immatriculation </label>
            <input type="text" name="Immatriculation" class="form-control" placeholder="Entrer le no d'immatriculation">
          </div>
          <div class="form-group">
            <label>Marque</label>
            <input type="text" name="Marque" class="form-control" placeholder="Entrer la marque">
          </div>
          <div class="form-group">
            <label>Modele</label>
            <input type="text" name="Modele" class="form-control" placeholder="Entrer le modele">
          </div>
          <div class="form-group">
            <label>Places</label>
            <input type="number" name="places" class="form-control" placeholder="Entrer le nombre de places">
          </div>
          <div class="form-group">
            <label>Poids a vide</label>
            <input type="number" name="poidvide" class="form-control" placeholder="Entrer le poids de la voiture a vide">
          </div>
          <div class="form-group">
            <label>Longueur</label>
            <input type="number" name="longueur" class="form-control" placeholder="Entrer la longueur">
          </div>
          <div class="form-group">
            <label>Largeur</label>
            <input type="number" name="largeur" class="form-control" placeholder="Entrer la largeur">
          </div>
          <div class="form-group">
            <label>Hauteur</label>
            <input type="number" name="hauteur" class="form-control" placeholder="Entrer la hauteur">
          </div>
          <div class="form-group">
            <label>Vitesse max</label>
            <input type="number" name="vmax" class="form-control" placeholder="Entrer la vitesse max">
          </div>
          <div class="form-group">
            <label>Carburant</label>
            <input type="text" name="Carburant" class="form-control" placeholder="Entrer le type de carburant">
          </div>
          <div class="form-group">
            <label>Volume du Reservoir</label>
            <input type="number" name="reservoir" class="form-control" placeholder="Entrer le volume du reservoir">
          </div>
          <div class="form-group">
            <label>prix</label>
            <input type="number" name="prix" class="form-control" placeholder="Entrer le prix">
          </div>
          <div class="form-group">
            <label>Titre de la carte</label>
            <input type="text" name="titre" class="form-control" placeholder="Entrer le titre">
          </div>
          <div class="form-group">
            <label>Chemin de l'image</label>
            <input type="text" name="img" class="form-control" placeholder="Entrer l'image de la voiture a afficher">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="nvoiture" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Voitures
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Ajouter une voiture
        </button>
      </h6>
    </div>

    <div class="card-body">

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

      <div class="table-responsive">

        <?php
        $nom_table = "voiture";
        $nom_page = "voiture.php";
        $connexion = mysqli_connect("localhost", "root", "", "supercar");
        $query = "SELECT * FROM $nom_table ORDER BY Immatriculation";
        $result = mysqli_query($connexion, $query);
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> Imo </th>
              <th> Marque </th>
              <th> Modele </th>
              <th> Places </th>
              <th> Poids vide </th>
              <th> Longeur </th>
              <th> Largeur </th>
              <th> Hauteur </th>
              <th> Vitesse Max </th>
              <th> Carburant </th>
              <th> Reservoir </th>
              <th> Prix </th>
              <th> Titre </th>
              <th> Image </th>
              <th> Modifier </th>
              <th> Supprimer </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($res = mysqli_fetch_array($result)) {
            ?>


              <tr>
                <td> <?php echo $res['Immatriculation']; ?> </td>
                <td> <?php echo $res['Marque']; ?> </td>
                <td> <?php echo $res['Modele']; ?> </td>
                <td> <?php echo $res['places']; ?> </td>
                <td> <?php echo $res['poidvide']; ?> </td>
                <td> <?php echo $res['longueur']; ?> </td>
                <td> <?php echo $res['largeur']; ?> </td>
                <td> <?php echo $res['hauteur']; ?> </td>
                <td> <?php echo $res['vmax']; ?> </td>
                <td> <?php echo $res['Carburant']; ?> </td>
                <td> <?php echo $res['reservoir']; ?> </td>
                <td> <?php echo $res['prix']; ?> $</td>
                <td> <?php echo $res['titre']; ?> </td>
                <td> <img width="100px" src="<?php echo $res['img']; ?>" /> </td>

                <td>
                  <form action="edit_voiture.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $res['Immatriculation']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER </button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $res['Immatriculation']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <input type="hidden" name="npage" value=" <?php echo $nom_page; ?>">
                    <button type="submit" name="delete_btn1" class="btn btn-danger"> SUPPRIMER </button>
                  </form>
                </td>
              </tr>
            <?php
            }

            ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>