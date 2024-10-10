<?php
session_start();
require_once("admin_guard.php");
require_once("classes/Savingsgoal.php");

include_once "partials/admin_header.php";



 $s = new Savingsgoal;
 $savingsgoal= $s->display_savings();
 ?>



<div class="container">
  <div class="row">
    
    
    <?php
      require_once "partials/admin_menu.php";
    ?>

   
    <div class="col-md-9 p-3">
      <div class="card shadow-sm">
        
        
        <div class="card-header bg-light">
          <i class="fas fa-coins fa-3x me-3" style="color: blue;"></i>
          <h5 class="my-3">Savings Goal Details</h5>
        </div>
        
       
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead class="table-primary">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Description</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Users</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">End Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $counter = 1;
                  foreach($savingsgoal as $savings){
                ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo($savings["description"]); ?></td>
                  <td><?php echo($savings["amount"]); ?></td>
                  <td><?php echo($savings["email"]); ?></td>
                  <td><?php echo($savings["start_date"]); ?></td>
                  <td><?php echo($savings["end_date"]); ?></td>
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

 
 
<div class="rowmt-5">
      <div class="col-md-12 bg-info p-1 text-center"><p>&copy 2024 Agape Nigeria Limited. All rights reserved.</p></div>
      </div>
      <?php include_once "partials/footer.php"; ?>
