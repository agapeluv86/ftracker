<?php
error_reporting(E_ALL);
session_start();
require_once("../classes/Utility.php");
require_once ("../classes/Incomecategory.php");

$incomecategory = new Incomecategory;
if(isset($_POST["btnupdate"])){
    $name =sanitizer ($_POST["name"]);
    $category_id = sanitizer($_POST["category_id"]);
    $admin = $_SESSION['admin_id'];

   

     if(empty($name) || empty($category_id)){
        $_SESSION["errormsg"] = "All fields are required";
        header("location:../update_income_cat.php");
        exit();
    }else{
       
        $incomecategory->update_incomecategory($name,$category_id);
        $_SESSION['good_msg']= "Income category updated successfully!";
        header("location:../income_category.php");
        exit();
 
    }
}else{
    $_SESSION["errormsg"] = "Please fill the form";
    header("location:../update_income_cat.php");
    exit();
}
?>