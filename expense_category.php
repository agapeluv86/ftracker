<?php
session_start();
require_once("admin_guard.php");
require_once("classes/Expensecategory.php");
require_once ("classes/Admin.php");
$admin = new Admin;
$admin->get_admin_id($_SESSION["admin_id"]);
include_once "partials/admin_header.php";


$expcat = New Expensecategory;
$expcate = $expcat->display_expcat();


?>


<div class="row">
    <?php require_once "partials/admin_menu.php"; ?>

    <div class="col-md-9 p-3">

        <div class="card shadow-sm">
            <div class="card-header bg-light text-black">
            <?php
            if (isset($_SESSION["good_msg"])) {
                echo "<div class='alert alert-success'>" . $_SESSION['good_msg'] . "</div>";
                unset($_SESSION['good_msg']);
            }
            ?>
                <h5 class="my-3">
                    <i class="fas fa-piggy-bank fa-3x me-3" style="color: orange;"></i>Expense Category
                </h5>
                <a href="add_expense_category.php" class="btn btn-success">
                        <i class="fa-solid fa-plus"></i> Add Category
                    </a>
            </div>
            
            <div class="card-body">
               
                <table class="table table-striped table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($expcate as $expcat) {
                        ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $expcat["category_name"]; ?></td>
                                <td>
                                    <a href="update_exp_cat.php?id=<?php echo $expcat['category_id']; ?>" 
                                    class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Update
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 
<div class="row mt-5">
      <div class="col-md-12 bg-info p-1 text-center"><p>&copy 2024 Agape Nigeria Limited. All rights reserved.</p></div>
      </div>
      <?php include_once "partials/footer.php"; ?>

