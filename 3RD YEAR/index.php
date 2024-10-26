<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Form</h1>
    <div class="form">
    <form action="process.php" method="POST">
        
    <label>Email</label><br>
    <input type="email" name="email" placeholder="Enter your email..." required><br><br>

    <label>Password</label><br>
    <input type="password" name="pass" placeholder="Enter your password..." required><br><br>

    <input type= "submit" name="login" Value="Login">
</div>
</form>

<p><a href="reg.php"> Click here to register! </a></p>


</body>
</html>