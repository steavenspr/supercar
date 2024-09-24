<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Accueil</h6>

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
      $nom_table = "accueil";
      $connexion = mysqli_connect("localhost", "root", "", "supercar");
      $query = "SELECT * FROM $nom_table ORDER BY id ASC";
      $result = mysqli_query($connexion, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> id </th>
            <th> text </th>
            <th> image </th>
            <th> video </th>
            <th> Modifier </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($res = mysqli_fetch_array($result)) {
          ?>


            <tr>
              <td> <?php echo $res['id']; ?> </td>
              <td> <?php echo $res['txt']; ?> </td>
              <td><img width="100px" src=" <?php echo $res['img']; ?> " /></td>
              <td> <?php echo $res['vid']; ?> </td>
              <td>
                <form action="modif.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $res['id']; ?>">
                  <input type="hidden" name="ntable" value="<?php echo $nom_table; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER </button>
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