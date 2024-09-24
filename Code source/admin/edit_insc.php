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
   
    $query = "SELECT * FROM $nom_table WHERE ID_client='$id' ";
    $result = mysqli_query($connexion, $query);
   
    foreach($result as $res )
    {
         ?>
 
  <form action="code.php" method="post">
 
    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['ID_client'] ; ?>" >
    <div class="form-group">
        <label> Utilisateur </label>
        <input type="text" name="Utilisateur" value="<?php echo $res['Utilisateur'] ; ?>" class="form-control" placeholder="Entrer de texte">
    </div>
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="Nom" value="<?php echo $res['Nom'] ; ?>" class="form-control" placeholder="Entrer le chemin de l'image ">
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" name="Prenom" value="<?php echo $res['Prenom'] ; ?>" class="form-control" placeholder="Enter le chemin de la video">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="Email" value="<?php echo $res['Email'] ; ?>" class="form-control" placeholder="Enter le chemin de la video">
    </div>
    <div class="form-group">
        <label>Tel</label>
        <input type="number" name="Tel" value="<?php echo $res['Tel'] ; ?>" class="form-control" placeholder="Enter le chemin de la video">
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" name="Mdp" value="<?php echo $res['Mdp'] ; ?>" class="form-control" placeholder="Enter le chemin de la video">
    </div>
        <a href="inscription.php" class="btn btn-danger" > ANNULER</a>
        <button type="submit" name="updatebtn3" class="btn btn-primary"> Sauvegarder </button>
 
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