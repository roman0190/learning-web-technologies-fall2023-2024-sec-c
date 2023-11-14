<?php
function Head($username, $headname)
{
    $table = '
    <table style="background-color: #3498db; color: #fff;">
        <tr>
            <td><img src="../assets/images/logo.png" height="80" width="80"></td>
            <td width="55%" align="right"><h1>'. $headname .'</h1></td>
            <td width="100%" align="right">
                <b> Login as <u>' . $username . '</u> || <a href="../controls/logoutCheck.php">Logout</a></b>
            </td>
        </tr>
    </table>';

    return $table;
}
?>