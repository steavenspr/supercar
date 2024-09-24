<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
 
<div class="container-fluid">
 
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
  </div>
 
  <div class="card-body">
<?php    
$connection = mysqli_connect("localhost","root","","supercar");

  if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $nom_table = $_POST['ntable'];
   
    $query = "SELECT * FROM $nom_table WHERE id='$id' ";
    $result = mysqli_query($connection, $query);
   
    foreach($result as $res )
    {
         ?>
 
  <form action="code.php" method="POST">

    <input type="hidden" name="ntable" value=" <?php echo $nom_table; ?>">   
    <input type="hidden" name="edit_id" value="<?php echo $res['id'] ?>" >
    <div class="form-group">
        <label> Username </label>
        <input type="text" name="edit_username" value="<?php echo $res['username'] ?>" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="edit_email" value="<?php echo $res['email'] ?>" class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="edit_password" value="<?php echo $res['password'] ?>" class="form-control" placeholder="Enter Password">
    </div>
        <a href="register.php" class="btn btn-danger" > ANNULER</a>
        <button type="submit" name="updatebtn" class="btn btn-primary"> Sauvegarder </button>
 
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