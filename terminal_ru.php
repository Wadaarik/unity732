<?php
$experience = uniqid();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>terminal.exe</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="t.js-master/t.min.js"></script>
</head>
<body>
    <script>
        var audio = new Audio('../style/mp3/computer_sounds.mp3');
        audio.loop = false;
        window.onload(audio.play());
    </script>
    <pre id="main_files">
    Запуск сервера<ins><span id="speed">~~~[опыт п °<?php echo $experience ?>]</span></ins>
    <span id="speed">Терминал п °15314546.<ins>1.5</ins><br>Этот терминал разрешает доступ только супервизорам.
        <br>Нет информации в этом предложении
        <br><form onsubmit="return validate_ru()" action="terminal.php"><label for="password_ru">пароль :</label><input id="password_ru" maxlength="4" type="password" name="password_ru" placeholder="...."><input id="submit" type="submit" name="submit" value="утверждать"></form>
    </span><del></del> \\  <span id="alert_red" style="color: red; border: solid; padding: 15px; text-align: center; display: none">ДОСТУП НЕ РАЗРЕШЕН</span></pre>
    <span id="error"></span>
    <script type="text/javascript" src="confidential/terminal.js"></script>
    <script type="text/javascript">
        /*
        * TIMEOUT
        **/
        setTimeout(function () {
            document.getElementById("password_ru").focus();
            $(".t-caret").css("display", "none");
        },7000);

    </script>
</body>
</html>