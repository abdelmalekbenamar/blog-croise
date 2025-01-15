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

    <main class="flex justify-between">
        <div class="menuDashboard w-[80px] md:w-[100px] h-[500px] bg-[linear-gradient(-90deg,#ff7f50,burlywood)] text-center flex flex-col justify-around text-xs rounded-[10px] md:mt-[50px]">
            <?php include_once("./php/dashboard.php"); ?>
        </div>

    
        <div class="partieDroite flex justify-around w-[calc(100vw_-_80px)] pt-[100px] flex-wrap">

            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Users</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/users.png" alt="">
                    <span class="text-[28px]">5</span>
                </div>
            </div>

            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Articles</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/articles.png" alt="">
                    <span class="text-[28px]">45</span>
                </div>
            </div>

            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Catégories</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/category.png" alt="">
                    <span class="text-[28px]">8</span>
                </div>
            </div>

        </div>
    
    </main>















    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>