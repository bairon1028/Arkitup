<?php
require('database.php');

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql ="INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($connect, $sql);

if($query){
    header("location: crud.php");
}

?>

