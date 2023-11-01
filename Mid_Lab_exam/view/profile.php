<?php
session_start(); 
require('../controller/sessionprofile.php'); 
?>

<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2" align="CENTER">Profile</td>
        </tr>
        <tr>
            <td>ID</td>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><?php echo $name; ?></td>
        </tr>  
        <tr>
            <td>USER TYPE</td>
            <td><?php echo $userType; ?></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <a href="../controller/sessionHome.php">Go Home</a>
            </td>
        </tr>
    </table>         
</center>
