<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
 
<div class="container-fluid">
 
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Modifier Contact </h6>
  </div>
 
  <div class="card-body">
<?php    

  if(isset($_POST['edit_btn']))
{
    $ID_contact = $_POST['edit_id'];
    $nom_table = $_POST['ntable'];

    $connection = mysqli_connect("localhost","root","","supercar");
    $query = "SELECT * FROM $nom_table WHERE ID_contact='$ID_contact' ";
    $result = mysqli_query($connection, $query);
   
    if ($result) {
      foreach ($result as $res) {
    
         ?>
 
  <form action="code.php" method="POST">
       
  <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['ID_contact']  ?>" >
    <div class="form-group">
        <label> Nom </label>
        <input type="text" name="nom" value="<?php echo $res['Nom'] ?>" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" name="prenom" value="<?php echo $res['Prenom'] ?>" class="form-control" placeholder="Prenom">
    </div>
    <div class="form-group">
        <label>Tel</label>
        <input type="number" name="tel" value="<?php echo $res['Tel'] ?>" class="form-control" placeholder="Numero de telephone">
    </div>
    <div class="form-group">
        <label>Mail</label>
        <input type="email" name="mail" value="<?php echo $res['Mail'] ?>" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label>Message</label>
        <input type="Message" name="message" value="<?php echo $res['Message'] ?>" class="form-control" placeholder="Message">
    </div>
        <a href="contact.php" class="btn btn-danger" > Annuler</a>
        <button type="submit" name="updatebtn4" class="btn btn-primary"> Mettre à jour </button>

        </form>
  
        <?php
            }
        } else {
            echo "Erreur: " . mysqli_error($connection);
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