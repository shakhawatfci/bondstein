<?php
$title = "Home Page";
include './include/header-asset.php';
if (!$_SESSION['user']) {
    header('location:login.php');
}

?>

 <div class="container">
     <div class="row">
         <div class="col-md-6 mx-auto text-center">
           <div class="box" style="margin-top: 50px;">
               <h3>Hey <span class="text-success"><?php echo $_SESSION['user_name']; ?> </span> Welcome to dashboard <br> <a href="logout.php">Logout</a></h3>
               <?php if ($_SESSION['user_category'] == 'admin') {?>
               <a href="create-user.php" class="btn btn-lg  btn-outline-success mt-5">Create New User</a>
               <?php }?>
           </div>
         </div>
     </div>
 </div>

<?php
include './include/footer.php';
?>