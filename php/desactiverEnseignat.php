<?php 
require_once("../classes/user.php");

$user = new User();


$user->desactiverTeacher($_POST["idUser"]);
header("Location: ../parametreEnseignants.php");