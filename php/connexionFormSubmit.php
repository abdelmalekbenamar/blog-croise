<?php
session_start();

require_once("../classes/user.php");
session_start();


$user = new User();

$result = $user->connect($_POST["mail"], $_POST["pass"]);

if(isset($result["mail"]) && isset($result["pass"])){

        if($result["status"] == 1){
            $_SESSION["id"] = $result["id"];
            $_SESSION["name"] = $result["nam"];
            $_SESSION["status"] = 1;
            $_SESSION["rule"] = $result["idRule"];
            header("Location: ../index.php");

        }else if($result["status"] == 0){
            session_unset();
            session_destroy();
            header("Location: ../userBloqued.php");
        }

}else{
    header("Location: ../connexion.php");
}