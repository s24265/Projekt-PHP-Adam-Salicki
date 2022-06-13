<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS - Benzyna w USA</title>
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
        font-family: Helvetica, serif;
        font-size: 45px;
    }
    h2 {
        color: black;
        font-family: Helvetica, serif;
        font-size: 30px;
    }
    p2 {
        color: #000000;
        font-family: Helvetica, serif;
        font-size: 25px;
    }
    p3 {
        color: #000000;
        font-family: Helvetica, serif;
        font-size: 15px;
    }
    .boxStyle2 {
        background-color: #ffffff;
        border: 1px outset #1a1919;
        padding: 10px;
        margin: auto;
        text-align: left;
    }
    body {
        background-color: #f1f1f1;
</style>
<div class="headerStyle"
<header>
    <h1>GIGA NEWS</h1>
</header>
</div>
<div class="boxStyle2">
    <article>
        <h2>Najdroższa benzyna w historii USA. Niższe ceny mało prawdopodobne</h2>
        <p3>Data utworzenia: 11 czerwca 2022, 16:20.</p3><br>
        <br><p2>Średnia cena galona benzyny w USA po raz pierwszy w historii przekroczyła poziom 5 dol. – podało w sobotę American Automobile Association (AAA).
            Ceny rosną niemal nieprzerwanie od ponad miesiąca. Jak podaje CNN, sobota jest 15. kolejnym dniem, w którym średnia cena galona (3,78 l) paliwa pobiła dotychczasowe rekordy.
            Według Biura Statystyk Pracy (BLS), indeks cen benzyny wzrósł w ciągu ostatnich 12 miesięcy o niemal 50 proc., stanowiąc jeden z głównych czynników wpływających na najwyższą od ponad 40 lat inflację.
        </p2><br>
        <br><p3>Grafiki:</p3>
        <br><img src="us1.png" alt="News 2 img" width="725" height="450"><br>
        <br><img src="us2.png" alt="News 2 img" width="725" height="450"><br>
        <br><img src="us3.png" alt="News 2 img" width="725" height="450"><br>
        <?php
        $oNews = array(array('url' => 'news1.php', 'name'=>'Losowy news'), array('url' => 'news3.php', 'name' => 'Losowy news'));
        $rNews = array_rand($oNews);
        $nNews = $oNews[$rNews];
        printf('<p3><a href="%s" title="%s">%s</a></p3>', $nNews['url'], $nNews['name'], $nNews['name']);
        echo '<br><p3><a href="main.php">Powrót na główną stronę</a></p3>'
        ?>
    </article>
</div>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
</html>