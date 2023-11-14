<?php
session_start();
require('../controls/sessionCheck_dash.php');
$logInfo = $_SESSION['logInfo'];
require('components/dashboardDesign.php');
$values = [
    '<a href=".php">Reported job posts</a>',
    '<a href="../view/.php">Reported applicants</a>',
    '<a href="../view/.php">Post Event</a>',
    '<a href=" policyEdit.php">Edit privacy policy</a>',
    '<a href="notifications.php">View Notification</a>',
    '<a href=" contactinfoAdmin.php">Update Contact Information</a>',
    '<a href="../view/.php">Edit Rules and regulation</a>',
    '<a href="../view/.php">Edit FQA</a>',
    '<a href="../view/.php">Edit Terms of Services </a>',
    '<a href=" chatPage.php">Chat</a>',
];

?>
<html lang="en">

<head>
    <title>Dashboard</title>
</head>
<body>
    <table border=1 height="100%" width="100%">
        <tr>
            <td><?php echo dashboardHead($logInfo['username']); ?></td>
        </tr>
        <tr>
            <td><?php echo createTable($values); ?></td>
        </tr>
    </table>
    <?php include_once("components/footer.php") ?>
</body>

</html>