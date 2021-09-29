<?php
include './include/header-asset.php';
include './db/db.php';
$pdo = pdo_connection();
?>

 <div class="container">
     <div class="row">
         <div class="col-md-6 mx-auto text-center">
           <div class="box" style="margin-top: 80px;">

                <form class="form-signin text-left" action="">
                <h3>PLease Login To Continue</h3>
                <input type="email" id="inputEmail" class="form-control  mt-3" placeholder="Loin Id" required="" autofocus="">

                <input type="password" id="inputPassword" class="form-control mt-3" placeholder="Password" required="">
                <input class="btn btn-lg btn-primary btn-block mt-2" type="submit" name="login_submit" value="save" />
                </form>
           </div>
         </div>
     </div>
 </div>

<?php
include './include/footer.php';
?>