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
        var audio = new Audio('style/mp3/computer_sounds.mp3');
        audio.loop = false;
        window.onload(audio.play());
    </script>
    <pre id="main">
    Server run<ins><span id="pow-txt">---[Exp n°<?php echo $experience ?>]</span></ins>
    <span id="tagline">Terminal n°15314546.<ins>1.5</ins><br>This terminal only allows access to supervisors.

        <br><form onsubmit="return validate()" action="confidential/files.php"><label for="password">Password :</label><input id="password" maxlength="14" type="password" name="password" placeholder="...."><input id="submit" type="submit" name="submit" value="Valid"></form>
    </span><del></del><del id="pow-trigger"></del> \\  <span id="alert_red" style="color: red; border: solid; padding: 15px; text-align: center; display: none">ACCESS DENIED</span>

    </pre>
    <span id="error"></span>
    <script type="text/javascript" src="confidential/terminal.js"></script>
    <script type="text/javascript">
        /*
        * TIMEOUT
        **/
        setTimeout(function () {
            document.getElementById("password").focus();
            document.getElementById("caret").style.display = 'none';
        },10000);
    </script>
</body>
</html>