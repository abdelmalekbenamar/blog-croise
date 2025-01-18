<?php 
require_once("../classes/user.php");

$user = new User();


$user->activateTeacher($_POST["idUser"]);
header("Location: ../parametreEnseignants.php");