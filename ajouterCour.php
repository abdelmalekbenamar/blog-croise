<?php
session_start();

require_once("./classes/tag.php");
require_once("./classes/category.php");

$categoryObj = new Category();
$tagObj = new Tag();

$categories = $categoryObj->displayCategories();
$tags = $tagObj->displayTags();


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
        <form class="ajouterCourVideoForm hidden w-[360px] mx-auto my-0 border border-t-[none] border-solid border-[black]" action="./php/ajouterCourVideoFormSubmit.php" method="POST" enctype="multipart/form-data">

            <label for="titre">Titre du cour :</label>
            <input required class="w-full" name="titre" id="titre" placeholder="Titre du cour" type="text">
            <label for="textArticle">Text du cour :</label>
            <textarea required class="w-full" name="courText" rows="12" name="" placeholder="Text du cour" id="textArticle"></textarea>
            <label for="videoCour">video :</label>
            <input required class="videoCour" name="videoCour" id="videoCour" type="file"><br>
            <label for="imageCour">Image :</label>
            <input required class="imageCour" name="imageCour" id="imageCour" type="file"><br>
            catégorie :
            <select name="category" id="">
                <?php foreach($categories as $cat){ ?>

                <option value="<?php echo $cat["id"]; ?>"><?php echo $cat["nam"]; ?></option>

                <?php } ?>
            </select>

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
            <?php foreach($tags as $tag){ ?>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="<?php echo $tag["nam"]; ?>"><?php echo $tag["nam"]; ?> <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input name="<?php echo $tag["id"]; ?>" hidden id="<?php echo $tag["nam"]; ?>" type="checkbox"></label>
            <?php } ?>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>


        <form class="ajouterCourTextForm w-[360px] mx-auto my-0 border border-t-[none] border-solid border-[black]" action="./php/ajouterCourTextFormSubmit.php" method="POST" enctype="multipart/form-data">

            <label for="titre">Titre du cour :</label>
            <input name="titleTextCourse" class="w-full" id="titre" placeholder="Titre du cour" type="text">
            <label for="textArticle">Text du cour :</label>
            <textarea class="w-full" rows="12" name="contentTextCourse" placeholder="Text du cour" id="textArticle"></textarea>
            <label for="imageCour">Image du cour :</label>
            <input name="imageCour" class="courImage" id="imageCour" type="file"><br>
            catégorie :
            <select name="category" id="">
            <?php foreach($categories as $cat){ ?>

                <option value="<?php echo $cat["id"]; ?>"><?php echo $cat["nam"]; ?></option>

            <?php } ?>
            </select>

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
                <?php foreach($tags as $tag){ ?>
                    <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="<?php echo $tag["nam"]; ?>"><?php echo $tag["nam"]; ?> <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input name="<?php echo $tag["id"]; ?>" hidden id="<?php echo $tag["nam"]; ?>" type="checkbox"></label>
                <?php } ?>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>
    </main>
    










    <script src="./assets/js/ajouterArticleScript.js"></script>
    <script src="./assets/js/indexScript.js"></script>
</body>
</html>