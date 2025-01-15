const categories = document.querySelectorAll(".categoryLabel");
const ajouterCourTextForm = document.querySelector(".ajouterCourTextForm");
const ajouterCourVideoForm = document.querySelector(".ajouterCourVideoForm");
const courText = document.querySelector(".courText");
const courVideo = document.querySelector(".courVideo");


courText.style.borderBottom = "none";


categories.forEach(el => {
    const checkbox = el.querySelector("input");
    const image = el.querySelector("img");
    el.addEventListener("click", () => {
        if(checkbox.checked != true){
            el.style.backgroundColor = "chocolate";
            checkbox.checked = true;
            image.src = "./assets/images/added.svg";
        }else{
            el.style.backgroundColor = "bisque";
            checkbox.checked = false;
            image.src = "./assets/images/to-add.png";
        }
    });
});

courVideo.addEventListener("click", () => {
    courVideo.style.borderBottom = "none";
    courText.style.borderBottom = "1px solid black";
    ajouterCourTextForm.style.display = "none";
    ajouterCourVideoForm.style.display = "block";
    ajouterCourVideoForm.style.borderTop = "none";
});

courText.addEventListener("click", () => {
    courText.style.borderBottom = "none";
    courVideo.style.borderBottom = "1px solid black";
    ajouterCourVideoForm.style.display = "none";
    ajouterCourTextForm.style.display = "block";
    ajouterCourTextForm.style.borderTop = "none";
});