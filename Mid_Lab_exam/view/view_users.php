<?php
    require_once("../model/userModel.php");
    $users = getAllUser();
?>

<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="4" align="CENTER">Users</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>USER TYPE</td>
        </tr>

        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['user_type']; ?></td>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="3" align="right">
                <a href="../controller/sessionHome.php">Go Home</a>
            </td>
        </tr>
    </table>
</center>
