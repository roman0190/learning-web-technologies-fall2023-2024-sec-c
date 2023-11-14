<?php
    session_start();
    require('../controls/sessionCheck_dash.php');
    $logInfo = $_SESSION['logInfo'];
    require('components/dashboardDesign.php');
    $values = ['<a href="../view/.php">Post Job</a>',
                '<a href="../view/.php">See Own Jobs</a>',
                '<a href="../view/.php">See all Applicants</a>',
                '<a href="../view/.php">View Profile</a>',
                '<a href="../view/.php">Edit Profile</a>',
                '<a href="../view/.php">Change Profile Photo</a>',
                '<a href="../view/.php">Change Password</a>',
                '<a href="../view/.php">Notification</a>',
                '<a href="contactinfoView.php">Contact Information</a>',
                '<a href="policyView.php">View Privacy Policy</a>',
                '<a href="../view/.php">Rules and regulation</a>',
                '<a href="../view/.php">FQA</a>',
                '<a href="../view/.php">Terms of Services </a>',
                '<a href="chatPage.php">Chat</a>',
            ];
?>

<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
        <table border=1 height="100%" width="100%">
            <tr><td><?php echo dashboardHead($logInfo['username']);?></td></tr>
            <tr><td><?php echo createTable($values);?></td></tr>
        </table>
    <?php include_once("components/footer.php") ?>
</body>
</html>
