<?php
if(isset($_REQUEST["degree"])) {
    $selectedDegrees = $_REQUEST["degree"];
    foreach ($selectedDegrees as $degree) {
        echo $degree . "<br>";
    }
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
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="Bsc"> BSc <br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>