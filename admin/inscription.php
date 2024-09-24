<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    
  </div>

  <div class="card-body">

  <?php 

  if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
    echo '<h2>' .$_SESSION['success']. '</h2>';
    unset($_SESSION['success']);
  }

  if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    echo '<h2>' .$_SESSION['status']. '</h2>';
    unset($_SESSION['status']);
  }
  ?>

    <div class="table-responsive">

    <?php
    $nom_table = "client_inscrit";
    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "SELECT * FROM $nom_table ORDER BY ID_client ASC";
    $result = mysqli_query($connexion, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> id </th>
            <th> Nom utilisateur </th>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Email </th>
            <th> Tel </th>
            <th> Mot de passe </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($res = mysqli_fetch_array($result))
          {
            ?>
            
     
          <tr>
            <td> <?php echo $res['ID_client']; ?> </td>
            <td> <?php echo $res['Utilisateur']; ?> </td>
            <td> <?php echo $res['Nom']; ?> </td>
            <td> <?php echo $res['Prenom']; ?> </td>
            <td> <?php echo $res['Email']; ?> </td>
            <td> <?php echo $res['Tel']; ?> </td>
            <td> <?php echo $res['Mdp']; ?> </td>
            
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