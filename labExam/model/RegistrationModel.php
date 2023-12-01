
<?php
require_once('db.php');

function policyView() {
    $con = getConnection();

    $sqlFetch = "SELECT * FROM policy_table WHERE id = 1";
    $result = mysqli_query($con, $sqlFetch);

    if ($result && mysqli_num_rows($result) > 0) {
        $policy = mysqli_fetch_assoc($result);
        return $policy;
    } else {
        return "No Information Found";
    }
}


function policyEdit($policy) {
    $con = getConnection();

    $sql = "UPDATE policy_table SET policy = '$policy'  WHERE id = 1";

    if (mysqli_query($con, $sql)) {
        return true;

    } else {
        return "Failed to Update";
    }
}
?>
