<?php
require_once("../classes/tag.php");




$tag = new Tag();
$tag->addTag($_POST["titreNouvelleTag"]);
header("Location: ../parametreTags.php");