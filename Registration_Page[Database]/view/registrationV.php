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
                    <form action="../controller/registrationCheck.php" method="post">
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
        </tbody>
    </table>
</body>
</html>
