<?php
require_once("../classes/VideoCourse.php");

$videoObj = new VideoCourse();

if(isset($_FILES["courImage"])){
    $fileTextName = date("YmdHis"); 
    $fileTextInfo = pathinfo($_FILES["courImage"]["name"]);
    $fileTextName .= "." . $fileTextInfo["extension"];
    move_uploaded_file($_FILES["courImage"]["tmp_name"], "../files/" . $fileTextName );
}

if(isset($_FILES["courVideo"])){
    $fileVideoName = date("YmdHis"); 
    $fileVideotInfo = pathinfo($_FILES["courVideo"]["name"]);
    $fileVideoName .= "." . $fileVideotInfo["extension"];
    move_uploaded_file($_FILES["courVideo"]["tmp_name"], "../files/" . $fileVideoName );
}


$videoObj->modifyVideoCourse($_POST["idCour"], $_POST["titreCourAModifier"], $_POST["courAModifie"], $fileTextName, $fileVideoName);
header("Location: ../parametreCours.php");