<?php
  if(isset($_REQUEST["gender"]))
  {
    $gender=$_REQUEST["gender"];
    echo $gender;
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
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <br><br>
            <input type="submit" value="Submit">
   </fieldset>
</form>

</body>
</html>
