<?php
    session_start();
    require_once("../classes/User.php");
    $user = new User;
    // $center = new Center;
    //check if form was submitted or they visited the page directly
    if(isset($_POST['btnlogin'])){
        //retrieve form data
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $data = $user->login($email,$password);
        if($data){
            $_SESSION['user_id']=$data;
            header("location:../finance_dashboard.php");
            exit();
        }else{
            header("location:../login.php");
            exit();

        }
    }
        










        

?>