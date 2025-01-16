<?php

abstract class AbstractText{
    abstract public function ajouterCourText($title, $content, $image, $category, $idTeacher);
    abstract public function afficherCourText($idCour);
}


class TextCourse extends AbstractText{
    private $title;
    private $content;
    private $image;
    private $category;
    private $idTeacher;
    private $connection;

    public function __construct(){

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blogCroise;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

    }

    //la fonction qui permet d ajouter un cour text
    public function ajouterCourText($title, $content, $image, $category, $idTeacher){
        $stmt = $this->connection->prepare("INSERT INTO textCourse (title, content, image, category, idTeacher) VALUES (:title, :content, :image, :category, :idTeacher);");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":idTeacher", $idTeacher);
        $stmt->execute();
        $lastInsertId = $this->connection->lastInsertId();
        return $lastInsertId;

    }

    //la fonction qui permet d afficher un cour text
    public function afficherCourText($idCour){
        $stmt = $this->connection->prepare("SELECT * FROM textCourse WHERE id = :idCour;");
        $stmt->bindParam(":idCour", $idCOur);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}

?>