<?php
session_start();

if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success') {
    $cookie_name = $_COOKIE['name'];
    $cookie_email = $_COOKIE['email'];
    $cookie_gender = $_COOKIE['gender'];
    $cookie_dob = $_COOKIE['dob'];
} else {
    header('location: login.php');
    exit();
}

if (isset($_POST['submit'])) {
    $error_message = '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if ($name == '') {
        $error_message .= "You must fill in your Name! <br>";
    }
    if ($email == '') {
        $error_message .= "You must fill in your Email! <br>";
    }
    if ($gender == '') {
        $error_message .= "You must fill in your Gender! <br>";
    }
    if ($dob == '') {
        $error_message .= "You must fill in your Date of Birth! <br>";
    }

    if (empty($error_message)) {
        // Update the cookie values
        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('dob', $dob, time() + (86400 * 30), "/");
        // Redirect to the edit profile page or another page as needed
        header("location: editprofile.php");
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
                        Login as <?php echo $cookie_name; ?>
                        <span>|</span>
                        <a href="logout.php">Logout</a>
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
                        <legend><h3>Edit Profile</h3></legend>
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="<?php echo $cookie_name; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" id="email" name="email" value="<?php echo $cookie_email; ?>">
                                        <input type="button" value="i" title="hint: example@gmail.com">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <input type="radio" name="gender" value="Male" <?php echo ($cookie_gender === "Male") ? "checked" : ""; ?>> Male
                                        <input type="radio" name="gender" value="Female" <?php echo ($cookie_gender === "Female") ? "checked" : ""; ?>> Female
                                        <input type="radio" name="gender" value="Other" <?php echo ($cookie_gender === "Other") ? "checked" : ""; ?>> Other
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td><input type="date" name="dob" value="<?php echo $cookie_dob; ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Save Changes">
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
