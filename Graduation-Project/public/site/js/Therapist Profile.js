//open & close book appointment popup in Therapist Profile for Patient page

let popup =document.getElementById("popup");
let overlay =document.querySelector(".ovarlay");

function openPopup(){
    popup.classList.add("open-popup");
    document.querySelector(".overlay").style.display="block";
    
}
function closePopup(){
    popup.classList.remove("open-popup");
    document.querySelector(".overlay").style.display="none";

}


//open & close create group therapy popup in Therapist Profile for Therapist page

let openpopup3 = document.querySelector(".openpopup3");
let closepopup3 = document.querySelector(".closepopup3");
let overlay2 = document.querySelector(".overlay2");


openpopup3.addEventListener("click", () => {
    overlay2.style.display = "block";
});
closepopup3.addEventListener("click", () => {
    overlay2.style.display = "none";
});
