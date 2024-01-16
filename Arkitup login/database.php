<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'arkitup_login';

    $connect = mysqli_connect($server, $username, $password);

    mysqli_select_db($connect, $database);

    return $connect;

?>