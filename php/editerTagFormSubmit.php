<?php
require_once("../classes/tag.php");

$tag = new Tag();


$tag->editTag($_POST["idTag"], $_POST["titreTagAModifier"]);
header("Location: ../parametreTags.php");