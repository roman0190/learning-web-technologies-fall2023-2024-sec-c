<?php
session_start();
$user=$_SESSION['user_data'];
$id=$user['id'];
$name=$user['name'];
$userType=$user['user_type'];
$password=$user['password'];

?>