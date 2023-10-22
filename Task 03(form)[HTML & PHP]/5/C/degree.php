<?php
$selectedDegrees = [];

if(isset($_POST["degree"])) {
    $selectedDegrees = $_POST["degree"];
}
?>

<html>
<head>
    <title>Degree</title>
</head>
<body>

<form action="#" method="post">
    <fieldset style="width: 200px;">
        <legend>Degree</legend>
        <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $selectedDegrees)) echo "checked"; ?>> SSC
        <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC", $selectedDegrees)) echo "checked"; ?>> HSC
        <input type="checkbox" name="degree[]" value="Bsc" <?php if(in_array("Bsc", $selectedDegrees)) echo "checked"; ?>> BSc <br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
