<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script>
        function checkEmailAvailability() {
            let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../controller/check_email.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        let response = this.responseText;
                        if (response === 'available') {
                            document.getElementById('email-message').innerHTML = 'Email is available.';
                        } else {
                            document.getElementById('email-message').innerHTML = 'Email is not available.';
                        }
                    } else {
                        console.error('Request failed with status:', this.status);
                    }
                }
            };

     
            xhttp.send('email=' + email);
        }
    </script>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Phone: <input type="text" name="phone" required><br>
        Email: <input type="text" name="email" onblur="checkEmailAvailability()" id="email">
        Alart:<span id="email-message"></span><br>
        Password: <input type="password" name="password" required><br>
        Confirm Password: <input type="password" name="confirm_password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
