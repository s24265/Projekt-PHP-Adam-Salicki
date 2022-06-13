<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS - Sklepy w PL</title>
    <link rel="icon" type="image/png" href="gigaNewsyIcon.png">
    <link rel="stylesheet" href="style1.css">
</head>
<div class="headerStyle">
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