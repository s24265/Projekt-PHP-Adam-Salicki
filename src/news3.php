<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS - Sklepy w PL</title>
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
        <h2>W tych sklepach Polacy robią zakupy. Raport analityków</h2>
        <p3>Data utworzenia: 12 czerwca 2022, 10:00.</p3><br>
        <br><p2>
            Polacy coraz częściej robią zakupy, jednocześnie są wobec nich coraz mniej lojalni.
            W czasach kryzysu wyszukują bowiem promocji. 91 proc. Polaków było w pierwszych osiemnastu tygodniach tego przynajmniej raz w sklepie sieci Biedronka – wynika z raportu firmy technologicznej Proxi.cloud.
            Sklep Lidla odwiedziło w tym czasie ok. 60 proc. Polaków, Netto – 32 proc., a Aldi – 17 proc.
            Autorzy raportu wskazali, że klienci częściej niż rok wcześniej robią zakupy w dyskontach. W zeszłym roku w tym samym okresie Biedronkę odwiedziło na przykład 89 proc.
            – 28 proc. klientów dyskontowych odwiedza takie sklepy co najmniej raz w tygodniu. To oznacza wzrost o 7 punkty procentowe w porównaniu z analogicznym okresem zeszłego roku – podkreśla Mateusz Chołuj z Proxi.cloud. Z analizy wynika jednak, że klienci są coraz mniej lojalni wobec sklepów.
        </p2><br>
        <br><p3>Grafiki:</p3>
        <br><img src="be1.png" alt="News 3 img" width="725" height="450"><br>
        <br><img src="be2.png" alt="News 3 img" width="725" height="450"><br>
        <br><img src="be3.png" alt="News 3 img" width="725" height="450"><br>
        <?php
        $oNews = array(array('url' => 'news2.php', 'name'=>'Losowy news'), array('url' => 'news1.php', 'name' => 'Losowy news'));
        $rNews = array_rand($oNews);
        $nNews = $oNews[$rNews];
        printf('<p3><a href="%s" title="%s">%s</a></p3>', $nNews['url'], $nNews['name'], $nNews['name']);
        echo '<br><p3><a href="main.php">Powrót na główną stronę</a></p3>'
        ?>
    </article>
</div>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
</html>