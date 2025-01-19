<?php

class Category{

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

    //fonction qui retourne toutes les catégories
    public function displayCategories(){
        $stmt = $this->connection->prepare("SELECT * FROM categories;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //la fonction qui permet de modifier une catégorie
    public function modifyCategory($id, $newCategory){
        $stmt = $this->connection->prepare("UPDATE categories SET nam = :nam WHERE id = :id;");
        $stmt->bindParam(":nam", $newCategory);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    //la fonction qui permet de supprimer une categorie
    public function deleteCategory($id){
        $stmt = $this->connection->prepare("DELETE FROM categories WHERE id = :id;");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    //la fonction qui permet d ajouter une nouvelle categorie
    public function AddCategory($name){
        $stmt = $this->connection->prepare("INSERT INTO categories (nam) VALUES (:category);");
        $stmt->bindParam(":category", $name);
        $stmt->execute();
    }
}