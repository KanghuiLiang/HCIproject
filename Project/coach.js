var i = 0;
    var txt = "Be a Coach";
    var speed = 120;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("welcome").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }



