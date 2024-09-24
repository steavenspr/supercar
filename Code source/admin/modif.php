<?php
session_start();
include('includes/header.php');
include_once('database/dbconfig.php');

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
 
    <input type="hidden" name="ntable" value="<?php echo $nom_table; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['id']; ?>" >
    <div class="form-group">
        <label> texte </label>
        <input type="text" name="txt" value="<?php echo $res['txt']; ?>" class="form-control" placeholder="Entrer le texte">
    </div>
    <div class="form-group">
        <label>image</label>
        <input type="text" name="img" value="<?php echo $res['img']; ?>" class="form-control" placeholder="Entrer le chemin de l'image ">
    </div>
    <div class="form-group">
        <label>video</label>
        <input type="text" name="vid" value="<?php echo $res['vid']; ?>" class="form-control" placeholder="Enter le chemin de la video">
    </div>
        <a href="accueil.php" class="btn btn-danger" > ANNULER</a>
        <button type="submit" name="updatebtn1" class="btn btn-primary"> Sauvegarder </button>
 
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