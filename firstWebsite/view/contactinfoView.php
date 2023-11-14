<?php
session_start();
require('../controls/sessionCheck_dash.php');
require_once('../model/contactinfoModel.php');
require('components/header.php');

$logInfo = $_SESSION['logInfo'];
$headname = 'Contact Information';
$id = 1;
$view=contactinfoView($id);
$email= $view['email'];
$phoneNumber= $view['phone_number'];
$link = $view['link'];

?>


<html>
    <body>
        <center>
            <table border height="" width="100%">
                    <tr>
                        <td><?php echo Head($logInfo['username'],$headname); ?></td>
                    </tr>
            </table>
           <fieldset>
                <legend>Contact information</legend>
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><?php echo $phoneNumber; ?></td>
                    </tr>
                    <tr>
                        <td>link:</td>
                        <td><a href="<?php echo $link ?>"><?php echo $link ?></a></td>
                    </tr>
                </table>
           </fieldset>
        </center>
    </body>
</html>