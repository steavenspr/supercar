<?php
session_start();
include('includes/header.php');
include('database/dbconfig.php');

?>
 
<div class="container-fluid">
 
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Modifier les donnees de la Page </h6>
  </div>
 
  <div class="card-body">
  <?php    
  $connexion = mysqli_connect("localhost","root","","supercar");
  if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $nom_table = $_POST['ntable'];
   
    $query = "SELECT * FROM $nom_table WHERE id='$id' ";
    $result = mysqli_query($connexion, $query);
   
    foreach($result as $res )
    {
         ?>
 
  <form action="code.php" method="post">
 
    <input type="hidden" name="ntable" value=" <?php echo $nom_table ; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['id'] ; ?>" >
    <div class="form-group">
        <label>titre</label>
        <input type="text" name="titre" value="<?php echo $res['titre'] ; ?>" class="form-control" placeholder="Entrer le titre">
    </div>
    <div class="form-group">
        <label>texte</label>
        <input type="text" name="txt" value="<?php echo $res['txt'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="mb-3">
         <label for="formFile" class="form-label">Image</label>
         <input class="form-control" type="file" name="img" value="<?php echo $res['img'] ; ?>" id="formFile">
    </div>
    <div class="form-group">
        <label>Date de debut</label>
        <input type="date" name="debut" value="<?php echo $res['debut'] ; ?>" class="form-control" placeholder="Enter la date de debut de l'evenement">
    </div>
    <div class="form-group">
        <label>Date de fin</label>
        <input type="date" name="fin" value="<?php echo $res['fin'] ; ?>" class="form-control" placeholder="Enter la date de fin de l'evenement">
    </div>
        <a href="evenement.php" class="btn btn-danger" > ANNULER</a>
        <button type="submit" name="updatebtn2" class="btn btn-primary"> Sauvegarder </button>
 
        </form>
        <?php
    }
 
}
?>
 
  </div>
  </div>
</div>
 
</div>
<!-- /.container-fluid -->
 
 
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
