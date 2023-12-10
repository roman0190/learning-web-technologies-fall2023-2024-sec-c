<?php
    if(isset($_POST['userInfo'])){
        $data = $_POST['userInfo'];
        $userInfo = json_decode($data);

        echo $userInfo->name;
        // echo json_encode($userInfo);
    }
?>
