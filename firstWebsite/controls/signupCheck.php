<?php
session_start();
require_once("../controls/validationFunction.php");
require_once("../model/userModel.php");

if (isset($_REQUEST["submit"])) {
    $username = $_REQUEST["username"];
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $gender = $_REQUEST["gender"];
    $dob = $_REQUEST["dob"];
    $password = $_REQUEST["password"];
    $re_password = $_REQUEST["re_password"];
    $user_type = $_REQUEST["user_type"];

    $user = [
        'username' =>$username,
        'name' =>$name,
        'email' =>$email,
        'gender' =>$gender,
        'dob' =>$dob,
        'password' =>$password,
        're_password' =>$re_password,
        'user_type' => $user_type
    ];
    $_SESSION['user']=$user;

    //calling all the functions
    $checkName=validateName($name);
    $checkUsername=validateUsername($username);
    $checkPassword=validatePassword($password);
   


    $errorMessages = '';

    if (empty($username) || empty($name) || empty($email) || empty($gender) || empty($dob) || empty($password) || empty($re_password) || empty($user_type)) {
        $errorMessages .= "All fields are required. Please fill in all details.<br>";
    }

    if ($password !== $re_password) {
        $errorMessages .= "Passwords do not match. Please re-enter matching passwords.<br>";
    }

    if ($checkUsername !== 'valid') {
        $errorMessages .= $checkUsername;
    }

    if ($checkPassword !== 'valid') {
        $errorMessages .= $checkPassword;
    }

    if ($checkName !== 'valid') {
        $errorMessages .= $checkName;
    }

    if (!empty($errorMessages)) {
        echo $errorMessages;
    }

    else {
        
        //$_SESSION['flag'] = true;

        $RegistrationCheck = userRegistration($user);
        if( $RegistrationCheck === true)
        {
            header('location: ../view/signin.php');

        } else{

            echo $RegistrationCheck;

        }
        
    }

} 
?>
