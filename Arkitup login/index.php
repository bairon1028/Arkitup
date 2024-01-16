<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <?php require 'partials/header.php'?>
    
    <h1>Login</h1>
    <form action="index.php" method="post">
    <input type="text" name="email" placeholder="Enter your email">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Send">
    </form>
</body>
</html>