<?php
session_start();

require_once("../classes/textCourse.php");
require_once("../classes/tag.php");

$textCourseObj = new TextCourse();


if(isset($_FILES["imageCour"])){
    $fileTextName = date("YmdHis"); 
    $fileTextInfo = pathinfo($_FILES["imageCour"]["name"]);
    $fileTextName .= "." . $fileTextInfo["extension"];
    move_uploaded_file($_FILES["imageCour"]["tmp_name"], "../files/" . $fileTextName );
}

$lastCourId = $textCourseObj->ajouterCourText($_POST["titleTextCourse"], $_POST["contentTextCourse"], $fileTextName, $_POST["category"], $_SESSION["id"]);


$tag = new Tag();

$maTable = array_keys($_POST);
for($i = 3; $i < count($_POST); $i++){

    $tag->addTagsToTextCourse($maTable[$i], $lastCourId);
    echo $maTable[$i] . "<br>";
};

header("Location: ../index.php");







