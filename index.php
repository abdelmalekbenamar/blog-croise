<?php 
session_start();
require_once("./classes/videoCourse.php");
require_once("./classes/textCourse.php");

$videosObj = new VideoCourse();
$videos = $videosObj->displayAllVideos();

$textObj = new TextCourse();
$texts = $textObj->displayAllText();



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

        
        <?php if(isset($videos) && isset($texts)){
            foreach($videos as $video){ ?>
        <div class="articleCard w-[400px]">
            <div class="containerArticleImage overflow-hidden h-[230px] flex justify-center items-center">
                <img class="articleImage w-[400px]" src="./files/<?php echo $video["image"]; ?>" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]">
            <?php if(isset($_SESSION["rule"]) && $_SESSION["rule"] == 3){ ?>
                <a href="./displayCourse.php?id=<?php echo $video["id"]; ?>&type=video"><?php echo $video["title"]; ?></a>

            <?php }else if(!isset($_SESSION["rule"]) || ($_SESSION["rule"] == 1 || $_SESSION["rule"] == 2)){ echo $video["title"];}?>
            
            </h2>
        </div>
        <?php } foreach($texts as $text){ ?>

        <div class="articleCard w-[400px]">
            <div class="containerArticleImage overflow-hidden h-[230px] flex justify-center items-center">
                <img class="articleImage w-[400px]" src="./files/<?php echo $text["image"]; ?>" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]">
            <?php if(isset($_SESSION["rule"]) && $_SESSION["rule"] == 3){ ?>
                <a href="./displayCourse.php?id=<?php echo $text["id"]; ?>&type=text"><?php echo $text["title"]; ?></a>

            <?php }else if(!isset($_SESSION["rule"]) || ($_SESSION["rule"] == 1 || $_SESSION["rule"] == 2)){ echo $text["title"];}?>
            
            </h2>
        </div>
        <?php } } ?>

       
        <!--
        <div class="articleCard w-[400px]">
            <div class="containerArticleImage">
                <img class="articleImage w-[400px]" src="https://flourist.com/cdn/shop/articles/IMG_7623_VSCO.jpg" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href="">Le titre de l'article</a></h2>
            <p class="articleText text-sm">This simple salad can be dressed up or down depending on what you have in your fridge. We like it as is, with or without...</p>
        </div>
        -->


    </main>
    


    <script src="./assets/js/indexScript.js"></script>
</body>
</html>