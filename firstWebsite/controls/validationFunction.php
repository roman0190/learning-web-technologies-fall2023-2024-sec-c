
<?php
//password validation Check
function validatePassword($password) {
    
    if (strlen($password) <= 5) {
        return "Password should be more than 5 characters and use Special Character[#@*!]<br>";
    }

    $specialChars = ['#', '@', '!', '$', '*'];
    $containsSpecialChar = false;

    foreach ($specialChars as $char) {
        if (strpos($password, $char) !== false) {
            $containsSpecialChar = true;
            break;
        }
    }

    if (!$containsSpecialChar) {
        return "Password should contain at least one of #@!$* characters.<br>";
    }

    return 'valid'; 
}


//username validation check
function validateUsername($username) {

    if (strspn($username, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') <= 4) {
        return "Username should consist only of alphanumeric characters and 4 character<br>";
    }

    return 'valid'; 
}


//Name validation check
function validateName($name) {

    if (strspn($name, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') <=2) {
        return "Name should consist only of alphabet and 2 character<br>";
    }

    return 'valid'; 
}




?>