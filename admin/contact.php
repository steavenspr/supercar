<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
    </div>

    <div class="card-body">

      <?php

      if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h2 class="bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
        unset($_SESSION['success']);
      }

      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . '</h2>';
        unset($_SESSION['status']);
      }
      ?>

      <div class="table-responsive">

        <?php
        $nom_table = "contact";
        $connexion = mysqli_connect("localhost", "root", "", "supercar");
        $query = "SELECT * FROM $nom_table ORDER BY id ASC";
        $query = "SELECT * FROM contact";
        $result = mysqli_query($connexion, $query);
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> id </th>
              <th> Nom </th>
              <th>Prenom</th>
              <th>Mail</th>
              <th>Tel</th>
              <th>Message</th>
              <th>Modifier </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($res = mysqli_fetch_array($result)) {
            ?>


              <tr>
                <td> <?php echo $res['ID_contact']; ?> </td>
                <td> <?php echo $res['Nom']; ?> </td>
                <td> <?php echo $res['Prenom']; ?> </td>
                <td> <?php echo $res['Mail']; ?> </td>
                <td> <?php echo $res['Tel']; ?> </td>
                <td> <?php echo $res['Message']; ?> </td>
                <td>
                  <form action="contact_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $res['ID_contact']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
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


  <!-- /.container-fluid -->

  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>