<?php
    if(isset($_REQUEST["bloodgroup"]))
    {
        $bloodgroup =$_REQUEST["bloodgroup"];
        echo $bloodgroup ;
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
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>