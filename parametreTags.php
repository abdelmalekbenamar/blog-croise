<?php
session_start();
require_once("./classes/tag.php");

$tagObj = new Tag();
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

    <main class="flex justify-between">
        <div class="menuDashboard w-[80px] md:w-[100px] h-[500px] bg-[linear-gradient(-90deg,#ff7f50,burlywood)] text-center flex flex-col justify-around text-xs rounded-[10px] md:mt-[50px]">
            <?php include_once("./php/dashboard.php"); ?>
        </div>

    
        <div class="partieDroite w-[calc(100vw_-_80px)] mt-[55px] p-[10px] overflow-y-auto h-[70vh]">

            <div class="md:flex md:justify-between">
                <!-- <button class="bg-[blue] text-[white] p-[5px] rounded-[5px] m-[5px]">Ajouter</button> -->
                
                    
                    <button class="ajouterTagButt bg-[orangered] text-[white] p-[5px] rounded-[5px] m-[5px]" type="submit">Ajouter</button>
                
            </div>

            <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">catégorie</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>

                <?php foreach($tags as $tag){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $tag["nam"]; ?><input class="idTag" hidden name="tagId" value="<?php echo $tag["id"]; ?>" type="text"><input hidden value="<?php echo $tag["nam"]; ?>" name="tagNom" class="tagName" type="text"></td>
                    
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerTag bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerTag bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                <?php } ?>

                


            </table>

        </div>
    
    </main>



    <form class="editerTagForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/editerTagFormSubmit.php" method="POST">

        <label for="titre">Modifier le tag :</label>
        <input class="w-full tagAModifier" name="titreTagAModifier" id="titre" placeholder="Titre de tag" type="text">
        <input hidden class="hiddenTagId" name="idTag" type="text">
        <div class="flex justify-center">
            <button class="modifierArticleButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>



    <form class="ajouterTagForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/ajouterTagFormSubmit.php" method="POST">

        <label for="titre">Nouveau tag :</label>
        <input class="w-full nouvelleTag" name="titreNouvelleTag" id="titre" placeholder="Titre de tag" type="text">
        <div class="flex justify-center">
            <button class="ajouterNouvelleTagButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>
            <button class="annulerAjouTagButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>


    <form class="supprimerTagForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="./php/supprimerTagFormSubmit.php" method="POST">
        <p class="text-center text-[17px] p-[15px]">Êtes-vous sûr de supprimer ce tag ?</p>
        <input class="hidden idTagASupprime" name="idTagASupprime" type="text">

        <div class="flex justify-center">
            <button class="supprTagButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Supprimer</button>
            <button class="annulerSuppTagButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>










    <script src="./assets/js/parametreTag.js"></script>
    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>