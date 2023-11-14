<?php
    function dashboardHead($username)
    {
        $table = '
        <table>
            <tr>
                <td><img src="../assets/images/logo.png" height="80" width="80"></td>
                <td width="50%" align="right"><h1>Dashboard</h1></td>
                <td width="100%" align="right">
                   <b> Login as <u>' . $username . '</u>||<a href="../controls/logoutCheck.php">Logout</a></b>
                </td>
            </tr>
        </table>';

        return $table;
    }

    function Head($username,$headname)
    {
        $table = '
        <table>
            <tr>
                <td><img src="../assets/images/logo.png" height="80" width="80"></td>
                <td width="60%" align="right"><h1>'. $headname .'</h1></td>
                <td width="100%" align="right">
                   <b> Login as ' . $username . '||<a href="../controls/logoutCheck.php">Logout</a></b>
                </td>
            </tr>
        </table>';

        return $table;
    }
    function createTable($cellValues) {
        $table = '<table border="1" width="100%" height="100%">';

        $table .= '<tr>';
        $table .= '<td valign="top">';
        foreach ($cellValues as $value) {
            $table .= "<p><b>$value<b><p><br>";
        }
        $table .= '</td>';
        
        $table .= '<td align="center"><h1>WELCOME TO OUR WEBSITE</h1></td>';
        
        $table .= '</tr>';
    
        $table .= '</table>';
        return $table;
    }
    

?>
