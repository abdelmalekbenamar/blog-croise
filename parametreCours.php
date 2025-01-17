<?php
session_start();
include_once("./classes/textCourse.php");
include_once("./classes/videoCourse.php");

$textObj = new TextCourse();
$videoObj = new VideoCourse();

if($_SESSION["rule"] == 1){
    $text = $textObj->displayAllText();
    $video = $videoObj->displayAllVideos();
}else if($_SESSION["rule"] == 2){
    $text = $textObj->displayTeacherCourseText($_SESSION["id"]);
    $video = $videoObj->displayTeacherCourseVideo($_SESSION["id"]);
}

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
                    <td class="border p-2.5 border-solid border-[black]">Titre</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>

                <?php foreach($text as $element){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $element["title"]; ?>
                    <input hidden class="idCour" value="<?php echo $element["id"]; ?>" type="text">
                    <input hidden class="typeCour" value="text" type="text">
                    <input hidden value="<?php echo $element["title"]; ?>" class="titreAModifier" type="text">
                    <input hidden value="<?php echo $element["content"]; ?>" type="text" class="contentAModifier">
                    <input hidden value="<?php echo $element["image"]; ?>" class="imageAModifier" type="text">
                    </td>
                    
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerCourText bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerCourText bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                <?php } ?>

                <?php foreach($video as $element){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $element["title"]; ?>
                    <input hidden class="idCour" value="<?php echo $element["id"]; ?>" type="text">
                    <input hidden class="typeCour" value="text" type="text">
                    <input hidden value="<?php echo $element["title"]; ?>" class="titreAModifier" type="text">
                    <input hidden value="<?php echo $element["content"]; ?>" class="contentAModifier" type="text">
                    <input hidden value="<?php echo $element["image"]; ?>" class="ancienneImage" type="text">
                    <input hidden value="<?php echo $element["video"]; ?>" class="ancienneVideo" type="text">
                    </td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerCourVideo bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerCourVideo bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>
                <?php } ?>

            </table>

        </div>
    
    </main>



    <form class="editerCourTextForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/editerCourTextFormSubmit.php" method="POST" enctype="multipart/form-data">

        <label for="titre">Titre du cour :</label>
        <input required class="w-full" name="titreCourAModifier" id="titreText" placeholder="Titre du cour" type="text">
        <label for="textCour">Text :</label>
        <textarea required class="w-full" name="courAModifie" rows="12" name="" placeholder="Text d'article" id="textCour"></textarea>
        <label for="courImage">Cour Image</label>
        <input required id="courTextImage" name="imageRemplacante" type="file">
        <input hidden name="idCour" class="hiddenIdCour" type="text">
        <input hidden name="imageName" class="imageName" type="text">
        <div class="flex justify-center">
            <button class="modifierCourTextButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerCourTextButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>

    <form class="editerCourVideoForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-20" action="./php/editerCourVideoFormSubmit.php" method="POST" enctype="multipart/form-data">

        <label for="titre">Titre du cour :</label>
        <input class="w-full" name="titreCourAModifier" id="titreCourVideo" placeholder="Titre du cour" type="text">
        <label for="textCour">Text :</label>
        <textarea class="w-full contentDuCour" name="courAModifie" rows="12" placeholder="Text d'article" id="videoCour"></textarea>
        <label for="courImage">Cour Image</label>
        <input name="courImage" type="file">
        <label for="courVideo">Cour video</label>
        <input name="courVideo" type="file">
        <input hidden name="idCour" class="hiddenIdCour" type="text">
        <input hidden name="imageName" class="imageName" type="text">
        <input hidden name="videoName" class="videoName" type="text">
        <div class="flex justify-center">
            <button class="modifierCourVideoeButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerCourVideoButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>



    <form class="supprimerCourForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="" method="POST">
        <p class="text-center text-[17px] p-[15px]">Êtes-vous sûr de supprimer ce cour ?</p>
        <input class="hidden" name="idArticleASupprime" type="text">
        <div class="flex justify-center">
            <button class="modifierArticleButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Supprimer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>










    <script src="./assets/js/parametreCourDashboard.js"></script>
    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>