<?php
if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    //echo $email ;
}
?>

<html>
<head>
    <title>Email</title>
</head>
<body>

<form method="post" action="#">
    <fieldset style="width: 200px;">
        <legend>Email</legend>
        <input type="text" id="email" name="email" value="<?php if(isset($email)){echo $email;} ?>">
        <input type="button" value="i" title="hint: example@gmail.com">
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>