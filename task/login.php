<?php
$title = "Login Page";
include './include/header-asset.php';
if (isset($_SESSION['user'])) {
    header('location:index.php?error="Already Loggedin"');
}
include './db/db.php';
?>

 <div class="container">
     <div class="row">
         <div class="col-md-6 mx-auto text-center">
           <div class="box" style="margin-top: 80px;">
           <p class="text-danger"><?=isset($_GET['error']) ? $_GET['error'] : '';?></p>
                <p class="text-success"><?=isset($_GET['success']) ? $_GET['success'] : '';?></p>
                <form class="form-signin text-left" action="action.php" method="POST">
                <h3>PLease Login To Continue</h3>
                <input type="text" name="user_login_id" id="inputEmail" class="form-control  mt-3" placeholder="Loin Id" required="" autofocus="">

                <input type="password" id="inputPassword" name="user_password" class="form-control mt-3" placeholder="Password" required="">
                <input class="btn btn-lg btn-primary btn-block mt-2" type="submit" name="login_submit" value="save" />
                </form>
           </div>
         </div>
     </div>
 </div>

<?php
include './include/footer.php';
?>