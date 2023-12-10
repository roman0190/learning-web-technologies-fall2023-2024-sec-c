<?php
require_once("db.php");

function registration($name, $username, $email, $gender, $password) {
  


    $conn = getConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (name, username, email, gender, password) 
            VALUES ('$name', '$username', '$email', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'User registered successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . $conn->error]);
    }

}

function loginCheck($username, $password) {
    $conn = getConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if ($password === $storedPassword) {
            return ['status' => 'success', 'message' => 'Login successful'];
        } else {
            return ['status' => 'error', 'message' => 'Invalid password'];
        }
    } else {
        return ['status' => 'error', 'message' => 'User not found'];
    }

}



?>