<?php
session_start();
$user_type = $_SESSION['user_type'];

    if($user_type === 'Admin'){

        header('location: ../view/dashboardAdmin.php');

    } else if($user_type === 'Applicant'){

        header('location: ../view/dashboardApplicant.php');

    } else if($user_type === 'Recruiter'){

        header('location: ../view/dashboardRecruiter.php');

    } else{

        header('location: ../view/signin.php');
        
    }

?>