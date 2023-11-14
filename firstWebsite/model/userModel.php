<?php
    require_once('db.php');
    function signin($username, $password){
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($con, $sql);

    
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $user_type = $row['user_type']; 
            $name=$row['name'];

            session_start();
            $_SESSION['user_type'] = $user_type;

            $text = "A/An " . $user_type . " Signed in.";
            $sql_notification = "INSERT INTO notifications (text) VALUES ('$text')";
            mysqli_query($con, $sql_notification);

            return true;
        } else {
            return false;
        }
    }
    
    function userRegistration($user) {
        $username = $user['username'];
        $name = $user['name'];
        $email = $user['email'];
        $gender = $user['gender'];
        $dob = $user['dob'];
        $password = $user['password'];
        $user_type = $user['user_type'];
    
        $con = getConnection();
    
        $checkUsername = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $checkUsername);
    
        if (mysqli_num_rows($result) > 0) {
            return "Username already exists. Please choose a different username.";
        }
    
        $sql = "INSERT INTO users (username, name, email, gender, dob, password, user_type) 
                VALUES ('$username', '$name', '$email', '$gender', '$dob', '$password', '$user_type')";

       
    
        if (mysqli_query($con, $sql)) {
            $text1 = "  " . $name . " created an account as a/an ".$user_type." ";
            $sql_notification = "INSERT INTO notifications (text) VALUES ('$text1')";
            mysqli_query($con, $sql_notification);
            return true;
            
        } else {
            return false;
        }
    }
    
    
    function getEmail($email){
        $con = getConnection();
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            //$row = mysqli_fetch_assoc($result);
            //return $row;
            return true ;
        } else {
            //echo "Invalid User";
            return false;
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user){

       
        $con = getConnection();


        $id = $user['id'];
        $username = $user['username'];
        $email = $user['email'];

        $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function deleteUser($id){

        $con = getConnection();
        $sql = "DELETE FROM users WHERE id = $id";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

   

    function updatePassword($email, $new_password) {
        $con = getConnection();

    
        $sql = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
    
        if (mysqli_query($con, $sql)) {
            return true; 
        } else {
            return false; 
        }
    }

    function insertToken($token, $email) {
        $con = getConnection();

        $updateTokenQuery = "UPDATE users SET token = '$token' WHERE email = '$email'";
        mysqli_query($con, $updateTokenQuery);
    
        mysqli_close($con);
    }
    
    function getToken($email) {
        $con = getConnection();
    
    
        $getTokenQuery = "SELECT token FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $getTokenQuery);
    
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $token = $row['token'];
        } else {
           
            $token = null;
        }
    
        mysqli_close($con);
    
        return $token;
    }
    

?>