<?php
session_start();
if (isset($_POST['submit'])) {
    $error_message = '';
    $login_success = false;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {
        $error_message .= "You must fill in the User Name! <br>";
    }
    if ($password == '') {
        $error_message .= "You must fill in the Password! <br>";
    }

    $cookie_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $cookie_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

    if ($username == $cookie_username && $password == $cookie_password) {
        $login_success = true;
    }

    if ($login_success) {
        $_SESSION["user_login"] = "login_success";
        header('location: dashboard.php');
        exit();
    } else {
        $error_message = "Invalid login details! Try Again!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr>
                <td>
                    <h2>XCompany</h2>
                    <p align="right">
                        <a href="home.php">Home</a>
                        <span>|</span>
                        <a href="Login.php">Login</a>
                        <span>|</span>
                        <a href="reg.php">Registration</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td height="200px">
                    <form action="" method="post">
                        <fieldset>
                            <legend><h3>Login</h3></legend>
                            <table align="center">
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text" name="username" value=""></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" value=""></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Submit"><br>
                                        <input type="checkbox" name="remember_me" value=""> Remember Me<br><br>
                                        <a href="forgotpass.php">Forgot Password</a>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center" width="500px">Copyright 2017</td>
            </tr>
        </tbody>
                    <?php if (!empty($error_message)) { ?>
                        <p><?php echo $error_message; ?></p>
                    <?php } ?>
    </table>
</body>
</html>
