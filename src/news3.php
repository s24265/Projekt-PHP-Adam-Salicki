<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS - Sklepy w PL</title>
    <link rel="icon" type="image/png" href="icon/gigaNewsyIcon.png">
    <link rel="stylesheet" href="cssFiles/style1.css">
</head>
<div class="headerStyle">
<header>
    <h1>GIGA NEWS</h1>
</header>
</div>
<body>
<div class="boxStyle2">
    <article>
        <?php
        $db = new mysqli('localhost', 'root', 'root', 'giganewsDB') or die("not connected");
        $query = $db -> query("SELECT tytul FROM newsdb WHERE zawartoscID = 3");
        if (mysqli_num_rows($query) == 0) { echo "no data"; }
        while ($result = $query->fetch_array()) {
            echo '<h2>'.$result['tytul'].'</h2>';
        }
        $query = $db -> query("SELECT data FROM newsdb WHERE zawartoscID = 3");
        if (mysqli_num_rows($query) == 0) { echo "no data"; }
        while ($result = $query->fetch_array()) {
            echo '<p3>Data utworzenia: '.$result['data'].'</p3><br>';
        }
        $query = $db -> query("SELECT zawartosc FROM newsdb WHERE zawartoscID = 3");
        if (mysqli_num_rows($query) == 0) { echo "no data"; }
        while ($result = $query->fetch_array()) {
            echo '<br><p2>'.$result['zawartosc'].'</p2><br>';
        }
        ?>
        <br><p3>Grafiki:</p3>
        <br><img src="imgs/be1.png" alt="News 3 img" width="725" height="450"><br>
        <br><img src="imgs/be2.png" alt="News 3 img" width="725" height="450"><br>
        <br><img src="imgs/be3.png" alt="News 3 img" width="725" height="450"><br>
        <?php
        $oNews = array(array('url' => 'news2.php', 'name'=>'Losowy news'), array('url' => 'news1.php', 'name' => 'Losowy news'));
        $rNews = array_rand($oNews);
        $nNews = $oNews[$rNews];
        printf('<p3><a href="%s" title="%s">%s</a></p3>', $nNews['url'], $nNews['name'], $nNews['name']);
        echo '<br><p3><a href="main.php">Powrót na główną stronę</a></p3>'
        ?>
    </article>
</div>
</body>
<footer><p2>GIGA NEWS 2022 🔥</p2></footer>
</html>