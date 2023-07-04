//open & close phone popup

let openphone1 = document.querySelector(".openphone1");
let closepopup1 = document.querySelector(".closepopup1");
let overlay = document.querySelector(".overlay");


openphone1.addEventListener("click", () => {
    overlay.style.display = "block";
});
closepopup1.addEventListener("click", () => {
    overlay.style.display = "none";
});


//open & close video popup

let openphone2 = document.querySelector(".openphone2");
let closepopup2 = document.querySelector(".closepopup2");
let overlay1 = document.querySelector(".overlay1");


openphone2.addEventListener("click", () => {
    overlay1.style.display = "block";
});
closepopup2.addEventListener("click", () => {
    overlay1.style.display = "none";
});


//change microphone to mute  in phone icon

let btn = document.querySelector(".toggle");
let icon = btn.querySelector(".fa-microphone");

btn.onclick = function () {
    if (icon.classList.contains("fa-microphone")) {
        icon.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


//change microphone to mute  in video icon

let btn1 = document.querySelector(".toggle1");
let icon1 = btn1.querySelector(".fa-microphone");

btn1.onclick = function () {
    if (icon1.classList.contains("fa-microphone")) {
        icon1.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon1.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}



//Digital clock in phone icon

let [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
let timerRef = document.querySelector('.timerDisplay');
let int = null;
document.getElementById('startTimer').addEventListener('click', () => {
    if (int !== null) {
        clearInterval(int);
    }
    int = setInterval(displayTimer1, 10);
});
document.getElementById('resetTimer').addEventListener('click', () => {
    clearInterval(int);
    [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
    timerRef.innerHTML = '00 : 00 : 00 : 000';
});
function displayTimer1() {
    milliseconds += 10;
    if (milliseconds == 1000) {
        milliseconds = 0;
        seconds++;
        if (seconds == 60) {
            seconds = 0;
            minutes++;
            if (minutes == 60) {
                minutes = 0;
                hours++;
            }
        }
    }
    let h = hours < 10 ? '0' + hours : hours;
    let m = minutes < 10 ? '0' + minutes : minutes;
    let s = seconds < 10 ? '0' + seconds : seconds;
    let ms = milliseconds < 10 ? '00' + milliseconds : milliseconds < 100 ? '0' + milliseconds : milliseconds;
    timerRef.innerHTML = ` ${h} : ${m} : ${s} : ${ms}`;
}



//Digital clock in video icon

let [millisecondss, secondss, minutess, hourss] = [0, 0, 0, 0];
let timerReff = document.querySelector('.timerDisplay1');
let intt = null;
document.getElementById('startTimer1').addEventListener('click', () => {
    if (intt !== null) {
        clearInterval(intt);
    }
    intt = setInterval(displayTimer, 10);
});
document.getElementById('resetTimer1').addEventListener('click', () => {
    clearInterval(intt);
    [millisecondss, secondss, minutess, hourss] = [0, 0, 0, 0];
    timerReff.innerHTML = '00 : 00 : 00 : 000';
});
function displayTimer() {
    millisecondss += 10;
    if (millisecondss == 1000) {
        millisecondss = 0;
        secondss++;
        if (secondss == 60) {
            secondss = 0;
            minutess++;
            if (minutess == 60) {
                minutess = 0;
                hourss++;
            }
        }
    }
    let h = hourss < 10 ? '0' + hourss : hourss;
    let m = minutess < 10 ? '0' + minutess : minutess;
    let s = secondss < 10 ? '0' + secondss : secondss;
    let ms = millisecondss < 10 ? '00' + millisecondss : millisecondss < 100 ? '0' + millisecondss : millisecondss;
    timerReff.innerHTML = ` ${h} : ${m} : ${s} : ${ms}`;
}



//change microphone to mute  in User List

let btn2 = document.querySelector(".toggle2");
let icon2 = btn2.querySelector(".fa-microphone");

btn2.onclick = function () {
    if (icon2.classList.contains("fa-microphone")) {
        icon2.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon2.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn3 = document.querySelector(".toggle3");
let icon3 = btn3.querySelector(".fa-microphone");

btn3.onclick = function () {
    if (icon3.classList.contains("fa-microphone")) {
        icon3.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon3.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn4 = document.querySelector(".toggle4");
let icon4 = btn4.querySelector(".fa-microphone");

btn4.onclick = function () {
    if (icon4.classList.contains("fa-microphone")) {
        icon4.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon4.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn5 = document.querySelector(".toggle5");
let icon5 = btn5.querySelector(".fa-microphone");

btn5.onclick = function () {
    if (icon5.classList.contains("fa-microphone")) {
        icon5.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon5.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn6 = document.querySelector(".toggle6");
let icon6 = btn6.querySelector(".fa-microphone");

btn6.onclick = function () {
    if (icon6.classList.contains("fa-microphone")) {
        icon6.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon6.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn7 = document.querySelector(".toggle7");
let icon7 = btn7.querySelector(".fa-microphone");

btn7.onclick = function () {
    if (icon7.classList.contains("fa-microphone")) {
        icon7.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon7.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn8 = document.querySelector(".toggle8");
let icon8 = btn8.querySelector(".fa-microphone");

btn8.onclick = function () {
    if (icon8.classList.contains("fa-microphone")) {
        icon8.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon8.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn9 = document.querySelector(".toggle9");
let icon9 = btn9.querySelector(".fa-microphone");

btn9.onclick = function () {
    if (icon9.classList.contains("fa-microphone")) {
        icon9.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon9.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn10 = document.querySelector(".toggle10");
let icon10 = btn10.querySelector(".fa-microphone");

btn10.onclick = function () {
    if (icon10.classList.contains("fa-microphone")) {
        icon10.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon10.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}


let btn11 = document.querySelector(".toggle11");
let icon11 = btn11.querySelector(".fa-microphone");

btn11.onclick = function () {
    if (icon11.classList.contains("fa-microphone")) {
        icon11.classList.replace("fa-microphone", "fa-microphone-slash")
    }
    else {
        icon11.classList.replace("fa-microphone-slash", "fa-microphone")
    }
}
