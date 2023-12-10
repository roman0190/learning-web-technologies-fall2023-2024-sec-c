<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <div id="container">
            Username: <input type="text" id="username"> <br>
            Password: <input type="password" id="password"> <br>
            <input type="button" value="Login" onclick="login()">
        </div>
        <div id="error" style="color:red"></div>
    </fieldset>

    <script>
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (!username || !password) {
                document.getElementById('error').innerHTML = 'Please enter both username and password.';
                return;
            }else {
                    let userData = {
                    username: username,
                    password: password
                };
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/loginCheck.php', true);
                xhttp.setRequestHeader('Content-type', 'application/json');
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('error').innerHTML=this.responseText;
                    }
                };
                xhttp.send(JSON.stringify(userData));

            }
        }
    </script>
</body>
</html>
