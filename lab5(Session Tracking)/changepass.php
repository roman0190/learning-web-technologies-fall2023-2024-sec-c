<?php

session_start();

if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success') {
    $cookie_name = $_COOKIE['name'];
} else {
    header('location: login.php');
}

if (isset($_REQUEST['submit'])) {
    $error_message = '';
    $current_password = $_REQUEST['cur_pass'];
    $new_password = $_REQUEST['new_pass'];
    $retype_password = $_REQUEST['con_pass'];

    
    if ($current_password !== $_COOKIE['password']) {
        $error_message .= "Wrong Current Password!<br>";
    }

    if ($new_password == '') {
        $error_message .= "You must fill in New Password!<br>";
    }

    if ($retype_password == '') {
        $error_message .= "You must fill in Retype Password!<br>";
    }

    if ($new_password !== $retype_password) {
        $error_message .= "New Password and Retype Password do not match!<br>";
    }

    if (empty($error_message)) {
     
        setcookie('password', $new_password, time() + (86400 * 30), "/");

        header("location: logout.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="3">
                    <h2>XCompany</h2>
                    <p align="right">
                        Login as <a href="viewprofile.php"><?php echo $cookie_name; ?></a>
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
                <td colspan="1">
                    <fieldset>
                        <legend><h3>Change Password</h3></legend>
                        <form action="changepass.php" method="post">
                            <table>
                                <tr>
                                    <td>Current Password</td>
                                    <td>: <input type="password" name="cur_pass" value=""></td>
                                </tr>
                                <tr>
                                    <td><font color="green">New Password</font></td>
                                    <td>: <input type="password" name="new_pass" value=""></td>
                                </tr>
                                <tr>
                                    <td><font color="red">Confirm Password</font></td>
                                    <td>: <input type="password" name="con_pass" value=""></td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="400px">
                                        <br><input type="submit" name="submit" value="Save Changes">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                    <?php if (!empty($error_message)) { ?>
                        <p><?php echo $error_message; ?></p>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td align="center" width="600px" colspan="3">Copyright 2017</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
