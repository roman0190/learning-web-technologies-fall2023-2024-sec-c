<?php
if(isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
}
?>

<html>
<head>
    <title>Name</title>
</head>
<body>

<form action="#" method="post"> 
    <fieldset style="width: 200px;">
        <legend>Name</legend>
        <input type="text" id="name" name="name" value="<?php if(isset($name)){echo $name;}?>"/>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
