<?php
include './include/header-asset.php';
include './db/db.php';
$pdo = pdo_connection();
?>

 <div class="container">
     <div class="row">
         <div class="col-md-6 mx-auto text-center">
           <div class="box" style="margin-top: 50px;">
               <h3>Hey Shakhawat Welcome to dashboard</h3>
               <button class="btn btn-lg  btn-outline-success mt-5">Create New User</button>
           </div>
         </div>
     </div>
 </div>

<?php
include './include/footer.php';
?>