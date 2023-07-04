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
