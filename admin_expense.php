<?php
session_start();
require_once("admin_guard.php");
require_once("classes/Expense.php");




include_once "partials/admin_header.php";




$e = new Expense;
$expenses= $e->display_expense_admin();



?>



<div class="container">
  <div class="row">
    
    
    <?php
      require_once "partials/admin_menu.php";
    ?>
    
    
    <div class="col-md-9 p-3">
      <div class="card shadow-sm">
        
        
        <div class="card-header bg-light">
          <i class="fas fa-piggy-bank fa-3x me-3" style="color: orange;"></i>
          <h5 class="my-3">Expense Details</h5>
        </div>
        
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead class="table-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Description</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">Expense Category</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $counter = 1;
                  foreach($expenses as $expense){
                ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo($expense["description"]); ?></td>
                  <td><?php echo($expense["amount"]); ?></td>
                  <td><?php echo($expense["date"]); ?></td>
                  <td><?php echo($expense["category_name"]); ?></td>
                  <td><?php echo($expense["firstname"]); ?></td>
                  <td><?php echo($expense["email"]); ?></td>
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





  
  
  
