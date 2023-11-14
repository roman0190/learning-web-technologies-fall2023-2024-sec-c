<?php
session_start();
require_once('../model/userModel.php');
if(isset($_REQUEST['send'])){

    $email = $_REQUEST['email'];
    $_SESSION['email_check']=$email;


    $checkEmail = getEmail($email);

    if($checkEmail){

        //header('location:../view/changePassword.php');
        $token = random_int('4441','5251');
        $body="Password recovery";
        $msg="Your varification Code:$token";
        insertToken($token,$email);

        if(mail($email,$body,$msg)){
            echo "Sent";
        }

        
    } else{
        echo "Email Not Found";
    }

}

?>