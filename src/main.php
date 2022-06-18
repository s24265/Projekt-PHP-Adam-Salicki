<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS</title>
    <link rel="icon" type="image/png" href="icon/gigaNewsyIcon.png">
    <link rel="stylesheet" href="style1.css">
</head>
<div class="headerStyle">
<header>
    <h1>GIGA NEWS</h1>
    <div class="tAlign">
        <button type="button" name="Login" onclick="alert('not working')" style="alignment: right; width: 100px; height: 30px; color: black; background-color: white" value="Login">Login</button>
    </div>
</header>
</div>
<div class="boxStyle">
     <article>
         <img src="imgs/mc1.png" alt="News 1 img" width="550" height="350">
         <?php

         $user = 'root';
         $password = '';
         $db = 'giganewsDB';

         $db = new mysqli('localhost', $user, $password, $db) or die("not connected");

         $query = $db -> query("SELECT tytul FROM newsdb WHERE zawartoscID = 1");

         if (mysqli_num_rows($query) == 0) { echo "no data"; }
         while ($result = $query->fetch_array()) {
             echo '<br><p2>'.$result['tytul'].'<a href="news1.php">czytaj więcej</a></p2>';
         }
         ?>
     </article>
</div>
<div class="boxStyle">
    <article>
        <img src="imgs/us1.png" alt="News 2 img" width="550" height="350">
        <?php
        $query = $db -> query("SELECT tytul FROM newsdb WHERE zawartoscID = 2");

        if (mysqli_num_rows($query) == 0) { echo "no data"; }
        while ($result = $query->fetch_array()) {
            echo '<br><p2>'.$result['tytul'].'<a href="news2.php">czytaj więcej</a></p2>';
        }
        ?>
    </article>
</div>
<div class="boxStyle">
    <article>
        <img src="imgs/be1.png" alt="News 3 img" width="550" height="350">
        <?php
        $query = $db -> query("SELECT tytul FROM newsdb WHERE zawartoscID = 3");

        if (mysqli_num_rows($query) == 0) { echo "no data"; }
        while ($result = $query->fetch_array()) {
            echo '<br><p2>'.$result['tytul'].'<a href="news3.php">czytaj więcej</a></p2>';
        }
        ?>
    </article>
</div>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
<?php
function ipAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$ipUser = ipAddress();
echo '<div class="hoverText"><p2>Twój adres IP: </p2></div>'.'<div class="hiddenText"><p2>'.$ipUser.'</p2></div><br>';
?>
</html>