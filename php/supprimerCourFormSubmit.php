<?php

require_once("../classes/textCourse.php");
require_once("../classes/videoCourse.php");

echo "id cour :" . $_POST["idArticleASupprime"] . "<br>";
echo "type cour :" . $_POST["typeCourASupp"];

if($_POST["typeCourASupp"] == "video"){
    $video = new VideoCourse();
    $video->deleteCourse($_POST["idArticleASupprime"]);
}else if($_POST["typeCourASupp"] == "text"){
    $text = new TextCourse();
    $text->deleteCourse($_POST["idArticleASupprime"]);
}

header("Location: ../parametreCours.php");