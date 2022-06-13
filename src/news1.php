<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS - McDonalds's</title>
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
    }
</style>
<div class="headerStyle"
<header>
    <h1>GIGA NEWS</h1>
</header>
</div>
<div class="boxStyle2">
    <article>
        <h2>Rosjanie otworzyli swój McDonald's. Wygląda bardzo podobnie</h2>
        <p3>Data utworzenia: 12 czerwca 2022, 14:14.</p3><br>
        <br><p2>W Moskwie i obwodzie moskiewskim rozpoczęły w niedzielę działalność lokale krajowej sieci fastfoodów utworzone na bazie sieci restauracji McDonald's.
            Po rosyjskiej inwazji na Ukrainę McDonald's w maju opuścił Rosję, gdzie działał przez ponad 30 lat.
            Bary szybkiej obsługi nazywają się "Smacznie - i kropka" (ros. "Wkusno - i toczka").
            W menu są frytki, burgery i napoje gazowane.
            Opakowania są bardzo podobne do poprzednich, tyle że bez charakterystycznych kolorów i loga McDonald's. Asortyment może się zmienić z powodu wycofywania się zagranicznych dostawców z rynku rosyjskiego.
            Na razie firma korzysta z zapasów coca-coli, ale będzie szukać zamiennika.
            "Wzdłuż kolejki stoją pracownicy i rozdają baloniki.
            Wokół - samochody policyjne, a otwarcie ochraniają funkcjonariusze dwóch specjalnych pułków policji, które wcześniej rozpędzały demonstracje" - relacjonuje niezależna "Nowaja Gazieta", której redakcja działa teraz poza Rosją.
        </p2><br>
        <br><p3>Grafiki:</p3>
        <br><img src="mc1.png" alt="News 1 img" width="725" height="450"><br>
        <br><img src="mc2.png" alt="News 1 img" width="725" height="450"><br>
        <br><img src="mc3.png" alt="News 1 img" width="725" height="450"><br>
        <?php
        $oNews = array(array('url' => 'news2.php', 'name'=>'Losowy news'), array('url' => 'news3.php', 'name' => 'Losowy news'));
        $rNews = array_rand($oNews);
        $nNews = $oNews[$rNews];
        printf('<p3><a href="%s" title="%s">%s</a></p3>', $nNews['url'], $nNews['name'], $nNews['name']);
        echo '<br><p3><a href="main.php">Powrót na główną stronę</a></p3>'
        ?>
    </article>
</div>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
</html>