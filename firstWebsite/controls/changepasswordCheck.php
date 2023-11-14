<?php 
session_start();
require_once('../model/userModel.php');
require_once('../controls/validationFunction.php');

if(isset($_REQUEST['change'])){

    $new_password = $_REQUEST['new_password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $email = $_SESSION['email_check'];
    $checkPassword = validatePassword($new_password);
 
    $errorMessages = '';

        if (empty($new_password) || empty($confirm_password)) {
            $errorMessages .= "Password is required.<br>";
        }

        if ($new_password !== $confirm_password) {
            $errorMessages .= "Passwords do not match.<br>";
        }

        if ($checkPassword !== 'valid') {
            $errorMessages .= $checkPassword;
        }

        if (!empty($errorMessages)) {
            echo $errorMessages;
        } else {
            // Update the password
            $updatePassword = updatePassword($email, $new_password);

            if ($updatePassword) {
                header('location:../view/signin.php');
            } else {
                echo "Failed to update Password";
            }
        }
            
     
 }
 
?>