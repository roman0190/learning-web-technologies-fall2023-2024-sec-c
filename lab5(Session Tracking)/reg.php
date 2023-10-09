<?php
if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }else{
        $gender = '';
    }

    $dob = $_REQUEST['dob'];

    if($name == ''){
        $error_message .= "You must fill in your Name! <br>";
    }
    if($email == ''){
        $error_message .= "You must fill in your Email! <br>";
    }
    if($username == ''){
        $error_message .= "You must fill in your User Name! <br>";
    }
    if($password == ''){
        $error_message .= "You must fill in your Password! <br>";
    }

    if($confirm_password == '' || $confirm_password !== $password){
        $error_message .= "Your password doesn't match! <br>";
    }
    if($gender == ''){
        $error_message .= "You must fill in your Gender! <br>";
    }
    if ($dob == '') {
        $error_message .= "You must fill in your Date of Birth! <br>";
    }

    if (empty($error_message)) {
        // All fields are filled correctly, you can now process the data or set cookies
        // For example:
        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
        setcookie('confirm_password', $confirm_password, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('dob', $dob, time() + (86400 * 30), "/");

        // Redirect to login.php or another page as needed
        header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>XCompany Registration</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="2">
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
                <td height="400px" width="600px">
                    <form action="#" method="post">
                        <fieldset>
                            <legend><h3>Registration</h3></legend>
                            <table align="center">
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value=""></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" name="email" value="">
                                        <input type="button" value="i" title="hint: example@gmail.com">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text" name="username" value=""></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" value=""></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td><input type="password" name="confirm_password" value=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" value="Male"> Male
                                            <input type="radio" name="gender" value="Female"> Female
                                            <input type="radio" name="gender" value="Other"> Other
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value="">
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right">
                                        <input type="submit" name="submit" value="Submit">
                                        <input type="reset" value="Reset">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <br>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center" width="600px" colspan="2">Copyright 2017</td>
            </tr>
            <p><?php if(isset($error_message)){echo $error_message;} ?></p>
        </tbody>
    </table>
</body>
</html>
