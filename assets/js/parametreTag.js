const editerTagForm = document.querySelector(".editerTagForm");
const ajouterTagForm = document.querySelector(".ajouterTagForm");
const supprimerTagForm = document.querySelector(".supprimerTagForm");

const ajouterTagButt = document.querySelector(".ajouterTagButt");
const annulerModifButton = document.querySelector(".annulerModifButton");
const annulerAjouCategoryButton = document.querySelector(".annulerAjouTagButton");
const annulerSuppCategorieButton = document.querySelector(".annulerSuppTagButton");

const editerTag = document.querySelectorAll(".editerTag");
const supprimerTag = document.querySelectorAll(".supprimerTag");


editerTag.forEach(el =>{
    el.addEventListener("click", () => {
        const prntNode = el.parentNode.parentNode;
        const idTag = prntNode.querySelector(".idTag");
        const tagName = prntNode.querySelector(".tagName");

        const tagAModifier = document.querySelector(".tagAModifier");
        const hiddenTagId = document.querySelector(".hiddenTagId");

        tagAModifier.value = tagName.value;
        hiddenTagId.value = idTag.value;

        editerTagForm.style.display = "block";
    });
});

annulerModifButton.addEventListener("click", e => {
    e.preventDefault();
    editerTagForm.style.display = "none";
});

supprimerTag.forEach(el => {
    el.addEventListener("click", () => {
        const prntNode = el.parentNode.parentNode;
        const idTag = prntNode.querySelector(".idTag");

        const idTagASupprime = document.querySelector(".idTagASupprime");
        idTagASupprime.value = idTag.value;
        supprimerTagForm.style.display = "block";

    });
});

annulerSuppCategorieButton.addEventListener("click", e => {
    e.preventDefault();
    supprimerTagForm.style.display = "none";
});

ajouterTagButt.addEventListener("click", ()=>{
    ajouterTagForm.style.display = "block";
});

annulerAjouCategoryButton.addEventListener("click", e => {
    e.preventDefault();
    ajouterTagForm.style.display = "none";
});
