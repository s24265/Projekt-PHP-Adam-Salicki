<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS</title>
    <link rel="icon" type="image/png" href="gigaNewsyIcon.png">
</head>
<style>
    .headerStyle {
        border: 1px outset #000000;
        background-color: #1a1919;
        text-align: center;
    }
    h1 {
        color: white;
        font-family: Bahnschrift, serif;
        font-size: 45px;
    }
    p2 {
        color: #000000;
        font-family: Bahnschrift, serif;
        font-size: 25px;
    }
    .boxStyle {
        background-color: #ffffff;
        width: 55%;
        border: 10px outset #1a1919;
        padding: 10px;
        margin: auto;
        text-align: left;
    }
    body {
        background-color: #f1f1f1;
    }
    .hiddenText {
        display: none;
    }

    .hoverText:hover + .hiddenText {
        display: block;
    }
</style>
<div class="headerStyle"
<header>
    <h1>GIGA NEWS</h1>
</header>
</div>
<div class="boxStyle"
     <article>
         <img src="mc1.png" alt="News 1 img" width="550" height="350">
         <br><p2>Rosjanie otworzyli swój McDonald's. Wygląda bardzo podobnie <a href="news1.php">czytaj więcej</a></p2>
     </article>
</div>
<div class="boxStyle">
    <article>
        <img src="us1.png" alt="News 2 img" width="550" height="350">
        <br><p2>Najdroższa benzyna w historii USA. Niższe ceny mało prawdopodobne <a href="news2.php">czytaj więcej</a></p2>
    </article>
</div>
<div class="boxStyle">
    <article>
        <img src="be1.png" alt="News 3 img" width="550" height="350">
        <br><p2>W tych sklepach Polacy robią zakupy. Raport analityków <a href="news3.php">czytaj więcej</a></p2>
    </article>
</div>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
<?php
function adresIP() {
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
$ipUzytkownika = adresIP();
echo '<br><div class="hoverText"><p2>Twój adres IP: </p2></div>'.'<div class="hiddenText"><p2>'.$ipUzytkownika.'</p2></div><br>';
?>
</html>