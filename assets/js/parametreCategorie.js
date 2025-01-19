const editerCategoryForm = document.querySelector(".editerCategoryForm");
const ajouterCategoryForm = document.querySelector(".ajouterCategoryForm");
const supprimerCategoryForm = document.querySelector(".supprimerCategoryForm");

const ajouterCategoryButt = document.querySelector(".ajouterCategoryButt");
const annulerModifButton = document.querySelector(".annulerModifButton");
const annulerAjouCategoryButton = document.querySelector(".annulerAjouCategoryButton");
const annulerSuppCategorieButton = document.querySelector(".annulerSuppCategorieButton");

const editerCategorie = document.querySelectorAll(".editerCategorie");
const supprimerCategorie = document.querySelectorAll(".supprimerCategorie");


editerCategorie.forEach(el =>{
    el.addEventListener("click", () => {
        const prntNode = el.parentNode.parentNode;
        const idCategory = prntNode.querySelector(".idCategory");
        const categoryName = prntNode.querySelector(".categoryName");

        const categoryAModifier = document.querySelector(".categoryAModifier");
        const hiddenCategoryId = document.querySelector(".hiddenCategoryId");

        categoryAModifier.value = categoryName.value;
        hiddenCategoryId.value = idCategory.value;

        editerCategoryForm.style.display = "block";
    });
});

annulerModifButton.addEventListener("click", e => {
    e.preventDefault();
    editerCategoryForm.style.display = "none";
});

supprimerCategorie.forEach(el => {
    el.addEventListener("click", () => {
        const prntNode = el.parentNode.parentNode;
        const idCategory = prntNode.querySelector(".idCategory");

        const idCategorieASupprime = document.querySelector(".idCategorieASupprime");
        idCategorieASupprime.value = idCategory.value;
        supprimerCategoryForm.style.display = "block";

    });
});

annulerSuppCategorieButton.addEventListener("click", e => {
    e.preventDefault();
    supprimerCategoryForm.style.display = "none";
});

ajouterCategoryButt.addEventListener("click", ()=>{
    ajouterCategoryForm.style.display = "block";
});

annulerAjouCategoryButton.addEventListener("click", e => {
    e.preventDefault();
    ajouterCategoryForm.style.display = "none";
});
