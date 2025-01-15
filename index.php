<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-[#abdbe3]">

    <?php include_once("./php/menu.php") ?>

    <main class="flex flex-wrap gap-7 justify-center p-[30px]">
        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>

        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>

        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>

        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>

        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>
    </main>
    


    <script src="./assets/js/indexScript.js"></script>
</body>
</html>