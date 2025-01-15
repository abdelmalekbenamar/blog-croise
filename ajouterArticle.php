<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-[#abdbe3]">
    <?php include_once("./php/menu.php") ?>

    <main>
        <div class="textVideoContainer flex w-[360px] mx-auto my-0">
            <div class="courText border w-6/12 cursor-pointer border-solid border-[black] border-b-[none]">Cour texte</div>
            <div class="courVideo border w-6/12 cursor-pointer border-solid border-[black]">Cour video</div>
        </div>
        <form class="ajouterCourVideoForm hidden w-[360px] mx-auto my-0 border border-t-[none] border-solid border-[black]" action="" method="POST">

            <label for="titre">Titre du cour :</label>
            <input class="w-full" id="titre" placeholder="Titre du cour" type="text">
            <label for="textArticle">Text du cour :</label>
            <textarea class="w-full" rows="12" name="" placeholder="Text du cour" id="textArticle"></textarea>
            <label for="videoCour">video :</label>
            <input class="videoCour" id="videoCour" type="file">
            <select name="category" id="">
                <option value="">IT</option>
                <option value="">Geographie</option>
                <option value="">Mathematique</option>
            </select>

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>


        <form class="ajouterCourTextForm w-[360px] mx-auto my-0 border border-t-[none] border-solid border-[black]" action="" method="POST">

            <label for="titre">Titre du cour :</label>
            <input class="w-full" id="titre" placeholder="Titre du cour" type="text">
            <label for="textArticle">Text du cour :</label>
            <textarea class="w-full" rows="12" name="" placeholder="Text du cour" id="textArticle"></textarea>
            <label for="imageCour">Image du cour :</label>
            <input class="courImage" id="imageCour" type="file">

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>
    </main>
    










    <script src="./assets/js/ajouterArticleScript.js"></script>
    <script src="./assets/js/indexScript.js"></script>
</body>
</html>