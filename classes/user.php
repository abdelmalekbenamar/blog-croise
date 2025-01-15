<?php

class User{
    private $id;
    private $name;
    private $mail;
    private $pass;
    private $status;
    private $idRule;
    private $connection;

    public function __construct(){

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blogCroise;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //methode qui permet de creer un nouveau utilisateur
    public function createUser($type, $name, $mail, $pass){
        if($type == "teacher"){
            $rule = 2;
            $status = 0;
        }else if($type == "student"){
            $rule = 3;
            $status = 1;
        }
        $stmt = $this->connection->prepare("INSERT INTO users (nam, mail, pass, status, idRule) VALUES (:nam, :mail, :pass, :status, :idRule);");
        $stmt->bindParam(":nam", $name);
        $stmt->bindParam(":mail", $mail);
        $stmt->bindParam(":pass", $pass);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":idRule", $rule);
        $stmt->execute();

    }

    //method qui permet de se connecter
    public function connect($mail, $pass){
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE mail = :mail AND pass = :pass;");
        $stmt->bindParam(":mail", $mail);
        $stmt->bindParam(":pass", $pass);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}