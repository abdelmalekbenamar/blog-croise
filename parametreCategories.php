<?php
session_start();
require_once("./classes/category.php");

$categoryObj = new Category();
$category = $categoryObj->displayCategories();

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
                
                    
                    <button class="ajouterCategoryButt bg-[orangered] text-[white] p-[5px] rounded-[5px] m-[5px]" type="submit">Ajouter</button>
                
            </div>

            <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">catégorie</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>

                <?php foreach($category as $cat){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $cat["nam"]; ?><input class="idCategory" hidden name="categoyId" value="<?php echo $cat["id"]; ?>" type="text"><input hidden value="<?php echo $cat["nam"]; ?>" name="categorieNom" class="categoryName" type="text"></td>
                    
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerCategorie bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerCategorie bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                <?php } ?>

                


            </table>

        </div>
    
    </main>



    <form class="editerCategoryForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/editerCategoryFormSubmit.php" method="POST">

        <label for="titre">Modifier la catégorie :</label>
        <input class="w-full categoryAModifier" name="titreCategoryAModifier" id="titre" placeholder="Titre de catégorie" type="text">
        <input hidden class="hiddenCategoryId" name="idCategory" type="text">
        <div class="flex justify-center">
            <button class="modifierArticleButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>



    <form class="ajouterCategoryForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/ajouterCategoryFormSubmit.php" method="POST">

        <label for="titre">Nouvelle catégorie :</label>
        <input class="w-full nouvelleCategory" name="titreNouvelleCategory" id="titre" placeholder="Titre de catégorie" type="text">
        <div class="flex justify-center">
            <button class="ajouterNouvelleCategoryeButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>
            <button class="annulerAjouCategoryButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>


    <form class="supprimerCategoryForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="./php/supprimerCategoryFormSubmit.php" method="POST">
        <p class="text-center text-[17px] p-[15px]">Êtes-vous sûr de supprimer cette catégorie ?</p>
        <input class="hidden idCategorieASupprime" name="idArticleASupprime" type="text">

        <div class="flex justify-center">
            <button class="supprCategorieButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Supprimer</button>
            <button class="annulerSuppCategorieButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>










    <script src="./assets/js/parametreCategorie.js"></script>
    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>