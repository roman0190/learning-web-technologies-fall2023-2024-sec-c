<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
</head>
<body>
    <fieldset>
        <legend>Registration</legend>
        <center>
            <div id="container">
                Name: <input type="text" id="name"> <br>
                Username: <input type="text" id="username"> <br>
                Email: <input type="email" id="email"> <br>
                Gender: 
                    <input type="radio" id="male" value="male" name="gender">Male
                    <input type="radio" id="female" value="female" name="gender">Female<br>
                Password: <input type="password" id="password"> <br>
                Confirm Password: <input type="password" id="con_password"> <br>
                <input type="button" value="Submit" onclick="getValue()">
            </div>
            <div id="error" style="color:red"></div>
        </center>
    </fieldset>

    <script>
        function getValue() { 
            let name = document.getElementById('name').value;
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let gender = document.querySelector('input[name="gender"]:checked');
            let password = document.getElementById('password').value;
            let conPassword = document.getElementById('con_password').value;

            let errorString = '';

            if (!name || !username || !email || !gender || !password || !conPassword) {
                errorString += 'Please fill in all fields.<br>';
            }

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errorString += 'Please enter a valid email address.<br>';
            }

            let usernameRegex = /^[a-zA-Z0-9_]+$/;
            if (!usernameRegex.test(username)) {
                errorString += 'Username can only contain letters, numbers, and underscores.<br>';
            }

            let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d).{8,}$/;
            if (!passwordRegex.test(password)) {
                errorString += 'Password must be at least 8 characters long and include both letters and numbers.<br>';
            }

            if (password !== conPassword) {
                errorString += 'Passwords do not match.<br>';
            }

            document.getElementById('error').innerHTML = errorString;

            if (errorString) {
                return;
            } else {
               
                let formData = {
                    name: name,
                    username: username,
                    email: email,
                    gender: gender ? gender.value : '', 
                    password: password
                    
                };

                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/registrationCheck.php', true);
                xhttp.setRequestHeader('Content-type', 'application/json');
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById('error').innerHTML=this.responseText;
                    }
                };
                xhttp.send(JSON.stringify(formData));
            }
        }
    </script>
</body>
</html>
