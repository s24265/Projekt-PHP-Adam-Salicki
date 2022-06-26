<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS</title>
    <link rel="icon" type="image/png" href="icon/gigaNewsyIcon.png">
    <link rel="stylesheet" href="cssFiles/style1.css">
</head>
<body>
<div class="boxStyle"><p2>Edycja newsów</p2>
    <?php
    if(isset($_SESSION['status'])) {
        echo '<p3>- '.$_SESSION['status'].'</p3>';
        unset($_SESSION['status']);
    }
    ?>
    <form action="adminPageUpdate.php" method="POST">
        <p3><label for="">ID newsa:</label></p3>
        <label>
            <p2><input type="text" name="zawartoscID" class="form-control" placeholder="id"></p2><br>
        </label>
        <p3><label for="">Tytuł newsa:</label></p3>
        <label>
            <p2><input type="text" name="tytul" class="form-control" placeholder="tytul"></p2><br>
        </label>
        <p3><label for="">Data newsa:</label></p3>
        <label>
            <p2><input type="text" name="data" class="form-control" placeholder="RRRR-MM-DD"></p2><br>
        </label>
        <p3><label for="">Treść newsa:</label></p3>
        <label>
            <p2><input type="text" name="zawartosc" class="form-control" placeholder="zawartosc"></p2><br>
        </label>
        <p2><button type="submit" name="newsUpdate" class="btn btn-primary">Aktualizuj</button></p2>
    </form>
    <br><p3><a href="main.php">Powrót na główną stronę</a></p3>
</div>
</body>
</html>
