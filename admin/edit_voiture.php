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
    $Immatriculation = $_POST['edit_id'];
    $nom_table = $_POST['ntable'];
   
    $query = "SELECT * FROM $nom_table WHERE Immatriculation='$Immatriculation' ";
    $result = mysqli_query($connexion, $query);
   
    foreach($result as $res )
    {
         ?>
 
 <form action="code.php" method="post">
 
    <input type="hidden" name="ntable" value="<?php echo $nom_table ; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['Immatriculation'] ; ?>" >
    <div class="form-group">
        <label>Marque</label>
        <input type="text" name="Marque" value="<?php echo $res['Marque'] ; ?>" class="form-control" placeholder="Entrer le titre">
    </div>
    <div class="form-group">
        <label>Modele</label>
        <input type="text" name="Modele" value="<?php echo $res['Modele'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Places</label>
        <input type="number" name="places" value="<?php echo $res['places'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Poids a vide</label>
        <input type="number" name="poidvide" value="<?php echo $res['poidvide'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Longueur</label>
        <input type="number" name="longueur" value="<?php echo $res['longueur'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Largeur</label>
        <input type="number" name="largeur" value="<?php echo $res['largeur'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Hauteur</label>
        <input type="number" name="hauteur" value="<?php echo $res['hauteur'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Vitesse maximale</label>
        <input type="number" name="vmax" value="<?php echo $res['vmax'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Carburant</label>
        <input type="text" name="Carburant" value="<?php echo $res['Carburant'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Volume du Reservoir</label>
        <input type="number" name="reservoir" value="<?php echo $res['reservoir'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Prix/label>
        <input type="number" name="prix" value="<?php echo $res['prix'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $res['titre'] ; ?>" class="form-control" placeholder="Entrer le chemin du texte ">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="text" name="img" value="<?php echo $res['img'] ; ?>" class="form-control" placeholder="Entrer le chemin de l'image ">
    </div>
    
        <a href="voiture.php" class="btn btn-danger" > ANNULER</a>
        <button type="submit" name="updatebtn5" class="btn btn-primary"> Sauvegarder </button>
 
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




