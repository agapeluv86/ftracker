<?php
error_reporting(E_ALL);
session_start();
require_once("../classes/Utility.php");
require_once ("../classes/Expense.php");

$expense = new Expense;
if(isset($_POST["btnadd"])){
    $desc = sanitizer($_POST["description"]);
    $amount = sanitizer($_POST["amount"]);
    $date = sanitizer($_POST["date"]);
    $category_id =sanitizer($_POST["category_id"]);
     $user = $_SESSION['user_id'];
   

    if(empty($desc) || empty($amount) || empty($date) ||empty($category_id)){
        $_SESSION["errormsg"] = "All fields are required";
        header("location:../finance_expense.php");
        exit();
    }else{
       
        $expense->insertexpense($desc,$amount,$date,$user,$category_id);
        $_SESSION['good_msg']= "Expense Added succesfully";
        header("location:../finance_expense.php");
        exit();
        }
}else{
    $_SESSION["errormsg"] = "Please fill the form";
    header("location:../finance_expense.php");
    exit();
}



// //$expense = new Expense;
// if(isset($_POST["btnupdate"])){
//     $desc =sanitizer ($_POST["description"]);
//     $amount = sanitizer ($_POST["amount"]);
//     $date = sanitizer($_POST["date"]);
//     $user = $_SESSION['user_id'];

   

//     if(empty($desc) || empty($amount) || empty($date) || empty($user)){
//         $_SESSION["errormsg"] = "All fields are required";
//         header("location:../finance_expense.php");
//         exit();
//     }else{
       
//         $expense->update_expense($desc,$amount,$date,$user);
//         $_SESSION['good_msg']= "Expense updated Successfully";
//         header("location:../finance_expense.php");
//         exit();
 
//     }
// }else{
//     $_SESSION["errormsg"] = "Please fill the form";
//     header("location:../finance_expense.php");
//     exit();
// }

?>