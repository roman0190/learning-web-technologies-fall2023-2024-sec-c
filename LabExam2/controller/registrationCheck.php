<?php
require_once('../model/userModel.php');

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$username = $data->username;
$email = $data->email;
$gender = $data->gender;
$password = $data->password;

registration($name, $username, $email, $gender, $password);

?>