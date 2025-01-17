<?php

class Tag{
    private $name;
    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blogCroise;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //fonction qui retourne tous les tags
    public function displayTags(){
        $stmt = $this->connection->prepare("SELECT * FROM tags;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //fonction qui permet d ajouter un ou plusieur tags a un cour Video (cette fonction doit etre ecrite dans la table RepresentVideo !!)
    public function addTagsToVideoCourse($tagId, $idCourse){
        $stmt = $this->connection->prepare("INSERT INTO presentVideo (idCourseVideo, idTag) VALUES (:idVideo, :tagId);");
        $stmt->bindParam(":idVideo", $idCourse);
        $stmt->bindParam(":tagId", $tagId);
        $stmt->execute();
    }

    //fonction qui permet d ajouter un ou plusieur tags a un cour text
    public function addTagsToTextCourse($tagId, $idCourse){
        $stmt = $this->connection->prepare("INSERT INTO presentText (idTag, idCourseText) VALUES (:tagId, :idCourse);");
        $stmt->bindParam(":tagId", $tagId);
        $stmt->bindParam(":idCourse", $idCourse);
        $stmt->execute();
    }

    //la fonction qui permet de editer un tag
    public function editTag($id, $newTag){
        $stmt = $this->connection->prepare("UPDATE tags SET nam = :nam WHERE id = :id;");
        $stmt->bindParam(":nam", $newTag);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    //la fonction qui permet de supprimer un tag
    public function deleteTag($id){
        $stmt = $this->connection->prepare("DELETE FROM tags WHERE id = :id;");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    //la fonction qui permet d ajouter un nouveau tag
    public function addTag($tag){
        $stmt = $this->connection->prepare("INSERT INTO tags (nam) VALUES (:tag);");
        $stmt->bindParam(":tag", $tag);
        $stmt->execute();
    }
}