<?php
require_once('../model/policyModel.php');

if(isset($_REQUEST['save'])){

    $policy =$_REQUEST['policy'];
    

    policyEdit($policy);

    if(!  policyEdit($policy)){
         echo $editpolicy;
    } else{
        header('location: ../view/policyEdit.php');
    }

}

?>