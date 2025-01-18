<?php 
require_once("../classes/user.php");

$user = new User();


$user->activateStudent($_POST["idUser"]);
header("Location: ../parametreEtudiants.php");