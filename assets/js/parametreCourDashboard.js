const editerCourText = document.querySelectorAll(".editerCourText");
const supprimerCourText = document.querySelectorAll(".supprimerCourText");

const editerCourVideo = document.querySelectorAll(".editerCourVideo");
const supprimerCourVideo = document.querySelectorAll(".supprimerCourVideo");

const editerCourTextForm = document.querySelector(".editerCourTextForm");
const editerCourVideoForm = document.querySelector(".editerCourVideoForm");

const annulerCourTextButton = document.querySelector(".annulerCourTextButton");
const annulerCourVideoButton = document.querySelector(".annulerCourVideoButton");

editerCourText.forEach(el => {
    el.addEventListener("click", () => {
        const parentnode = el.parentNode.parentNode;
        const idCour = parentnode.querySelector(".idCour");
        const typeCour = parentnode.querySelector(".typeCour");
        const titreAModifier = parentnode.querySelector(".titreAModifier");
        const contentAModifier = parentnode.querySelector(".contentAModifier");
        const imageAModifier = parentnode.querySelector(".imageAModifier");

        editerCourTextForm.style.display = "block";
        const inputTitle = editerCourTextForm.querySelector("#titreText");
        const inputContent = editerCourTextForm.querySelector("#textCour");
        const hiddenIdCour = editerCourTextForm.querySelector(".hiddenIdCour");
        const imageName = editerCourTextForm.querySelector(".imageName");
        
        inputTitle.value = titreAModifier.value;
        inputContent.value = contentAModifier.value;
        hiddenIdCour.value = idCour.value;
        imageName.value = imageAModifier.value;


    });
});

annulerCourTextButton.addEventListener("click", e => {
    e.preventDefault();
    editerCourTextForm.style.display = "none";

});

editerCourVideo.forEach(el => {
    el.addEventListener("click", () => {
        const parentElement = el.parentNode.parentNode;
        const idCour = parentElement.querySelector(".idCour");
        const titreAModifier = parentElement.querySelector(".titreAModifier");
        const contentAModifier = parentElement.querySelector(".contentAModifier");
        const ancienneImage = parentElement.querySelector(".ancienneImage");
        const ancienneVideo = parentElement.querySelector(".ancienneVideo");

        editerCourVideoForm.style.display = "block";
        const titreCourVideo = editerCourVideoForm.querySelector("#titreCourVideo");
        const contentDuCour = editerCourVideoForm.querySelector(".contentDuCour");
        const formId = editerCourVideoForm.querySelector(".hiddenIdCour");
        const oldPic = editerCourVideoForm.querySelector(".imageName");
        const oldVideo = editerCourVideoForm.querySelector(".videoName");

        titreCourVideo.value = titreAModifier.value;
        contentDuCour.value = contentAModifier.value;
        formId.value = idCour.value;
        oldPic.value = ancienneImage.value;
        oldVideo.value = ancienneVideo.value;



    });
});

annulerCourVideoButton.addEventListener("click", (e) => {
    e.preventDefault();
    editerCourVideoForm.style.display = "none";

});




