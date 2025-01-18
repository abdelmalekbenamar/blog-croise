<?php 
require_once("../classes/user.php");

$user = new User();


$user->desactiverEtudiant($_POST["idUser"]);
header("Location: ../parametreEtudiants.php");