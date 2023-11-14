<?php 
session_start();
require('../controls/sessionCheck_dash.php');
require_once('../model/contactinfoModel.php');
require('components/header.php');

$logInfo = $_SESSION['logInfo'];
$headname = 'Contact Information Update';
$id = 1;
$view=contactinfoView($id);
$email= $view['email'];
$phoneNumber= $view['phone_number'];
$link = $view['link'];
?>
<html lang="en">
<head>
    <title>Edit contuct Info</title>
</head>
<center>
    <table border="1" width="100%">
        <tr>
            <td><?php echo Head($logInfo['username'],$headname); ?></td>
        </tr>
    </table>
    <fieldset>
    <legend>Update Contuct Information</legend>
    <body>
    <form action="../controls/contactinfoUpdate.php" method="post">
        <table>
            <tr>
                <td><label for="">Email:</label></td>
                <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
                <td>Displaying:<?php echo $email; ?></td>
            </tr>
            <tr>
                <td><label for="">Phone Number:</label></td>
                <td><input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>"></td>
                <td>Displaying:<?php echo $phoneNumber; ?></td>
            </tr>
            <tr>
                <td><label for="">links:</label></td>
                <td><input type="url" name="link" id="" value = "<?php echo $link ?>" ></td>
                <td>Displaying:<a href="<?php echo $link ?>"><?php echo $link ?></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
        </form>
    </body>
    </fieldset>
</center>

</html>