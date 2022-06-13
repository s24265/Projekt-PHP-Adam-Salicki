<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS</title>
    <link rel="icon" type="image/png" href="gigaNewsyIcon.png">
    <link rel="stylesheet" href="style1.css">
</head>
<div class="headerStyle">
<header>
    <h1>GIGA NEWS</h1>
</header>
</div>
<div class="boxStyle">
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
echo '<div class="hoverText"><p2>Twój adres IP: </p2></div>'.'<div class="hiddenText"><p2>'.$ipUzytkownika.'</p2></div><br>';
?>
</html>