const MPHamburger = document.querySelector("img.MPHamburger");
const menuResponsive = document.querySelector(".menuResponsive");
const fermer = document.querySelector(".fermer");
const MPSearch = document.querySelector(".MPSearch");
const chercherArticleForm = document.querySelector(".chercherArticleForm");
const cancelSearchButton = document.querySelector(".cancelSearchButton");

MPHamburger.addEventListener("click", () => {
    menuResponsive.style.left = "0px";
});

fermer.addEventListener("click", () => {
    menuResponsive.style.left = "-250px";
});

MPSearch.addEventListener("click", () => {
    chercherArticleForm.style.top = "0px";
});

cancelSearchButton.addEventListener("click", (e) => {
    e.preventDefault();
    chercherArticleForm.style.top = "-150px";
});