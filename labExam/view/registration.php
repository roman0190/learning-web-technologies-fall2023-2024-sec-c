<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
</head>
<body>
    <div class="wrap">
        <fieldset>
            <legend>Registration</legend>
            <label for="emp_name">Employee name:</label>
            <input type="text" id="emp_name" name="emp_name"><br>
            <label for="contact_no">Contact no:</label>
            <input type="text" id="contact_no" name="contact_no"><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <label for="password">Confrom Password:</label>
            <input type="password" id="con_password" name="con_password"><br>
            <input type="button" value="Registration" onclick="validateForm()">
        </fieldset>
    </div>
    <div id= 'error' style="color:red" >
       
    </div>
    <script>
         function _(element) {
                return document.getElementById(element);
            }

        function validateForm() {
            let empName = _('emp_name').value;
            let contactNo = _('contact_no').value;
            let username = _('username').value;
            let password = _('password').value;
            let con_pass = _('con_password').value
            let error = "";

            if (empName === "") {
                error += "Enter name first. <br>";
            }
            if (contactNo === "") {
                error += "Enter Contact Number. <br>";
            }
            if (username === "") {
                error += "Enter Username. <br>";
            }
            if (password === "") {
                error += "Enter Password. <br>";
            }
            if (con_pass === "") {
                error += "Enter confrom-Password. <br>";
            }
            if(password !== con_pass){
                error += "Password not matching. <br>";
            }

            _('error').innerHTML = error;
        }

        function sendValue(){
            let empName = _('emp_name').value;
            let contactNo = _('contact_no').value;
            let username = _('username').value;
            let password = _('password').value;

            let emp_info = {

                'emp_name' :empName,
                'contact_no':contactNo,
                'username':username,
                'password':password
            }
            let data = JSON.stringify(emp_info);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'Registration.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('student='+data)
            xhttp.onreadystatechange = function(){

                if(this.readyState == 4 && this.status == 200){
                    let std = JSON.parse(this.responseText);
                    document.getElementById('error').innerHTML = std.username;
                }
            }
        }
</script>
</body>
</html>

