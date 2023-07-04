//fill heart

let fillHeart = function (icon) {
    icon.classList.toggle('fa-solid')
}


//popup


let popup = document.getElementById("popup");
let save = document.getElementById("save");

let overlay = document.querySelector(".ovarlay");

function openPopup() {
    popup.classList.add("open-popup");
    document.querySelector(".overlay").style.display = "block";
}
function closePopup() {
    popup.classList.remove("open-popup");
    document.querySelector(".overlay").style.display = "none";
}
function savePopup() {
    popup.classList.remove("open-popup");
    document.querySelector(".overlay").style.display = "none";
}