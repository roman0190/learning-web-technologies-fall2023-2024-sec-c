<?php
    require_once('db.php');

    function getUserData($userId, $password) {
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE id='{$userId}' AND password='{$password}'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) == 1) {
            $userData = mysqli_fetch_assoc($result);
            return $userData; 
        }
    
        return false; 
    }
    
   
    function RegistrationUser($id, $password, $name, $userType) {
        $con = getConnection();
        
        
        $checkQuery = "SELECT id FROM users WHERE id = '$id'";
        $checkResult = mysqli_query($con, $checkQuery);
        
        if (mysqli_num_rows($checkResult) > 0) {

            echo "User ID already exists. Please choose a different ID.";
            return false;
        } else {
            
            $sql = "INSERT INTO users (id, password, name, user_type) VALUES ('$id', '$password', '$name', '$userType')";
            
            if (mysqli_query($con, $sql)) {
                return true; 
            } else {
                return false; 
            }
        }
    }
    function updatePassword($id, $confirmPassword) {
    
            $con = getConnection();
        
            $sql = "UPDATE users SET password = '$confirmPassword'WHERE id = $id";
    
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
    
    

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where id = '$id'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "Invalid User";
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

    
?>