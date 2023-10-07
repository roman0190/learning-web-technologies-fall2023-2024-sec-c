<?php
    if(isset($_REQUEST["dob"]))
    {
        $dob = $_REQUEST["dob"];
       // echo $dob;
    }
 
?>
<?php
if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    //echo $email ;
}
?>

<html>
<head>
    <title>Date of Birth</title>
</head>
<body>

<form action="#" method="post">
    <fieldset style="width: 200px;">
        <legend>Date of Birth:</legend>
        <input type="date" name="dob" value="<?php if(isset($dob)){echo $dob;}?>">
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>