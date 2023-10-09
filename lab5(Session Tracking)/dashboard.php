<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    
}else{
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="3">
                    <h2>XCompany</h2>
                    <p align="right">
                        Login as<a href="viewprofile.php"><?php echo $name; ?></a>
                        <span>|</span>
                        <a href="Login.php">logout</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td height="200px" width="300">
                   <h3>Account <hr></h3>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="viewprofile.php">View Profile</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changeprofilepic.php">Change Profile Picture</a></li>
                        <li><a href="changepass.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </td>
                <td valign="top"><h2>Welcome <?php echo $name; ?></h2</td>
               
            </tr>
            <tr>
                <td align="center" width="500px" colspan="3">Copyright 2017</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
