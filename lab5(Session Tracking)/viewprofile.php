<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    $email = $_COOKIE['email'];
    $gender = $_COOKIE['gender'];
    $date_of_birth = $_COOKIE['dob'];
    
}else{
    header('location: login.php');
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="3">
                    <h2>XCompany</h2>
                    <p align="right">
                       Login as <a href="viewprofile.php"><?php echo $name; ?></a>
                        <span>|</span>
                        <a href="Login.php">logout</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td height="400px" width="200" valign="top">
                   <h3>Account<hr></h3>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="viewprofile.php">View Profile</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changeprofilepic.php">Change Profile Picture</a></li>
                        <li><a href="changepass.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </td>
                <td colspan="2">
                    <fieldset>
                    <Legend><h3>Profile</h3></Legend>
                    <table>
                        <tr>
                            <td>Name<hr></td>
                            <td>:<?php echo $name; ?><hr></td>
                            <td rowspan="3"><img src="profilepic.png"></td>
                            
                        </tr>
                        <tr>
                            <td>Email<hr></td>
                            <td>:<?php echo $email; ?><hr></td>
                            
                        </tr>
                        <tr>
                            <td>Gender<hr></td>
                            <td>:<?php echo $gender; ?><hr></td>
                        </tr>
                        <tr>
                            <td>Date of Birth<hr></td>
                            <td>:<?php echo $date_of_birth; ?><hr></td><br>
                            <td align="center"><a href="changeprofilepic.php">Change</a></td>
                        </tr>
                        <tr>
                            <td><a href="editprofile.php">Edit Profile</a></td>
                        </tr>
                    </table>
                    </fieldset>
                    
                </td>
            </tr>
            <tr>
                <td align="center" width="600px" colspan="3">Copyright 2017</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
