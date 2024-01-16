<?php
require('database.php');



$sql = "SELECT * FROM users";
$query = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Crud</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="post">
            <h1>Crear usuario</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="lastname" placeholder="Lastname">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="Email">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>    
    <div class="user-table">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>lastname</th>
                    <th>username</th>
                    <th>password</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['name'] ?></th>
                    <th><?= $row['lastname'] ?></th>
                    <th><?= $row['username'] ?></th>
                    <th><?= $row['password'] ?></th>
                    <th><?= $row['email'] ?></th>
                
                    <th><a href="update.php?id=<?= $row['id'] ?>" class="user-table--edit">Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="user-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>