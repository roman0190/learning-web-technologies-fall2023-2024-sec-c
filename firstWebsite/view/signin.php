<html>
    <head>
    <title>Sign In</title>
    </head>
    <center>
        <body>
            <h2> Sign In</h2>
                <fieldset>
                    <legend>Sign In</legend>
                            <table>
                                <form action="../controls/signinCheck.php" method="post">
                                <tr>
                                    <td>Username:</td>
                                    <td><input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="checkbox" name="remember_me" value="remember"> Remember me</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" name="submit" value="Sign In"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    If you don't have any account,please..<a href="signup.php">Sign Up</a><br>
                                    <a href="forgotPassword.php">Forgot Password?</a>
                                    </td>
                                </tr>
                                </form>
                            </table>
                </fieldset>           
        </body>
    </center>
</html>
