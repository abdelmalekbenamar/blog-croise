<?php 
require_once("../classes/user.php");

$user1 = new User();
$user1->createUser($_POST["typeCompte"], $_POST["nom"], $_POST["mail"], $_POST["pass"]);
header("Location: ../connexion.php");


?>