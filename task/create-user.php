<?php
$title = 'Create User';
include './include/header-asset.php';
if (isset($_SESSION['user']) && $_SESSION['user_category'] == 'admin') {

} else {
    header('location:index.php?error="Access Deneid"');
}

?>

 <div class="container">
     <div class="row">
         <div class="col-md-6 mx-auto ">
           <div class="box" style="margin-top: 80px;">

                <form class="form-signin" action="action.php" method="POST">
                <h3 class="text-center">Create New User <a href="index.php">Back</a></h3>

                <p class="text-danger"><?=isset($_GET['error']) ? $_GET['error'] : '';?></p>
                <p class="text-success"><?=isset($_GET['success']) ? $_GET['success'] : '';?></p>

                <p>User Name</p>
                <input type="text" name="user_name" class="form-control mb-3" placeholder="User Name"  autofocus="">
                <p>User Login ID</p>
                <input type="text" name="user_login_id"  class="form-control  mb-3" placeholder="Loin Id" >
                <p>User Type</p>
                <select class="form-control mb-3" name="user_category" >
                    <option value="">Select User Type</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
                <p>User Password</p>
                <input type="password"  name="user_password" class="form-control mb-3" placeholder="Password" >
                <input class="btn btn-lg btn-primary btn-block mb-2" type="submit" name="create_user" value="save" />
                </form>
           </div>
         </div>
     </div>
 </div>

<?php
include './include/footer.php';
?>