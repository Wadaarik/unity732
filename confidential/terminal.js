$('#main').t({
    beep:true,
    caret:'<span id="caret" style="color:#1c7c19;">▄▄</span>',

    typing:function(elm,chr){
        if(chr.match(/\-trigger/))
            $('#pow-txt').show().delay(500).fadeOut(0);
    }

});

var new_speed=100;

$('#main_files').t({
    beep:true,
    caret:'<span id="caret" style="color:#1c7c19;">▄▄</span>',
    speed:100,
    typing:
        function(e){
            new_speed-=2;
            e.s(new_speed);
            $('#speed').text(Math.max(new_speed,10));
        }
});

/*
*CONFIDENTIAL
 */

/****PASS RU***/
function validate_ru() {
    var password_ru = document.getElementById('password_ru');

    if (password_ru.value.trim() == "" || password_ru.value.trim() == null){
        return false;
    }else{
        if (password_ru.value.trim() == "6446"){
            return true;
        }else{
                document.getElementById('alert_red').style.display = 'block';
                var audio = new Audio('style/mp3/Wrong.mp3');
                audio.loop = false;
                audio.play();
                document.getElementById("password_ru").focus();
                return false;
        }
    }
}
/****PASS***/
function validate() {
    var password = document.getElementById('password');

    if (password.value.trim() == "" || password.value.trim() == null){
        return false;
    }else{
        if (password.value.trim() == "papiertoilette"){
            return true;
        }else{
            document.getElementById('alert_red').style.display = 'block';
            var audio = new Audio('style/mp3/Wrong.mp3');
            audio.play();
            document.getElementById("password").focus();
            return false;
        }
    }
}

/***Files***/
function validation_index() {
    var index = document.getElementById('index');

    if (index.value.trim() == "" || index.value.trim() == null){
        var span = document.createElement("span");
        return false;
    }else{
        if (index.value.trim() == "15015"){
            return true;
        }else{
                window.location.assign("file888888.php");
                return false;
        }
    }
}
/***Files SELECTOR***/
function files_selector() {
    var choice = document.getElementById('choice');

    if (choice.value.trim() == "" || choice.value.trim() == null){
        return false;
    }else{
        if (choice.value.trim() == "4"){
            return true;
        }else{
            window.location.assign("file888888.php");
            return false;
        }
    }
}