<?php
abstract class AbstractText{
    abstract public function ajouterCourText($title, $content, $image, $category, $idTeacher);
    abstract public function afficherCourText($idCour);
}


abstract class AbstractVideo{
    abstract public function ajouterCourVideo($title, $content, $image, $video, $category, $idTeacher);
    abstract public function afficherCourVideo($idCour);
}
?>
