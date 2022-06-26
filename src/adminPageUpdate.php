<?php
session_start();
$con = mysqli_connect("localhost","root","","giganewsDB");

if(isset($_POST['newsUpdate']))
{
    $id = $_POST['zawartoscID'];

    $name = $_POST['tytul'];
    $class = $_POST['data'];
    $phone = $_POST['zawartosc'];

    $query = "UPDATE newsdb SET tytul='$name', data='$class', zawartosc='$phone' WHERE zawartoscID='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Updated";
    }
    else {
        $_SESSION['status'] = "Not Updated";
    }
    header("Location: adminPage.php");
}
