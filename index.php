<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Register</title>
    <style>
body {
    display: flex; 
    justify-content: center;
}

form {
    display: flex;
    flex-direction: column;
    width: 300px;
}

form > input {
    margin_bottom: 20px;
}

        </style>
</head>
<body>
    <form action="register.php" method="POST">

        <label for="email">Email</label>
        <input type="email" name="email" id ="email" required>

        <label for="username">Username</label>
        <input type="text" name="username" id ="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id ="password" required>

        <input type="submit" value="Inoltra" id="submit">
        <p>hai già un account?<a href="login.html">Accedi</a></p>
    </form>
</body>
</html>