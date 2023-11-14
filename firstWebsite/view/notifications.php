
    <?php
    session_start();
    require_once('../model/db.php');
    require('../controls/sessionCheck_dash.php');
    require('components/header.php');
    $logInfo = $_SESSION['logInfo'];
    $headname = "Notifications";
    $con = getConnection();


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // notification deletion
    if (isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];
        $sqlDelete = "DELETE FROM notifications WHERE id = $deleteId";
        if ($con->query($sqlDelete) === true) {
            echo "Notification deleted successfully.";
        } else {
            echo "Error deleting notification: " . $con->error;
        }
    }

    // Fetch notifications from the database
    $sql = "SELECT id, text, time FROM notifications";
    $result = $con->query($sql);
    echo '<body>';
    echo '<table border="1" width="100%">';
    echo '<tr>';
    echo '<td>' . Head($logInfo['username'], $headname) . '</td>';
    echo '</tr>';
    echo '</table>';

    if ($result->num_rows > 0) {
        echo '<table border="1" width="100%">';
        echo '<tr>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['text'] . '</td>';
            echo '<td>' . $row['time'] . '</td>';
            echo '<td><a href="?delete_id=' . $row['id'] . '">Delete</a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "No notifications found.";
    }
    echo '</body>';
    $con->close();
    ?>

