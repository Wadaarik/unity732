<?php
$experience = uniqid();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>terminal.exe</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../t.js-master/t.min.js"></script>
</head>
<body>
    <script>
        var audio = new Audio('../style/mp3/computer_sounds.mp3');
        audio.loop = false;
        window.onload(audio.play());
    </script>
    <pre id="main">
    Server run<ins><span id="pow-txt">---[Exp n°<?php echo $experience ?>]</span></ins>
    <span id="tagline">Terminal n°15314546.<ins>1.5</ins><br>Which file do you want ?
        <br><form onsubmit="return validation_index()" action="multiple_files.php" ><label for="index">Files index: </label><input id="index" maxlength="5" type="text" name="index" placeholder="...."><input id="submit" type="submit" name="submit" value="Valid"></form>
    </span><del></del><del id="pow-trigger"></del> \\ Come Back ?..........[y]
    </pre>
    <span id="error"></span>
    <script type="text/javascript" src="terminal.js"></script>
    <script type="text/javascript">
        /*
        * TIMEOUT
        **/
        setTimeout(function () {
            document.getElementById("index").focus();
            document.getElementById("caret").style.display = 'none';
        },10000);
    </script>
    <script>
        document.onkeydown = function(e) {
            switch (e.keyCode) {
                case 89:
                    history.go(-1);
                    break;
            }
        };
    </script>
</body>
</html>
