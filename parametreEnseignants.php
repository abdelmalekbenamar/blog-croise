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

    
        <div class="partieDroite w-[calc(100vw_-_80px)] mt-[55px] p-[10px] overflow-y-auto h-[70vh]">

            <div class="md:flex md:justify-between">
                <!-- <button class="bg-[blue] text-[white] p-[5px] rounded-[5px] m-[5px]">Ajouter</button> -->
                <form action="">
                    <input class="text-[black] p-[5px] rounded-[5px] m-[5px]" type="text">
                    <button class="bg-[orangered] text-[white] p-[5px] rounded-[5px] m-[5px]" type="submit">Chercher</button>
                </form>
            </div>

            <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">Titre article</td>
                    <td class="border p-2.5 border-solid border-[black]">Commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>


                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                
                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

            </table>

        </div>
    
    </main>



    <form class="editerCommentaireForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="" method="POST">

        <label for="textArticle">Commentaire :</label>
        <textarea class="w-full" name="commentaireAModifie" rows="12" name="no"></textarea>
        <div class="flex justify-center">
            <button class="modifierCommentaireButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>



    <form class="supprimerCommentaireForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="" method="POST">
        <p class="text-center text-[17px] p-[15px]">Êtes-vous sûr de supprimer ce commentaire ?</p>
        <input class="hidden" name="idArticleASupprime" type="text">
        <div class="flex justify-center">
            <button class="modifierCommentaireButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Supprimer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>











    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>