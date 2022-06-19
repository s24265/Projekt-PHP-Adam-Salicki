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
        <form name="loginMethod" action = "lProcessingPage.php" onsubmit = "return validation()" method = "POST">
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

    function lValidation() {

    }
?>
</div>
    <script>
        function validation()
        {
            const id = document.loginMethod.user.value;
            const ps = document.loginMethod.password.value;
            if(id.length==="" && ps.length==="") {
                return false;
            }
            else
            {
                if(id.length==="") {
                    return false;
                }
                if (ps.length==="") {
                    return false;
                }
            }
        }
    </script>
</body>
</html>