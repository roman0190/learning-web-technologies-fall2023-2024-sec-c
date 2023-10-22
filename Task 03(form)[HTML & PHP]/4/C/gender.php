<?php
  if(isset($_REQUEST["gender"])) {
    $gender = $_REQUEST["gender"];
  }
?>

<html>
<head>
    <title>Gender</title>
</head>
<body>

<form action="#" method="post">
   <fieldset style="width: 200px;">
        <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender == "Male"){echo "checked";} ?>> Male
            <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female"){echo "checked";} ?>> Female
            <input type="radio" name="gender" value="Other" <?php if(isset($gender) && $gender == "Other"){echo "checked";} ?>> Other
            <br><br>
            <input type="submit" value="Submit">
   </fieldset>
</form>

</body>
</html>
