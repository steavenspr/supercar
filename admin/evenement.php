<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Evenement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Titre </label>
                <input type="text" name="titre" class="form-control" placeholder="Entrer le nom d'utilisateur">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="txt" class="form-control" placeholder="Entrer l'Email">
            </div>
            <div class="mb-3">
              <label for="formFileSm" class="form-label">Image</label>
              <input class="form-control form-control-sm" id="formFileSm" name="img" type="file">
            </div>
            <div class="form-group">
                <label>Date de debut</label>
                <input type="date" name="debut" class="form-control" placeholder="Confirmer le mot de passe">
            </div>
            <div class="form-group">
                <label>Date de fin</label>
                <input type="date" name="fin" class="form-control" placeholder="Confirmer le mot de passe">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="nevent" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Evenements
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter un Evenement
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
    $nom_table = "event";
    $nom_page = "evenement.php";
    $connexion = mysqli_connect("localhost", "root", "", "supercar");
    $query = "SELECT * FROM $nom_table ORDER BY id ASC";
    $result = mysqli_query($connexion, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> id </th>
            <th> titre </th>
            <th> texte </th>
            <th> image </th>
            <th> Date de debut </th>
            <th> Date de fin </th>
            <th> Modifier </th>
            <th> Supprimer </th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          while($res = mysqli_fetch_array($result))
          {
            ?>
            
     
          <tr>
            <td> <?php echo $res['id']; ?> </td>
            <td> <?php echo $res['titre']; ?> </td>
            <td> <?php echo $res['txt']; ?> </td>
            <td><img width="100px" src="/supercar/img/<?php echo $res['img']; ?> "/></td>
            <td> <?php echo $res['debut']; ?> </td>
            <td> <?php echo $res['fin']; ?> </td>
            <td>
            <form action="edit_event.php" method="post">
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
<!-- fin container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>