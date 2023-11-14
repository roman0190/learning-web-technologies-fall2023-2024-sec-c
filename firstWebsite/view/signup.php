<?php
session_start();
require_once('../controls/signupCheck.php');
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
</head>
<center>
<body>
  <h2> Sign Up </h2>

  <form action="../controls/signupCheck.php" method="post">
    <fieldset>
      <legend>User Details</legend>
      <table>
        <tr>
             <td><label>Name:</label></td>
            <td><input type="text" name="name" value= "<?php echo $user['name']; ?>" ></td>
        </tr>
        <tr>
            <td><label>Username:</label></td>
            <td><input type="text" name="username" value="<?php echo $user['username']; ?>" ></td>
        </tr>
        <tr>
            <td><label>Email:</label></td>
            <td><input type="email" name="email" value="<?php echo $user['email']; ?>" ></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
            <input type="radio" name="gender" value="Male" <?php echo ($user['gender'] === 'Male') ? 'checked' : ''; ?>> Male
            <input type="radio" name="gender" value="Female" <?php echo ($user['gender'] === 'Female') ? 'checked' : ''; ?>> Female
            <input type="radio" name="gender" value="Other" <?php echo ($user['gender'] === 'Other') ? 'checked' : ''; ?>> Other
            </td>
        </tr>
        <tr>
            <td><label>Date of Birth:</label></td>
             <td><input type="date" name="dob" value="<?php echo $user['dob']; ?>" ></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="password" ></td>
        </tr>
        <tr>
            <td><label>Re-enter Password:</label></td>
            <td><input type="password" name="re_password" ></td>
        </tr>
        <tr>
            <td><label>User Type:</label></td>
            <td>
                <input type="radio" name="user_type" value="Applicant"<?php echo ($user['user_type']==="Applicant") ? 'checked' : ''; ?>>Applicant
                <input type="radio" name="user_type" value="Recruiter"<?php echo ($user['user_type']==="Recruiter") ? 'checked' : ''; ?>>Recruiter
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Signup"></td>
        </tr>
      </table>
    </fieldset>
  </form>

  <p>Already have an account? <a href="../view/signin.php">Sign in</a></p>
</body>
</center>
</html>
