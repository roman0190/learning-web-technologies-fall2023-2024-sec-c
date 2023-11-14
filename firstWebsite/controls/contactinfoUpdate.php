<?php 
session_start();
require_once('../model/contactinfoModel.php');
 
if(isset($_REQUEST['submit'])){
 
    $email=$_REQUEST['email'];
    $phoneNumber=$_REQUEST['phoneNumber'];
    $link = $_REQUEST['link'];
    $id = 1;
   

    $Update=contactInfoUpdate($id, $email, $phoneNumber, $link);

    if(!$Update)
    {
        echo "Information Not Updated!!";
    } else
    {
        header("location:../view/contactinfoAdmin.php");
    }

}
?>