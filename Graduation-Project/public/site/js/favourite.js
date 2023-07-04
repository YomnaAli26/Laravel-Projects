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

//star rating in   ........    div2

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

//star rating   .........    div4

const reviewStars4 = document.querySelectorAll(".rating4 i");

reviewStars4.forEach((star4, index) => {
    star4.addEventListener("click", () => {
        reviewStars4.forEach((element4) => element4.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars4[i].classList.add("fas", "checked");
        }
    })
})




//fill heart rating 

let fillHeart = function (icon) {
    icon.classList.toggle('fa-solid')
}


