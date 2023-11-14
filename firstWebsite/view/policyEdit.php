<?php
session_start();
require('../controls/sessionCheck_dash.php');
require('components/header.php');
require_once('../model/policyModel.php');
$viewPolicy = policyView();
$logInfo = $_SESSION['logInfo'];
$headname="Edit Privacy & Policy";

?>
<style>
    .large-button {
        width: 150px; 
        height: 40px; 
        font-size: 16px;
        background-color: #4CAF50; 
        color: #fff;
        cursor: pointer; 
    }
</style>

<html lang="en">
<head>
    <title>Policy</title>
</head>
<body>
    <form action="../controls/policyUpdate.php" method="post">
        <table border="1" width="100%">
        <tr>
            <td><?php echo Head($logInfo['username'],$headname); ?></td>
        </tr>
        </table>
        <table>
            <tr>
                <td>Policy: </td>
            </tr>
            <tr>
                <td><textarea name="policy" id="" cols="210" rows="20" ><?php echo $viewPolicy['policy']; ?></textarea></td>
            </tr>
            <tr>
            <td><input type="submit" name="save" value="Save" class = "large-button"></td>
            </tr>
            <tr>
                <td><h3>Preview:</h3><br><?php echo $viewPolicy['policy']; ?></td>
            </tr>
        </table>
    </form> 
</body>
</html>