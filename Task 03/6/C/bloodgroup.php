<?php
$bloodgroup = "";

if(isset($_POST["bloodgroup"])) {
    $bloodgroup = $_POST["bloodgroup"];
}
?>

<html>
<head>
    <title>Blood Group Selection</title>
</head>
<body>

<form action="#" method="post">
    <fieldset style="width: 200px;">
        Blood Group
        <select name="bloodgroup">
            <option value="A+" <?php if($bloodgroup == "A+") echo "selected"; ?>>A+</option>
            <option value="A-" <?php if($bloodgroup == "A-") echo "selected"; ?>>A-</option>
            <option value="B+" <?php if($bloodgroup == "B+") echo "selected"; ?>>B+</option>
            <option value="B-" <?php if($bloodgroup == "B-") echo "selected"; ?>>B-</option>
            <option value="O+" <?php if($bloodgroup == "O+") echo "selected"; ?>>O+</option>
            <option value="O-" <?php if($bloodgroup == "O-") echo "selected"; ?>>O-</option>
            <option value="AB+" <?php if($bloodgroup == "AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if($bloodgroup == "AB-") echo "selected"; ?>>AB-</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
