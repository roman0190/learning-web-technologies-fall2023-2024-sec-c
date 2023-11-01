<?php
 session_start();
 $user=$_SESSION['user_data'];
 $name=$user['name'];
?>

<center>
	<h1>Welcome <?php echo $name;?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>