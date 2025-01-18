<?php






abstract class AbstractVideo{
    abstract public function ajouterCourVideo($title, $content, $image, $video, $category, $idTeacher);
    abstract public function afficherCourVideo($idCour);
}



class VideoCourse extends AbstractVideo{

    private $id;
    private $title;
    private $content;
    private $image;
    private $video;
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

    //la fonction qui permet d ajouter un cour video
    public function ajouterCourVideo($title, $content, $image, $video, $category, $idTeacher){
        $stmt = $this->connection->prepare("INSERT INTO videoCourse(title, content, image, video, category, idTeacher) VALUES (:title, :content, :image, :video, :category, :idTeacher);");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":video", $video);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":idTeacher", $idTeacher);
        $stmt->execute();
        $lastInsertId = $this->connection->lastInsertId();
        return $lastInsertId;
    }

    //la fonction qui permet d'afficher un cour video
    public function afficherCourVideo($idCour){
        $stmt = $this->connection->prepare("SELECT * FROM videoCourse WHERE id = :idCour;");
        $stmt->bindParam(":idCour", $idCour);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } 

    //la fonction qui permet de retourner tous les cours videos
    public function displayAllVideos(){
        $stmt = $this->connection->prepare("SELECT * FROM videoCourse;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //la fonction qui permet de retourner tous les cours videos d'un enseignat
    public function displayTeacherCourseVideo($idTeacher){
        $stmt = $this->connection->prepare("SELECT * FROM videoCourse WHERE idTeacher = :idTeacher;");
        $stmt->bindParam(":idTeacher", $idTeacher);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //la fonction qui permet de modifier un cour texte
    public function modifyVideoCourse($idCourse, $title, $content, $image, $video){
        $stmt = $this->connection->prepare("UPDATE videoCourse SET title = :title, content = :content, image = :image, video = :video WHERE id = :id;");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":video", $video);
        $stmt->bindParam(":id", $idCourse);
        $stmt->execute();
    }

    //la fonction qui permet de supprimer un cour video
    public function deleteCourse($idCourse){
        $stmt = $this->connection->prepare("DELETE FROM videoCourse WHERE id = :id;");
        $stmt->bindParam(":id", $idCourse);
        $stmt->execute();
    }

    
 

}