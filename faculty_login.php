<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Login</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body>
<div class="login-form">
    <h1>Faculty Login</h1><br>
    <h2>Login to your account</h2>
    <form action="php/faculty_checklogin.php" method="POST">
        <label>
            Email
            <input type="email" id="email" placeholder="email" name="email" required>
        </label>
        <br /><br />
        <label>
            Password
            <input type="password" id="password" placeholder="password" name="password" required>
        </label>
        <br/><br/>
        <div class="submit-form">
            <input type="submit" id="login" name="login" value="Login" />
        </div>
    </form>
</div>
</body>
</html>
