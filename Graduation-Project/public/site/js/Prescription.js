//slider

const patientData = [
    {
        id: 1,
        date: "20/7/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 2,
        date: "10/8/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 3,
        date: "30/9/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 4,
        date: "25/10/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 5,
        date: "27/11/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 6,
        date: "25/12/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    },
    {
        id: 7,
        date: "23/1/2022",
        diagnosis: "You suffer from wasting time on social media and fell nervously and sad and suffer from mental disorder. you can make a decision. you suffer from lonliness"
        ,
        plan_of_treatment: " Wake up early, Learn skill, Learn skill, Love your self, Read any thing you want, Spend time with your family, Pray, Go to gym, Sleep early, Take something pills",
    }
];


let diagnosisElement = document.querySelector(".diagnosis");
let dateElement = document.querySelector(".date");
let treatmentElement = document.querySelector(".treatment");
let currentItem = 0;

let prevBtn = document.querySelector(".prev");
let nextBtn = document.querySelector(".next");
let updateUI = () => {
    const item = patientData[currentItem];

    diagnosisElement.textContent = item.diagnosis;
    dateElement.textContent = item.date;
    treatmentElement.textContent = item.plan_of_treatment;

}
updateUI();


// set the event on the next button

nextBtn.addEventListener("click", () => {

    currentItem++;
    if (currentItem > patientData.length - 1) currentItem = 0;
    updateUI();
});
prevBtn.addEventListener("click", () => {

    currentItem--;
    if (currentItem < 0) currentItem = patientData.length - 1;
    updateUI();
});

let addPrescription = document.getElementById("addPrescription");
let closePrescription = document.getElementById("closePrescription");
let overlay = document.querySelector(".overlay");


addPrescription.addEventListener("click", () => {
    overlay.style.display = "block";
});
closePrescription.addEventListener("click", () => {
    overlay.style.display = "none";
});





//add prescription Automatic by user

/*let newData = document.querySelector(".addData form");
newData.addEventListener("submir", e => e.preventDefault());


let sendDataBtn = document.getElementById("sendDataBtn");
let forDate = document.getElementById("date");
let forTextarea1 = document.getElementById("textarea1");
let forTextarea2 = document.getElementById("textarea2");

sendDataBtn.addEventListener("click", () => {

  patientData.push({
        id: patientData.length + 1,
        date:forDate.value,
        diagnosis:forTextarea1.value,
        plan_of_treatment:forTextarea2.value
   })

    overlay.style.display = "none";
})*/




