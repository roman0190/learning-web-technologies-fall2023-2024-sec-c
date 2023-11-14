<?php
session_start();
require_once("../model/userModel.php");

if(isset($_REQUEST["submit"])){
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $remember_me=$_REQUEST["remember_me"];


    $logInfo = [
        'username' =>$username,
        'password' =>$password,
        'remember_me'=>$remember_me
    ];
     $errorMessege = '';
     if(empty($username))
     {
        $errorMessege .= "Enter the Username <br>";
     } else if(empty($password)){
        $errorMessege .= "Enter the Password <br>";

     } else{

         $_SESSION['logInfo']=$logInfo;
         $signCheck = signin($username, $password);
         

         if($signCheck === true){

            $_SESSION['flag']=true;
            header('location: dashboardCheck.php');
            if ($remember_me) {
                setcookie('remember_me',$remember_me, time() + (60*60*24), "/"); // Cookie set for 1day
            }
            
         } else{

            echo "Invalid Username or Password";

         }

     }

}
?>