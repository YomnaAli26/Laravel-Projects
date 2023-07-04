//star rating     ........   div1

const reviewStars1 = document.querySelectorAll(".rating1 i");

reviewStars1.forEach((star1, index) => {
    star1.addEventListener("click", () => {
        reviewStars1.forEach((element1) => element1.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars1[i].classList.add("fas", "checked");
        }
    })
})

//star rating    ........    div2

const reviewStars2 = document.querySelectorAll(".rating2 i");

reviewStars2.forEach((star2, index) => {
    star2.addEventListener("click", () => {
        reviewStars2.forEach((element2) => element2.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars2[i].classList.add("fas", "checked");
        }
    })
})

//star rating     ........   div3

const reviewStars3 = document.querySelectorAll(".rating3 i");

reviewStars3.forEach((star3, index) => {
    star3.addEventListener("click", () => {
        reviewStars3.forEach((element3) => element3.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars3[i].classList.add("fas", "checked");
        }
    })
})

//star rating     ........   div4

const reviewStars4 = document.querySelectorAll(".rating4 i");

reviewStars4.forEach((star4, index) => {
    star4.addEventListener("click", () => {
        reviewStars4.forEach((element4) => element4.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars4[i].classList.add("fas", "checked");
        }
    })
})



//star rating     ........   div5

const reviewStars5 = document.querySelectorAll(".rating5 i");

reviewStars5.forEach((star5, index) => {
    star5.addEventListener("click", () => {
        reviewStars5.forEach((element5) => element5.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars5[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div6

const reviewStars6 = document.querySelectorAll(".rating6 i");

reviewStars6.forEach((star6, index) => {
    star6.addEventListener("click", () => {
        reviewStars6.forEach((element6) => element6.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars6[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div7

const reviewStars7 = document.querySelectorAll(".rating7 i");

reviewStars7.forEach((star7, index) => {
    star7.addEventListener("click", () => {
        reviewStars7.forEach((element7) => element7.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars7[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div8

const reviewStars8 = document.querySelectorAll(".rating8 i");

reviewStars8.forEach((star8, index) => {
    star8.addEventListener("click", () => {
        reviewStars8.forEach((element8) => element8.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars8[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div9

const reviewStars9 = document.querySelectorAll(".rating9 i");

reviewStars9.forEach((star9, index) => {
    star9.addEventListener("click", () => {
        reviewStars9.forEach((element9) => element9.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars9[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div10

const reviewStars10 = document.querySelectorAll(".rating10 i");

reviewStars10.forEach((star10, index) => {
    star10.addEventListener("click", () => {
        reviewStars10.forEach((element10) => element10.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars10[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div11

const reviewStars11 = document.querySelectorAll(".rating11 i");

reviewStars11.forEach((star11, index) => {
    star11.addEventListener("click", () => {
        reviewStars11.forEach((element11) => element11.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars11[i].classList.add("fas", "checked");
        }
    })
})


//star rating     ........   div12

const reviewStars12 = document.querySelectorAll(".rating12 i");

reviewStars12.forEach((star12, index) => {
    star12.addEventListener("click", () => {
        reviewStars12.forEach((element12) => element12.classList.remove("fas", "checked"));

        for (let i = 0; i <= index; i++) {
            reviewStars12[i].classList.add("fas", "checked");
        }
    })
})




//fill heart rating 

let fillHeart = function (icon) {
    icon.classList.toggle('fa-solid')
}
