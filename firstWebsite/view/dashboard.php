<?php 
session_start();
require('../controls/sessionCheck_dash.php');
echo "welcome";
?>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <a href="../controls/logoutCheck.php">Logout</a>
</body>
</html>