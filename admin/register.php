<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="username" class="form-control" placeholder="Entrer le nom d'utilisateur">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Entrer l'Email">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Entrer le mot de passe">
            </div>
            <div class="form-group">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirmer le mot de passe">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Profile Admin
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter un Profile Admin
            </button>
    </h6>
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
    $nom_table = "register";
    $nom_page = "register.php";
    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "SELECT * FROM $nom_table ORDER BY id ASC";
    $result = mysqli_query($connexion, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Nom d'utilisateur </th>
            <th>Email </th>
            <th>Mot de passe</th>
            <th>MODIFIER </th>
            <th>SUPPRIMER </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($res = mysqli_fetch_array($result))
          {
            ?>
            
     
          <tr>
            <td> <?php echo $res['id']; ?> </td>
            <td> <?php echo $res['username']; ?> </td>
            <td> <?php echo $res['email']; ?> </td>
            <td> <?php echo $res['password']; ?> </td>
            <td>
                <form action="register-edit.php" method="post">
                    <input type="hidden" name="edit_id" value=" <?php echo $res['id']; ?>">
                    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> MODIFIER </button>
                </form>
            </td>
            <td>
            <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $res['id']; ?>">
                  <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">
                  <input type="hidden" name="npage" value=" <?php echo $nom_page; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER </button>
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