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
    <pre id="main_files">
    Server run<ins><span id="speed">---[Exp n°<?php echo $experience ?>]</span></ins>
    <span id="speed">Terminal n°15314546.
        <br>5 Files has been found
    </span>
        <br><form onsubmit="return files_selector()" action="confidential_file.php" ><label for="choice">Choose a file : </label><ol><li>File......1</li><li>File......2</li><li>File......3</li><li>File......4</li><li>File......5</li></ol>
           <br><input id="choice" type="text" name="choice" maxlength="1" placeholder="...."><input id="submit" type="submit" name="submit" value="Valid"></form>
    <del></del> \\ Come Back ?..........[y]
    </pre>
    <script type="text/javascript" src="terminal.js"></script>
    <script type="text/javascript">
        /*
        * TIMEOUT
        **/
        setTimeout(function () {
            document.getElementById("choice").focus();
            $(".t-caret").css("display", "none");
        },7000);
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