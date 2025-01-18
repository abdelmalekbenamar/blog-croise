<?php
session_start();
require_once("./classes/user.php");

$userObj = new User();
$users = $userObj->displayAllTeachers();



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



            <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">Nom</td>
                    <td class="border p-2.5 border-solid border-[black]">Email</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>

            <?php foreach($users as $user){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $user["nam"]; ?></td>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $user["mail"]; ?></td>
                    <td class="border p-2.5 border-solid border-[black]">
                    
                    
                    <div class="teacherForms">
                    <?php if($user["status"] == 0){ ?>
                        <form action="./php/activerEnseignat.php" method="POST">
                            <input hidden value="<?php echo $user["id"]; ?>" name="idUser" type="text">
                            <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px]">Activer</button>
                        </form>
                    <?php }else if($user["status"] == 1){ ?>

                        <form action="./php/desactiverEnseignat.php" method="POST">
                            <input value="<?php echo $user["id"]; ?>" hidden name="idUser" type="text">
                            <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Désactiver</button>
                        </form>
                    <?php } ?>
                    </div>

                    </td>
                </tr>

            <?php } ?>

                <!--
                <tr>
                    <td class="border p-2.5 border-solid border-[black]">Mon titre 1</td>
                    <td class="border p-2.5 border-solid border-[black]">Mon commentaire</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                -->





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