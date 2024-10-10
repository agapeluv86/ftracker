<?php
session_start();
require_once("admin_guard.php");
require_once("classes/Income.php");


include_once "partials/admin_header.php";


$e = new Income;
$incomes= $e->display_income_admin();


?>


<div class="container">
  <div class="row">
    
   
    <?php
      require_once "partials/admin_menu.php";
    ?>
    
  
    <div class="col-md-9 p-3">
      <div class="card shadow-sm">
        
       
        <div class="card-header bg-light">
        
          <i class="fas fa-money-bill-wave fa-3x me-3" style="color: green;"></i>
          <h5 class="my-3">Income Details</h5>
        </div>
        
       
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Description</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">Income Category</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $counter = 1;
                  foreach($incomes as $income){
                ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo($income["description"]); ?></td>
                  <td><?php echo($income["amount"]); ?></td>
                  <td><?php echo($income["date"]); ?></td>
                  <td><?php echo($income["name"]); ?></td>
                  <td><?php echo($income["firstname"]); ?></td>
                  <td><?php echo($income["email"]); ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

 
<div class="row mt-5">
      <div class="col-md-12 bg-info p-1 text-center"><p>&copy 2024 Agape Nigeria Limited. All rights reserved.</p></div>
      </div>
      <?php include_once "partials/footer.php"; ?>


