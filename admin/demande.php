<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>




<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Demande d'essai </h6>
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
        $nom_table = "essai";
        $nom_page = "demande.php";
        $connexion = mysqli_connect("localhost", "root", "", "supercar");
        $query = "SELECT * FROM $nom_table ORDER BY ID_demande ASC";
        $result = mysqli_query($connexion, $query);
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> id </th>
              <th> Modele </th>
              <th> Utilisateur </th>
              <th> Date demande </th>
              <th> Heure </th>
              <th> Statut </th>
              <th> Confirmer </th>
              <th> Terminer </th>
              <th> Supprimer </th>
              <th> Annuler </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($res = mysqli_fetch_array($result)) {
            ?>


              <tr>
                <td> <?php echo $res['ID_demande']; ?> </td>
                <td> <?php echo $res['Modele']; ?> </td>
                <td> <?php echo $res['Utilisateur']; ?> </td>
                <td> <?php echo $res['Date_demande']; ?> </td>
                <td> <?php echo $res['Heure']; ?> </td>
                <td> <?php echo $res['statut']; ?> </td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="confirmer_id" value=" <?php echo $res['ID_demande']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <button type="submit" name="statutbtn" class="btn btn-success"> CONFIRMER </button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="terminer_id" value="<?php echo $res['ID_demande']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <button type="submit" name="terminer_btn" class="btn btn-primary"> TERMINER </button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $res['ID_demande']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <input type="hidden" name="npage" value=" <?php echo $nom_page; ?>">
                    <button type="submit" name="delete_btn2" class="btn btn-danger"> SUPPRIMER </button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="annul_id" value="<?php echo $res['ID_demande']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <button type="submit" name="annul_btn" class="btn btn-warning"> ANNULER </button>
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
