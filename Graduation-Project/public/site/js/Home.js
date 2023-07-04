//star rating   ........   div1

const reviewStars1 = document.querySelectorAll(".rating1 i");

reviewStars1.forEach((star1, index) => {
    star1.addEventListener("click", () => {
        reviewStars1.forEach((element1) => element1.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars1[i].classList.add("fas", "checked");
        }
    })
})

//star rating   ........    div2

const reviewStars2 = document.querySelectorAll(".rating2 i");

reviewStars2.forEach((star2, index) => {
    star2.addEventListener("click", () => {
        reviewStars2.forEach((element2) => element2.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars2[i].classList.add("fas", "checked");
        }
    })
})

//star rating   ........   div3

const reviewStars3 = document.querySelectorAll(".rating3 i");

reviewStars3.forEach((star3, index) => {
    star3.addEventListener("click", () => {
        reviewStars3.forEach((element3) => element3.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars3[i].classList.add("fas", "checked");
        }
    })
})



//fill heart rating 

let fillHeart = function (icon) {
    icon.classList.toggle('fa-solid')
}

//popup

let btnsDIV = document.querySelector(".btns");
let imgs = document.querySelectorAll(".btns img");
let divs = document.querySelectorAll(".content div");

btnsDIV.addEventListener("click", e => {
    let currentBtn = e.target;
    let currentDiv = document.getElementById(currentBtn.dataset.mark);
    imgs.forEach(img => {
        img.classList.remove("active")
        currentBtn.classList.add("active")
    })
    divs.forEach(div => {
        div.classList.remove("show");
        currentDiv.classList.add("show");

    })
})


//close popup

let overlay =document.querySelector(".ovarlay");
document.querySelector(".closeBtn").addEventListener("click", function () {
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".overlay").style.display="none";
});






