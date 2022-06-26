<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root', 'giganewsDB');

if(isset($_POST['newsUpdate'])) {
    $id = $_POST['zawartoscID'];
    $tytul = $_POST['tytul'];
    $data = $_POST['data'];
    $zawartosc = $_POST['zawartosc'];

    $query = "UPDATE newsdb SET tytul='$tytul', data='$data', zawartosc='$zawartosc' WHERE zawartoscID='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Updated";
    }
    else {
        $_SESSION['status'] = "Not Updated";
    }
    header("Location: adminPage.php");
}
