<?php

$con = mysqli_connect('localhost', 'root', 'root', 'giganewsDB');

if(mysqli_connect_errno()) {
    die("Failed to connect". mysqli_connect_error());
}
$username = $_POST['user'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    header("Location: adminPage.php");
}
else{
    echo "Logowanie nie powiodło się.";
}