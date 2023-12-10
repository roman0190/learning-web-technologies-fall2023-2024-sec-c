<html>
    <body>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name"><br>
            <label for="password">Password:</label>
            <input type="password" id='password'><br>
            <input type="button" value="submit" onclick="getValue()">
        </div>
        <div id="show" style="color:red;">

        </div>
        
    </body>

</html>

<script>
        function getValue() {
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;

            let userInfo = {
                'name': name,
                'password': password
            }

            let data = JSON.stringify(userInfo);

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'getvalue.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('userInfo=' + data); // Updated here

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                    document.getElementById('show').innerHTML = this.responseText;
                }
            }
        }
</script>
