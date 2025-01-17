<?php

require_once("../classes/textCourse.php");

echo $_POST["titreCourAModifier"] . "<br>";
echo $_POST["courAModifie"] . "<br>";

echo "id cour :" . $_POST["idCour"] . "<br>";
echo "ancienne image :" . $_POST["imageName"] . "<br>";

if(isset($_FILES["imageRemplacante"])){
    $fileTextName = date("YmdHis"); 
    $fileTextInfo = pathinfo($_FILES["imageRemplacante"]["name"]);
    $fileTextName .= "." . $fileTextInfo["extension"];
    move_uploaded_file($_FILES["imageRemplacante"]["tmp_name"], "../files/" . $fileTextName );
}

echo $fileTextName;

$textCourse = new TextCourse();
$textCourse->modifyCourse($_POST["idCour"], $_POST["titreCourAModifier"], $_POST["courAModifie"], $fileTextName);
unlink("../files/" . $_POST["imageName"]);
header("Location: ../parametreCours.php");
