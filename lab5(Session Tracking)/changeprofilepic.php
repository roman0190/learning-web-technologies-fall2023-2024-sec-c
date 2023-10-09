<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>
    <table border="1">
        <tbody>
            <tr >
                <td colspan="3">
                    <h2>XCompany</h2>
                    <p align="right">
                        Login as <a href="viewprofile.php">Bob</a>
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
                    <Legend><h3>Profile Picture</h3></Legend>
                    <table>
                        <tr>
                            <td ><img src="profilepic.png"></td>
                            
                        </tr>
                
                        <tr>
                            <td><input type="file" id="picture" name="picture"></td>
                        </tr>
                        <tr>
                            <td width="400px">
                                <br><input type="submit" value="Save Changes">
                            </td>
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
