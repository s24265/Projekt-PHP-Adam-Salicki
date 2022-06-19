<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIGA NEWS</title>
    <link rel="icon" type="image/png" href="icon/gigaNewsyIcon.png">
    <link rel="stylesheet" href="cssFiles/style1.css">
</head>
<body>
<div class="boxStyle"><p2>Logowanie</p2>
        <form name="loginMethod" action = "lProcessingPage.php" method = "POST">
            <p><label for="user"></label><input type = "text" id ="user" name  = "user" placeholder="nazwa użytkownika" required/></p>
            <p><label for="password"></label><input type = "password" id ="password" name  = "password" placeholder="hasło" required/></p>
            <p><input type =  "submit" id = "login" value = "Login" /></p>
        </form>
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

    echo '<div class="hoverText"><p3>Twój adres IP: </p3></div>'.'<div class="hiddenText"><p3>'.$ipUser.'</p3></div><br>';
?>
</div>
</body>
</html>