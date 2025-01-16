<?php
session_start(); 

require_once("../classes/videoCourse.php");
require_once("../classes/tag.php");



if(isset($_FILES["videoCour"])){
    $fileVideoName = date("YmdHis"); 
    $fileVideoInfo = pathinfo($_FILES["videoCour"]["name"]);
    $fileVideoName .= "." . $fileVideoInfo["extension"];
    move_uploaded_file($_FILES["videoCour"]["tmp_name"], "../files/" . $fileVideoName );
}

if(isset($_FILES["imageCour"])){
    $filePicName = date("YmdHis"); 
    $filePicInfo = pathinfo($_FILES["imageCour"]["name"]);
    $filePicName .= "." . $filePicInfo["extension"];
    move_uploaded_file($_FILES["imageCour"]["tmp_name"], "../files/" . $filePicName );
}






$video1 = new VideoCourse();
$idLastVideoCourse = $video1->ajouterCourVideo($_POST["titre"], $_POST["courText"], $filePicName, $fileVideoName, $_POST["category"], $_SESSION["id"]);

$tag = new Tag();

$maTable = array_keys($_POST);
for($i = 3; $i < count($_POST); $i++){

    $tag->addTagsToVideoCourse($maTable[$i], $idLastVideoCourse);
    echo $maTable[$i] . "<br>";
};

header("Location: ../index.php");

